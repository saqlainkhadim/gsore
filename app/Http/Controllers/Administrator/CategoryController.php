<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Category;
use Auth;
use Session;
use Hash;
use DB;


class CategoryController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.category_module.index');
    }

    public function getCategoryData(Request $request){
        $requestData = $_REQUEST;
        $total = Category::where(['is_deleted'=>1])->count();
		$categories = Category::where(['is_deleted'=>1])->whereNotNull('id')->orderBy('created_at', 'desc');
		if ($requestData['search']['value']) {
			$categories = $categories->where('name', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$categories = $categories->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$categories = $categories->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($categories as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->name;
            $nestedData[] = '<img src="'.url('/backend/uploads/category/'.$item->image).'" alt="'.$item->image.'" width="80px">';
            if($item->status){
                $message = "'Are you sure you want to Inactive the Category?'";
                $nestedData[] = '<a href="' .url('/administrator/category/update-status/'.$item->id).'" onclick="return confirm('.$message.')" title="Active"><i class="fa fa-toggle-on"></i></a>';
            }else{
                $message = "'Are you sure you want to Active the Category?'";
                $nestedData[] = '<a href="' .url('/administrator/category/update-status/'.$item->id).'" onclick="return confirm('.$message.')" title="Inactive"><i class="fa fa-toggle-off"></i></a>';
            }

            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            $editLink = '<a href="' .url('/administrator/category/edit/'.$item->id).'" title="Edit"><button class="btn btn-warning btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></a>';
            $deleteLink = '<a href="' .url('/administrator/category/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/category/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
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
        return view('administrator.category_module.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
            'description' => 'required',
             'image' => 'required',
            'status' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->route('admin_category_create')->withErrors($validator)->withInput();
            }
            $data= $request->only('name','description','status');
            if($request->image){
                $path_original=public_path() . '/backend/uploads/category';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $data['image'] = $photo_name;
            }
            Category::create($data);
            return redirect()->route('admin_category')->with('success_message', 'One New category has been created successfully.');
    }

    public function updateStatus($id)
{
    $response=DB::statement("UPDATE categories SET status =(CASE WHEN (status = 1) THEN 0 ELSE 1 END) where id = $id");
    if($response) {
        Session::flash('success_message', 'status has been updated successfully!');
    }
    else {
        Session::flash('error_message', 'Unable to update status');
    }

    return redirect()->back();
  }
//     function delete($id){
//         // dd($id);
//         if($select = Category::find($id)){
//             $select->update(['is_deleted'=> '0']);
//             Session::flash('success_message', 'One Category has been deleted successfully!');
//     }else{
//         Session::flash('success_message', 'Please Try Again!');
//     }
//     return redirect()->back();
// }

function delete($id){
    if($select = Category::find($id)){
        $path_original=asset('/backend/uploads/category/');
        if ($select->image != '') {
            try {
                unlink($path_original . $select->image);
            } catch (\Exception $e) {
            }
        }
        $subcategory = DB::table("subcategories")->where("category_id", $id)->first();
        if($subcategory){
            Session::flash('error_message', 'Category has been Used. You cannot delete it! Please try later.');
        }else{
            $select->update(['is_deleted'=> '0']);
            Session::flash('success_message', 'One Category has been deleted successfully!');
        }
    }else{
        Session::flash('success_message', 'Please Try Again!');
    }
    return redirect()->route('admin_category');
}




    function view($id){
        $select = Category::where('id', $id)->first();
        return view('administrator.category_module.view', compact('select'));
    }

    function edit($id){
        $select = Category::where('id', $id)->first();
        return view('administrator.category_module.edit', compact('select'));
    }

    function edit_update(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert = Category::find($request->category_id);
            $insert->name = $request->name;
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/category';
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

            return redirect()->route('admin_category')->with('success_message', 'One category has been updated successfully.');

    }
}
