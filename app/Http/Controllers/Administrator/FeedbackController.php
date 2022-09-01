<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Feedback;
use App\Models\Event;
use Auth;
use Session;
use Hash;
use DB;


class FeedbackController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.feedback_module.index');
    }

    public function getFeedbackData(Request $request){
        $requestData = $_REQUEST;
        $total = Feedback::count();
		$feedback = Feedback::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$feedback = $feedback->where('name', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$feedback = $feedback->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$feedback = $feedback->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($feedback as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->name;
            $nestedData[] = '<img src="'.asset('/backend/uploads/feedback/'.$item->image).'" alt="category" width="80px">';

            if($item->status){
                $status = '<a href="'.url('/administrator/feedback/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/feedback/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $editLink = '<a href="' .url('/administrator/feedback/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/feedback/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            $ViewLink = '<a href="' .url('/administrator/feedback/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

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
        $event = Event::where('status', '1')->get();
        return view('administrator.feedback_module.create', compact('event'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'event' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_feedback_create')->withErrors($validator)->withInput();
            }
            $select = Event::find($request->event);
            $insert = new Feedback;
            $insert->event_id = $request->event;
            $insert->event_title = $select->title;
            $insert->name = $request->name;
            $insert->city_name = $request->city;
            $insert->message = $request->description;
            $insert->status = $request->status;

            if($request->image){

                $path_original=public_path() . '/backend/uploads/feedback';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }

            $insert->save();

            return redirect()->route('admin_feedback')->with('success_message', 'One New Feedback has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE feedbacks SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_feedback');
    }

    function delete($id){
        if($select = Feedback::find($id)){
            $path_original=asset('/backend/uploads/feedback/');
            if ($select->image != '') {
                try {
                    unlink($path_original . $select->image);
                } catch (\Exception $e) {
                }
            }
                $select->delete();
                Session::flash('success_message', 'One Feedback has been deleted successfully!');

        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_feedback');
    }

    function view($id){
        $select = Feedback::where('id', $id)->first();
        return view('administrator.feedback_module.view', compact('select'));
    }

    function edit($id){
        $select = Feedback::where('id', $id)->first();
        $event = Event::where('status', '1')->get();
        return view('administrator.feedback_module.edit', compact('select', 'event'));
    }

    function edit_update(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'city' => 'required',
            'description' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $select = Event::find($request->event);
            $insert = Feedback::find($request->id);
            $insert->event_id = $request->event;
            $insert->event_title = $select->title;
            $insert->name = $request->name;
            $insert->city_name = $request->city;
            $insert->message = $request->description;
            $insert->status = $request->status;

            if($request->image){
                $path_original=public_path() . '/backend/uploads/feedback';
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

            return redirect()->route('admin_feedback')->with('success_message', 'One feedback has been updated successfully.');

    }
}
