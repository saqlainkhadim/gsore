<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Blog;
use App\Models\BlogCategory;
use Auth;
use Session;
use Hash;
use DB;


class BlogController extends Controller
{

	public function __construct()
	{
	}

    public function index(){

        return view('administrator.blog_module.index');
    }

    public function getBlogData(Request $request){
        $requestData = $_REQUEST;
        $total = Blog::count();
		$blog = Blog::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$blog = $blog->where('title', 'like', '%' . $requestData['search']['value'] . '%')->orWhere('cat_name', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$blog = $blog->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$blog = $blog->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($blog as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->title;
            $nestedData[] = $item->description;
             $nestedData[] = '<img src="'.asset('/backend/uploads/blog/'.$item->image).'" alt="category" width="80px">';

            // if($item->is_home){
            //     $statuss = '<a href="'.url('/administrator/blog/update-home-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            // }else{
            //     $statuss = '<a href="'.url('/administrator/blog/update-home-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            // }
            // $nestedData[] = $statuss;
            if($item->status){
                $status = '<a href="'.url('/administrator/blog/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/blog/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $editLink = '<a href="' .url('/administrator/blog/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/blog/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            $ViewLink = '<a href="' .url('/administrator/blog/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

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
      
        return view('administrator.blog_module.create');
    }

    public function store(Request $request){
// dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_blog_create')->withErrors($validator)->withInput();
            }

            // $category = BlogCategory::where('id', $request->cat_id)->first();
            $insert = new Blog;
            // $insert->cat_id = $category->id;
            // $insert->cat_name = $category->title;
            // $insert->cat_slug = $category->slug;
            $insert->title = $request->title;
            // $insert->slug = str_slug($request->title, "-");
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/blog';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }

            $insert->save();
            return redirect()->route('admin_blog')->with('success_message', 'One New blog has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE blogs SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_blog');
    }

    // function update_home_status($id){
    //     $response=DB::statement("UPDATE blogs SET is_home =(CASE WHEN (is_home = '1') THEN '0' ELSE '1' END) where id = $id");
    //     if($response) {
    //         Session::flash('success_message', 'Status has been updated successfully!');
    //     }else {
    //         Session::flash('error_message', 'Unable to update status!');
    //     }
    //     return redirect()->route('admin_blog');
    // }

    function delete($id){
        if($select = Blog::find($id)){
            $path_original=asset('/backend/uploads/blog/');
            if ($select->image != '') {
                try {
                    unlink($path_original . $select->image);
                } catch (\Exception $e) {
                }
            }
            $select->delete();
            Session::flash('success_message', 'One Blog has been deleted successfully!');
        }else{
            Session::flash('error_message', 'Please Try Again!');
        }
        return redirect()->route('admin_blog');
    }

    function view($id){
        $select = Blog::where('id', $id)->first();
        return view('administrator.blog_module.view', compact('select'));
    }

    function edit($id){
        $select = Blog::where('id', $id)->first();
        return view('administrator.blog_module.edit', compact('select'));
    }

    function edit_update(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            // 'title' => 'required',
            // 'description' => 'required',
            // 'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // $category = BlogCategory::where('id', $request->cat_id)->first();
            $insert = Blog::find($request->category_id);
            $insert->title = $request->title;
            // $insert->cat_id = $category->id;
            // $insert->cat_name = $category->title;
            // $insert->cat_slug = $category->slug;
            // $insert->slug = str_slug($request->title, "-");
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/blog';
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
            return redirect()->route('admin_blog')->with('success_message', 'One Blog has been updated successfully.');

    }
}
