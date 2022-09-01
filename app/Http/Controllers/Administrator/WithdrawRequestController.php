<?php
namespace App\Http\Controllers\Administrator; //admin add
use App\Http\Controllers\Controller;   // using controller class
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use App\Models\WithdrawWallet;
use App\Models\GeneratePin;
use Datatables;
use DB;
use URL;
class WithdrawRequestController extends Controller
{
   public function __construct()
    {

    }

   public function index(Request $request)
    {
        return view('administrator.withdrawl_request_module.request');
    }

   public function getWithdrawlRequestData(Request $request)
    {
        $requestData = $_REQUEST;
        $total = WithdrawWallet::with('user')->where('status','pending')->where('is_deleted', 0)->count();
		$data = WithdrawWallet::with("user")->whereNotNull('id')->where('is_deleted', 0)->where('status','pending')->orderBy('created_at', 'desc');
		if ($requestData['search']['value']) {
			$data = $data->where('amount', 'like', '%' . $requestData['search']['value'] . '%');
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
            $nestedData[] = $item->user?$item->user->username:"-";
            $nestedData[] = $item->user?$item->user->simple_pass:"-";
            $nestedData[] = $item->user?$item->user->sponsor_id:"-";
            $nestedData[] = $item->user?$item->user->parent_id:"-";
            $nestedData[] = $item->user?$item->user->mobile:"-";
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $ViewLink = '<a href="' .url('/administrator/withdraw/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

            $approved = '<a href="' .url('/administrator/withdraw/update-status-approved/'.$item->id).' " class="btn btn-warning btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">Approved</span></a>';
            $rejected = '<a href="' .url('/administrator/withdraw/update-status-rejected/'.$item->id).' " class="btn btn-warning btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">Rejected</span></a>';

            $deleteLink = '<a href="' .url('/administrator/withdraw/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">Delete</span></a>';

            $nestedData[] = $approved."  ".$rejected."  ".$ViewLink."  ".$deleteLink;
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

    //  function update_status($id=null)
    // {
    //     $response=DB::statement("UPDATE withdraw_wallets SET status =(CASE WHEN (status = 'approved') THEN 'pending' ELSE 'approved' END) where id = $id");
    //     if($response) {
    //         Session::flash('success_message', 'Request has been updated successfully!');
    //     }
    //     else {
    //         Session::flash('error_message', 'Unable to update request');
    //     }
    //     return redirect('/administrator/withdraw/approved-request');
    // }


   public function view($id){
        $withdraw = WithdrawWallet::findorfail($id);
        return view('administrator.withdrawl_request_module.view',compact('withdraw'));
    }


    public function delete( $id)
    {
        $update = DB::table('withdraw_wallets')->where('id', $id)->update(['is_deleted' => 1]);
        if($update)
        {
            Session::flash('success_message', 'Request has been deleted successfully!');
        }
        else {
            Session::flash('error_message', 'Unable to delete this request');
        }
        return redirect()->back();
    }

    public function update_status_approved( $id){
    	$reject = DB::table('withdraw_wallets')->where('id', $id)->update(['status' => 'approved']);
        if($reject)
        {
            Session::flash('success_message', 'Request has been approved successfully!');
            return redirect()->back();
        }
        else {
            Session::flash('error_message', 'Unable to approved this request');
        }
    }

    public function update_status_rejected( $id){
    	$reject = DB::table('withdraw_wallets')->where('id', $id)->update(['status' => 'rejected']);
        if($reject)
        {
            Session::flash('success_message', 'Request has been Rejected successfully!');
            return redirect()->back();
        }
        else {
            Session::flash('error_message', 'Unable to Reject this request');
        }

    }

     public function approved_request(Request $request)
    {
        return view('administrator.withdrawl_request_module.approved');

    }

     public function getWithdrawlApprovedData(Request $request)
    {
        $requestData = $_REQUEST;
        $total = WithdrawWallet::with('user')->where('status','approved')->where('is_deleted', '0')->count();
		$data = WithdrawWallet::with("user")->whereNotNull('id')->where('is_deleted', '0')->where('status','approved')->orderBy('created_at', 'desc');
		if ($requestData['search']['value']) {
			$data = $data->where('amount', 'like', '%' . $requestData['search']['value'] . '%');
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
            $nestedData[] = $item->user?$item->user->username:"-";
            $nestedData[] = $item->user?$item->user->simple_pass:"-";
            $nestedData[] = $item->user?$item->user->sponsor_id:"-";
            $nestedData[] = $item->user?$item->user->parent_id:"-";
            $nestedData[] = $item->user?$item->user->mobile:"-";
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $ViewLink = '<a href="' .url('/administrator/withdraw/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';


            $rejected = '<a href="' .url('/administrator/withdraw/update-status-rejected/'.$item->id).' " class="btn btn-warning btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">Rejected</span></a>';

            $deleteLink = '<a href="' .url('/administrator/withdraw/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">Delete</span></a>';

            $nestedData[] = $rejected."  ".$ViewLink."  ".$deleteLink;
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

     public function rejected_request(Request $request)
    {
        return view('administrator.withdrawl_request_module.reject');

    }

    public function getWithdrawlRejectData(Request $request)
    {
        $requestData = $_REQUEST;
        $total = WithdrawWallet::with('user')->where('status','rejected')->where('is_deleted', '0')->count();
		$data = WithdrawWallet::with("user")->whereNotNull('id')->where('is_deleted', '0')->where('status','rejected')->orderBy('created_at', 'desc');
		if ($requestData['search']['value']) {
			$data = $data->where('amount', 'like', '%' . $requestData['search']['value'] . '%');
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
            $nestedData[] = $item->user?$item->user->username:"-";
            $nestedData[] = $item->user?$item->user->simple_pass:"-";
            $nestedData[] = $item->user?$item->user->sponsor_id:"-";
            $nestedData[] = $item->user?$item->user->parent_id:"-";
            $nestedData[] = $item->user?$item->user->mobile:"-";
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            $ViewLink = '<a href="' .url('/administrator/withdraw/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

            $approved = '<a href="' .url('/administrator/withdraw/update-status-approved/'.$item->id).' " class="btn btn-warning btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">Approved</span></a>';

            $deleteLink = '<a href="' .url('/administrator/withdraw/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">Delete</span></a>';

            $nestedData[] = $approved."  ".$ViewLink."  ".$deleteLink;
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


}

?>
