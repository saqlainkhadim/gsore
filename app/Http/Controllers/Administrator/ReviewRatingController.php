<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\ReviewRating;
use App\Models\Event;
use Auth;
use Session;
use Hash;
use DB;


class ReviewRatingController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.review_module.index');
    }

    public function getreviewData(Request $request){
        $requestData = $_REQUEST;
        $total = ReviewRating::count();
		$review = ReviewRating::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$review = $review->where('event_title', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$review = $review->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$review = $review->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($review as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->event_title;
            $nestedData[] = $item->name;
            if($item->rating > 3){
                $rating = "<span class='text-success'> ".$item->rating."</span>";
            }elseif($item->rating >2){
                $rating = "<span class='text-warning'> ".$item->rating."</span>";
            }else{
                $rating = "<span class='text-danger'> ".$item->rating."</span>";
            }
            $nestedData[] = $rating;

            if($item->status){
                $status = '<a href="'.url('/administrator/review/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/review/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $editLink = '<a href="' .url('/administrator/review/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/review/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            $ViewLink = '<a href="' .url('/administrator/review/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

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
        $event = Event::where("status", '1')->get();
        return view('administrator.review_module.create', compact('event'));
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'name' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'status' => 'required',
            'event_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_review_create')->withErrors($validator)->withInput();
            }
            $select = Event::find($request->event_id);
            // dd($request->all());
            $insert = new ReviewRating;
            $insert->event_id = $request->event_id;
            $insert->event_title = $select->title;
            $insert->name = $request->name;
            $insert->email = $request->email;
            $insert->rating = $request->rating;
            $insert->message = $request->description;
            $insert->status = $request->status;
            $insert->save();

            return redirect()->route('admin_review')->with('success_message', 'One New review has been created successfully.');
    }

    function update_status($id){
        $response=DB::statement("UPDATE review_ratings SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_review');
    }

    function delete($id){
        if($select = ReviewRating::find($id)){
                $select->delete();
                Session::flash('success_message', 'One review has been deleted successfully!');

        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_review');
    }

    function view($id){
        $select = ReviewRating::where('id', $id)->first();
        return view('administrator.review_module.view', compact('select'));
    }

    function edit($id){
        $event = Event::where("status", '1')->get();
        $select = ReviewRating::where('id', $id)->first();
        return view('administrator.review_module.edit', compact('select', 'event'));
    }

    function edit_update(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'name' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'status' => 'required',
            'event_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $select = Event::find($request->event_id);

            $insert = ReviewRating::find($request->review_id);
            $insert->event_id = $request->event_id;
            $insert->event_title = $select->title;
            $insert->name = $request->name;
            $insert->email = $request->email;
            $insert->rating = $request->rating;
            $insert->message = $request->description;
            $insert->status = $request->status;
            $insert->save();

            return redirect()->route('admin_review')->with('success_message', 'One review has been updated successfully.');

    }
}
