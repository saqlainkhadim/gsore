<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\Models\Category;
use App\Models\Slider;
use Auth;
use Session;
use Hash;
use DB;


class BannerController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.slider_module.index');
    }

    public function getBannerData(Request $request){
        $requestData = $_REQUEST;
        $total = Slider::count();
		$data = Slider::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$data = $data->where('cat_name', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$data = $data->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$data = $data->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($data as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->title;
            $nestedData[] = '<img src="'.asset('/backend/uploads/slider/'.$item->image).'" alt="category" width="80px">';
            $nestedData[] = $item->description;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            if($item->status){
                $status = '<a href="'.url('/administrator/banner/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/banner/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;
            $editLink = '<a href="' .url('/administrator/banner/edit/'.$item->id).'" class="btn btn-primary btn-anim" ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            // $deleteLink = '<a href="' .url('/administrator/banner/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            $ViewLink = '<a href="' .url('/administrator/category/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

            $nestedData[] = $editLink;
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
       
        return view('administrator.slider_module.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert = new Slider;
            $insert->title = $request->title;
            $insert->description = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/slider';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }

            $insert->save();
            return redirect()->route('admin_banner')->with('success_message', 'One New Banner has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE banner SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->back();
    }

    function delete($id){
        if($select = slider::find($id)){
            $path_original=asset('/backend/uploads/slider/');
            if ($select->image != '') {
                try {
                    unlink($path_original . $select->image);
                } catch (\Exception $e) {
                }
            }
                $select->delete();
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->back();
    }

    // function view($id){
    //     $select = Slider::where('id', $id)->first();

    //     return view('administrator.slider_module.view', compact('select'));
    // }

    function edit($id){
       
        $select = Slider::where('id', $id)->first();
        return view('administrator.slider_module.edit', compact('select'));
    }

    function edit_update(Request $request){

        $validator = Validator::make($request->all(), [
          
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $update = Slider::find($request->slider_id);
            $update->title = $request->title;
            $update->description = $request->description;
            $update->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/slider';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                if ($request->old_image != '') {
                    try {
                        unlink($path_original . $request->old_image);
                    } catch (\Exception $e) {
                    }
                }
                $update->image = $photo_name;
            }

            $update->save();
            return redirect()->route('admin_banner')->with('success_message', 'One Slider has been updated successfully.');

    }
}
