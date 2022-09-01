<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\CMS;
use Auth;
use Session;
use Hash;
use DB;


class PageController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.page_module.index');
    }

    public function getPageData(Request $request){
        $requestData = $_REQUEST;
        $total = CMS::count();
		$page = CMS::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$page = $page->where('title', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$page = $page->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$page = $page->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($page as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->title;
            $nestedData[] = '<img src="'.asset('/backend/uploads/page/'.$item->image).'" alt="page" width="80px">';

            if($item->status){
                $status = '<a href="'.url('/administrator/page/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/page/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            $editLink = '<a href="' .url('/administrator/page/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/page/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            $ViewLink = '<a href="' .url('/administrator/page/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

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
        return view('administrator.page_module.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_page_create')->withErrors($validator)->withInput();
            }

            // dd($request->all());
            $insert = new CMS;
            $insert->title = $request->title;
            $insert->slug = str_slug($request->title, "-");
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){

                $path_original=public_path() . '/backend/uploads/page';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }

            $insert->save();

            return redirect()->route('admin_page')->with('success_message', 'One New Page has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE cms SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_page');
    }

    function delete($id){
        if($select = CMS::find($id)){
            $path_original=asset('/backend/uploads/page/');
            if ($select->image != '') {
                try {
                    unlink($path_original . $select->image);
                } catch (\Exception $e) {
                }
            }
            $select->delete();
            Session::flash('success_message', 'One Page has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_page');
    }

    function view($id){
        $select = CMS::where('id', $id)->first();
        return view('administrator.page_module.view', compact('select'));
    }

    function edit($id){
        $select = CMS::where('id', $id)->first();
        return view('administrator.page_module.edit', compact('select'));
    }

    function edit_update(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert = CMS::find($request->page_id);
            $insert->title = $request->title;
            $insert->slug = str_slug($request->title, "-");
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/page';
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

            return redirect()->route('admin_page')->with('success_message', 'One page has been updated successfully.');

    }
}
