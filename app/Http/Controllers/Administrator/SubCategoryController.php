<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Session;
use DB;



class SubCategoryController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.subCategory_module.index');
    }

    public function getsubCategoryData(Request $request){
        $requestData = $_REQUEST;
        $total = SubCategory::where('is_deleted',1)->count();
		$sub_category = SubCategory::where('is_deleted',1)->whereNotNull('id')->orderBy('created_at', 'desc');
		if ($requestData['search']['value']) {
			$sub_category = $sub_category->where('title', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$sub_category = $sub_category->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$sub_category = $sub_category->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($sub_category as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->category_name;
            $nestedData[] = $item->title;

            $nestedData[] = '<img src="'.asset('/backend/uploads/subcategory/'.$item->image).'" alt="subcategory" width="80px">';
            $nestedData[] = $item->price;

            if($item->status){
                $status = '<a href="'.url('/administrator/sub-category/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/sub-category/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            $editLink = '<a href="' .url('/administrator/sub-category/edit/'.$item->id).'" title="Edit"><button class="btn btn-warning btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></a>';
            $deleteLink = '<a href="' .url('/administrator/sub-category/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/sub-category/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $nestedData[] = $ViewLink." ". $editLink."  ".$deleteLink;
			$datas[] = $nestedData;
		};

		return [
			'data' => $datas,
			'total' => intval($total),
            "recordsTotal" => intval($total),
            "recordsFiltered" => intval($total),
			'draw' => $request['draw']
		];
    }

    public function create(){
        $category = Category::get();
        return view('administrator.subCategory_module.create', compact('category'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
            'price' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_sub_category_create')->withErrors($validator)->withInput();
            }
            $select = Category::where('id', $request->category)->first();
            $insert = new SubCategory;
            $insert->category_id = $select->id;
            $insert->category_name = $select->name;
            $insert->title = $request->title;
            $insert->price = $request->price;
            $insert->slug = str_slug($request->title, "-");
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/subcategory';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }
            $insert->save();
            return redirect()->route('admin_sub_category')->with('success_message', 'One New sub-category has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE subcategories SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_sub_category');
    }

    function delete($id){
        if($select = SubCategory::find($id)){
                $select->update(['is_deleted'=> '0']);
                Session::flash('success_message', 'One SubCategory has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->back();
    }
    // public function delete($id){

    //     SubCategory::find($id)->delete($id);

    //     return redirect()->route('admin_sub_category');
    // }

    function view($id){
        $select = SubCategory::where('id', $id)->first();
        return view('administrator.subCategory_module.view', compact('select'));
    }

    function edit($id){
        $category = Category::get();
        $select = SubCategory::where('id', $id)->first();
        return view('administrator.subCategory_module.edit', compact('select', 'category'));
    }

    function edit_update(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $select = Category::where('id', $request->category)->first();
            $insert = SubCategory::find($request->subcategory_id);
            $insert->title = $request->title;
            $insert->price = $request->price;
            $insert->category_id = $select->id;
            $insert->category_name = $select->name;
            $insert->slug = str_slug($request->title, "-");
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/subcategory';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                if ($request->old_image != '') {
                    try {
                        unlink($path_original . $request->old_image);
                    } catch (\Exception $e) {
                    }
                }
                $insert->image = $photo_name;
            }
            $insert->save();

            return redirect()->route('admin_sub_category')->with('success_message', 'One Sub-category has been updated successfully.');

    }
}
