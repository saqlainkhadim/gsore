<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Userkyc;
use Auth;
use Session;
use Hash;
use DB;


class CustomerController extends Controller
{

	public function __construct()
	{

	}

    public function allCustomer(){
        return view('administrator.customer_module.all');
    }

    public function getallCustomerData(Request $request){
        $requestData = $_REQUEST;
        $total = User::with('user_kyc')->count();
		$users = User::with('user_kyc')->whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$users = $users->where('email', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$users = $users->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$users = $users->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($users as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->username;
            $nestedData[] = $item->email;
            $nestedData[] = $item->mobile;
            $nestedData[] = date("d-m-Y a" , strtotime($item->created_at));
            if($item->verify_status == 'verified'){
                $status = "<span class='text-success'>Active</span>";
            }else{
                $status = "<span class='text-danger'>Inactive</span>";
            }

            $nestedData[] = $status;
            $treeLink = '<a href="' .url('/administrator/all-customer-tree/view/'.$item->id).' " title="View Tree"><button class="btn btn-success btn-icon-anim btn-circle"><i class="fa fa-tree" aria-hidden="true"></i></button></a>';
            $deleteLink = '<a href="' .url('/administrator/all-customer-list/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/all-customer-list/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $nestedData[] = $ViewLink." ".$deleteLink." ".$treeLink;
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

    function delete($id){
        if($select = User::find($id)){
            $select->delete();
            Userkyc::where('user_id', $id)->delete();
            Session::flash('success_message', 'One User has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->back();
    }

    function update_status($id){
        $select = User::where('id', $id)->first();
            if($select->verify_status == "verified"){
                $update = User::where('id', $id)->update(['verify_status'=>'unverified']);
                Session::flash('success_message', 'Status has been updated successfully!');
            }elseif($select->verify_status == "unverified"){
                $update = User::where('id', $id)->update(['verify_status'=>'verified']);
                Session::flash('success_message', 'Status has been updated successfully!');
            }else{
                Session::flash('error_message', 'Unable to update status!');
            }
        return redirect()->back();
    }

    function view($id){
        $select = User::where('id', $id)->first();
        return view('administrator.customer_module.view', compact('select'));
    }


    public function activeCustomer(){
        return view('administrator.customer_module.active');
    }

    public function getactiveCustomerData(Request $request){
        $requestData = $_REQUEST;
        $total = User::with('user_kyc')->where('verify_status', 'verified')->count();
		$users = User::with('user_kyc')->where('verify_status', 'verified')->whereNotNull('id');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$users = $users->where('email', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$users = $users->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$users = $users->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($users as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->username;
            $nestedData[] = $item->email;
            $nestedData[] = $item->mobile;
            $nestedData[] = date("d-m-Y a" , strtotime($item->created_at));

            if($item->verify_status == 'verified'){
                $statuss = '<a href="'.url('/administrator/all-customer-list/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $statuss = '<a href="'.url('/administrator/all-customer-list/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $statuss;
            $deleteLink = '<a href="' .url('/administrator/all-customer-list/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/all-customer-list/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $nestedData[] = $ViewLink." ".$deleteLink;
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



    public function inactiveCustomer(){
        return view('administrator.customer_module.inactive');
    }

    public function getinactiveCustomerData(Request $request){
        $requestData = $_REQUEST;
        $total = User::with('user_kyc')->where('verify_status', 'unverified')->count();
		$users = User::with('user_kyc')->where('verify_status', 'unverified')->whereNotNull('id');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$users = $users->where('email', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$users = $users->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$users = $users->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($users as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->username;
            $nestedData[] = $item->email;
            $nestedData[] = $item->mobile;
            $nestedData[] = date("d-m-Y a" , strtotime($item->created_at));

            if($item->verify_status == 'verified'){
                $statuss = '<a href="'.url('/administrator/all-customer-list/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $statuss = '<a href="'.url('/administrator/all-customer-list/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $statuss;
            $deleteLink = '<a href="' .url('/administrator/all-customer-list/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/all-customer-list/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $nestedData[] = $ViewLink." ".$deleteLink;
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

    function get_order(Request $request, $id){
        dd($id);
    }

    public function allManageCustomer($id)
    {
        $customer = User::where('id',$id)->first();
        return view('administrator.customer_module.customerTreeView',compact('customer'));
    }

}
