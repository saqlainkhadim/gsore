<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\UserKyc;
use App\Models\HelpAndSupport;
use Auth;
use Session;
use Hash;
use Helper;
use DB;


class HelpAndSupportController extends Controller
{
	public function __construct()
	{
	}
    
    /*-------Show Pending List Page ---------*/
    public function pending_index(){
        return view('administrator.help_and_support.pending_index');
    }

    /*-------Get pending data for listing Page ---------*/
    public function getPendingData(Request $request){
        $column = [ '0'=>'id', '1'=>'userId', '2'=>'subject' ,'3'=>'status' ,'4'=>'createdAt' ];
        $requestData = $_REQUEST;
        $total = HelpAndSupport::where('isDeleted', '1')->where('status','pending')->get()->count();
		$data = HelpAndSupport::where('status','pending')->where('isDeleted', '1');
        if ($requestData['search']['value']) {
			$data = $data->where(function ($query) use ($requestData) {
                $query->orWhere('subject', 'like','%'.$requestData['search']['value'].'%');
            });
        }
		$column_name = $column[$requestData['order'][0]['column']];
		$data = $data->orderBy($column_name, $requestData['order'][0]['dir'] == 'asc' ? 'ASC' : 'DESC');

		$data = $data->paginate($requestData['length'] ? $requestData['length'] : 10);
		$i = 0;
		$datas = [];
		foreach ($data as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->subject;
            $nestedData[] = "<span class='text-warning'> Pending</span>";
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->createdAt));
            $ViewLink = '<a href="' .url('/administrator/help-and-support/pending/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $approvedLink = '<button class="btn btn-success btn-icon-anim btn-circle " onclick="show_popup('."'".$item->id."'".')"><i class="fa fa-check"></i><span class="btn-text"></span></button>';
            $rejectedLink = '<button class="btn btn-danger btn-icon-anim btn-circle " onclick="showw_popup('."'".$item->id."'".')"><i class="fa fa-close"></i><span class="btn-text"></span></button>';
         
            $view = Helper::check_button_second(1,"helpAndSupport","pending","view")?$ViewLink:"";
            $solved = Helper::check_button_second(1,"helpAndSupport","pending","solved")?$approvedLink:"";
            $reject =Helper::check_button_second(1,"helpAndSupport","pending","reject")?$rejectedLink:"";
            
            $nestedData[] = $view."  ". $solved."  ".$reject;

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
 
    /*-------Show pending rejected data ---------*/
    function pending_rejected($id){
        if($select = HelpAndSupport::find($id)){
                $select->update(['isDeleted'=> '0']);
                Session::flash('success_message', 'Rejected successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->back();
    }

    /*-------Show pending user data---------*/
    function pending_view($id){
        $select = HelpAndSupport::where('id', $id)->first();
        return view('administrator.help_and_support.pending_view', compact('select'));
    }
    
    /*-------Show approved answer data---------*/
        function approvedAnswer(Request $request){
            HelpAndSupport::where('id', $request->slider_id)->update(['answer'=> $request->answer, 'status'=>'solved']);
            Session::flash('success_message', 'Answer updated successfully.');
            return json_encode(['status'=>true]);
        }
  
    /*-------Show rejected answer data---------*/
        function rejectedAnswer(Request $request){
         HelpAndSupport::where('id', $request->reject_id)->update(['answer'=> $request->answer, 'status'=>'reject']);
        Session::flash('success_message', 'Answer updated successfully.');
        return json_encode(['status'=>true]);
    }

    /*-------Show Approved List Page ---------*/
    public function approved_index(){
        return view('administrator.help_and_support.approved_index');
    }
    
    /*-------Get approved data for listing Page ---------*/
    public function getApprovedData(Request $request){
       $column = [ '0'=>'id', '1'=>'userName', '2'=>'subject' ,'3'=>'status' ,'4'=>'updatedAt' ];
       $requestData = $_REQUEST;
       $total = HelpAndSupport::where('isDeleted', '1')->where('status','solved')->get()->count();
       $data = HelpAndSupport::whereNotNull('id')->where('status','solved')->where('isDeleted', '1');
       if ($requestData['search']['value']) {
           $data = $data->where(function ($query) use ($requestData) {
               $query->orWhere('userName', 'like','%'.$requestData['search']['value'].'%');
           });
       }
       $column_name = $column[$requestData['order'][0]['column']];
       $data = $data->orderBy($column_name, $requestData['order'][0]['dir'] == 'asc' ? 'ASC' : 'DESC');
       $data = $data->paginate($requestData['length'] ? $requestData['length'] : 10);
       $i = 0;
       $datas = [];
       foreach ($data as $item) {
           $i++;
           $nestedData = array();
           $nestedData[] = $i;
           $nestedData[] = $item->subject;
           $nestedData[] = "<span class='text-success'> Approved</span>";;
           $nestedData[] = date("d-m-Y h:i a", strtotime($item->updatedAt));
           $ViewLink = '<a href="' .url('/administrator/help-and-support/approved/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';

           $view = Helper::check_button_second(1,"helpAndSupport","approved","view")?$ViewLink:"";

           $nestedData[] = $view;
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

    /*-------Show approved user data---------*/
   function approved_view($id){
    $select = HelpAndSupport::where('id', $id)->first();
    return view('administrator.help_and_support.approved_view', compact('select'));
  }

    /*-------Show Rejected List Page ---------*/
    public function rejected_index(){
        return view('administrator.help_and_support.rejected_index');
    }
    
    /*-------Get rejected data for listing Page ---------*/
    public function getRejectedData(Request $request){
        //dd('hello');
       $column = [ '0'=>'id', '1'=>'userName', '2'=>'subject' ,'3'=>'status' ,'4'=>'updatedAt' ];
       $requestData = $_REQUEST;
       $total = HelpAndSupport::where('isDeleted', '1')->where('status','reject')->get()->count();
       $data = HelpAndSupport::whereNotNull('id')->where('status','reject')->where('isDeleted', '1');
       if ($requestData['search']['value']) {
           $data = $data->where(function ($query) use ($requestData) {
               $query->orWhere('userName', 'like','%'.$requestData['search']['value'].'%');
           });
       }
       $column_name = $column[$requestData['order'][0]['column']];
       $data = $data->orderBy($column_name, $requestData['order'][0]['dir'] == 'asc' ? 'ASC' : 'DESC');

       $data = $data->paginate($requestData['length'] ? $requestData['length'] : 10);
       $i = 0;
       $datas = [];
       foreach ($data as $item) {
           $i++;
           $nestedData = array();
           $nestedData[] = $i;
           $nestedData[] = $item->subject;
           $nestedData[] = "<span class='text-danger'> Rejected</span>";
           $nestedData[] = date("d-m-Y h:i a", strtotime($item->updatedAt));
           $ViewLink = '<a href="' .url('/administrator/help-and-support/rejected/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
           $view = Helper::check_button_second(1,"helpAndSupport","rejected","view")?$ViewLink:"";

           $nestedData[] = $view;
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
   /*-------Show approved user data---------*/
   function rejected_view($id){
    $select = HelpAndSupport::where('id', $id)->first();
    return view('administrator.help_and_support.rejected_view', compact('select'));
}

}
?>



