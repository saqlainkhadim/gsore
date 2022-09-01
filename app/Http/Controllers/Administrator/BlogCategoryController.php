<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\BlogCategory;
use Auth;
use Session;
use Hash;
use DB;
use File;


class BlogCategoryController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.blog_category_module.index');
    }

    public function getBlogCategoryData(Request $request){
        $requestData = $_REQUEST;
        $total = BlogCategory::count();
		$blog_category = BlogCategory::whereNotNull('id')->orderBy('created_at', 'desc');
		if ($requestData['search']['value']) {
			$blog_category = $blog_category->where('title', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$blog_category = $blog_category->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$blog_category = $blog_category->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($blog_category as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->title;
            $nestedData[] = '<img src="'.asset('/backend/uploads/blog_category/'.$item->image).'" alt="Blog Category" width="80px">';

            if($item->status){
                $status = '<a href="'.url('/administrator/blog-category/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/blog-category/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }

            $nestedData[] = $status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $editLink = '<a href="' .url('/administrator/blog-category/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/blog-category/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';

            $nestedData[] = $editLink."  ".$deleteLink;
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
        return view('administrator.blog_category_module.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_Blogcategory_create')->withErrors($validator)->withInput();
            }

            // dd($request->all());
            $insert = new BlogCategory;
            $insert->title = $request->title;
            $insert->slug = str_slug($request->title, "-");
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/blog_category';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }

            $insert->save();
            return redirect()->route('admin_Blogcategory')->with('success_message', 'One New Blog category has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE blog_categories SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_Blogcategory');
    }

    function delete($id){
        if($select = BlogCategory::find($id)){
            $image_path         = asset('/backend/uploads/blog_category/')."/".$select->image;
            if ($select->image != '') {
                try {
                    unlink($image_path);
                } catch (\Exception $e) {
                }
            }

            $subcategory = DB::table("blogs")->where("cat_id", $id)->first();
            if($subcategory){
                Session::flash('error_message', 'Category has been Used. You cannot delete it! Please try later.');
            }else{
                $select->delete();
                Session::flash('success_message', 'One Category has been deleted successfully!');
            }
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_Blogcategory');
    }

    function edit($id){
        $select = BlogCategory::where('id', $id)->first();
        return view('administrator.blog_category_module.edit', compact('select'));
    }

    function edit_update(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert = BlogCategory::find($request->category_id);
            $insert->title = $request->title;
            $insert->slug = str_slug($request->title, "-");
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/blog_category';
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
            return redirect()->route('admin_Blogcategory')->with('success_message', 'One Blog category has been updated successfully.');

    }
}
