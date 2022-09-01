<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\As_seen_no;
use Auth;
use Session;
use Hash;
use DB;

class AsSeenNoController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.asSoonAs_module.index');
    }

    public function getas_seen_noData(Request $request){
        $requestData = $_REQUEST;
        $total = As_seen_no::count();
		$gallery = As_seen_no::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$gallery = $gallery->where('title', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$gallery = $gallery->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$gallery = $gallery->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($gallery as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img src="'.asset('/backend/uploads/gallery/'.$item->image).'" alt="gallery" width="80px">';


            if($item->status){
                $status = '<a href="'.url('/administrator/as-seen-no/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/as-seen-no/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $editLink = '<a href="' .url('/administrator/as-seen-no/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/as-seen-no/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';

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
        return view('administrator.asSoonAs_module.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_as_seen_no')->withErrors($validator)->withInput();
            }

            // dd($request->all());
            $insert = new As_seen_no;
            $insert->status = $request->status;
            if($request->image){
                $path_original=public_path() . '/backend/uploads/gallery';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }

            $insert->save();

            return redirect()->route('admin_as_seen_no')->with('success_message', 'One New Image has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE asseennos SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_as_seen_no');
    }

    function update_home_status($id){
        $response=DB::statement("UPDATE asseennos SET is_home =(CASE WHEN (is_home = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_as_seen_no');
    }

    function delete($id){
        if($select = As_seen_no::find($id)){
            $path_original=asset('/backend/uploads/gallery/');
            if ($select->image != '') {
                try {
                    unlink($path_original . $select->image);
                } catch (\Exception $e) {
                }
            }
                $select->delete();
                Session::flash('success_message', 'One As seen no has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_as_seen_no');
    }

    function edit($id){
        $select = As_seen_no::where('id', $id)->first();
        return view('administrator.asSoonAs_module.edit', compact('select'));
    }

    function edit_update(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert = As_seen_no::find($request->gallery_id);
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/gallery';
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

            return redirect()->route('admin_as_seen_no')->with('success_message', 'Data has been updated successfully.');

    }
}
