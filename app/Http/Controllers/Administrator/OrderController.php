<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Order;
use App\Models\Event;
use App\Models\OrderMeta;
use Auth;
use Session;
use Hash;
use DB;


class OrderController extends Controller
{

	public function __construct()
	{

	}

    // public function All_list(){
    //     return view('administrator.order_module.all');
    // }

    // public function admin_getAll_data(Request $request){
    //     $requestData = $_REQUEST;
    //     $total = Order::count();
	// 	$pending = Order::with('event_data')->orderBy('created_at', 'desc');
    //     // dd($requestData['search']['value']);
	// 	if ($requestData['search']['value']) {
	// 		$pending = $pending->where('email', 'like', '%' . $requestData['search']['value'] . '%');
	// 	}
	// 	if ($request->orderBy) {
	// 		$pending = $pending->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
	// 	}
	// 	$pending = $pending->paginate($request->limit ? $request->limit : 20);
	// 	$i = 0;
	// 	$datas = [];
	// 	foreach ($pending as $item) {
	// 		$i++;
	// 		$nestedData = array();
    //         $nestedData[] = $i;
    //         $nestedData[] = $item->name;
    //         $nestedData[] = $item->email;
    //         $nestedData[] = date("d-m-Y", strtotime($item->event_date));
    //         $nestedData[] = $item->event_data?$item->event_data->title:"";

    //         if($item->current_status == "cancelled"){
    //             $statusa = '<span class="text-info">'.ucfirst($item->current_status).'</span>';
    //         }else{
    //             $statusa = '<span class="text-success">'.ucfirst($item->current_status).'</span>';
    //         }
    //         $nestedData[] = $statusa;

    //         if($item->payment_status == "faild"){
    //             $status = '<span class="text-info">'.ucfirst($item->payment_status).'</span>';
    //         }else{
    //             $status = '<span class="text-primary">'.ucfirst($item->payment_status).'</span>';
    //         }
    //         $nestedData[] = $status;
    //         $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));



    //         $ViewLink = '<a href="' .url('/administrator/order/package-view/'.$item->id).' " class="btn btn-primary  btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';


    //         $nestedData[] = $ViewLink;
	// 		$datas[] = $nestedData;
	// 	};

	// 	return [
	// 		'data' => $datas,
	// 		'total' => intval($total),
    //         "recordsTotal" => intval($total),
    //         "recordsFiltered" => intval($total),
	// 		'draw' => $request['draw']
	// 	];
    // }

    public function pending_index(){
        return view('administrator.order_module.pending');
    }

    public function getPendingData(Request $request){
        $column = [ '0'=>'id', '1'=>'user_id', '2'=>'total_amount' ,'3'=>'status' ,'4'=>'created_at' ];
        $requestData = $_REQUEST;
        $total = Order::with('user_detail')->where('payment_status', 'success')->where('current_status','pending')->count();
		// $pending = Order::with('product_data')->where('payment_status', 'success')->where('current_status', 'pending')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
        $data = Order::with('user_detail')->where('current_status','pending')->where('is_deleted', '1');
        if ($requestData['search']['value']) {
			$data = $data->where(function ($query) use ($requestData) {
                $query->orWhere('total_amount', 'like','%'.$requestData['search']['value'].'%');
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
            $nestedData[] = $item->user_detail?$item->user_detail->username:"";
            $nestedData[] = $item->user_detail?$item->user_detail->email:"";
            $nestedData[] = $item->user_detail?$item->user_detail->mobile:"";
            $nestedData[] = $item->total_amount;
            $nestedData[] = $item->payment_status;

            $nestedData[] = "<span class='text-warning'> Pending</span>";
            // $nestedData[] = $item->status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            // $OngoingLink = '<a href="' .url('/administrator/order/update-status-ongoing/'.$item->id).'" class="btn btn-danger btn-anim"
            // ><i class="fa fa-sign-out"></i><span class="btn-text">Ongoing</span></a>';
            $ViewLink = '<a href="' .url('/administrator/orders/pending/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $cancelLink = '<a href="' .url('/administrator/order/update-status-cancel/'.$item->id).' " class="btn btn-info  btn-anim"><i class="fa fa-trash"></i><span class="btn-text">Cancel</span></a>';

            $nestedData[] = $ViewLink;
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

    // public function ongoing_list(){
    //     return view('administrator.order_module.ongoing');
    // }

    // public function admin_getOngoing_data(Request $request){
    //     $requestData = $_REQUEST;
    //     $total = Order::where('payment_status', 'success')->where('current_status','ongoing')->count();
	// 	$ongoing = Order::with('product_data')->where('payment_status', 'success')->where('current_status', 'ongoing')->orderBy('created_at', 'desc');
    //     // dd($requestData['search']['value']);
	// 	if ($requestData['search']['value']) {
	// 		$ongoing = $ongoing->where('email', 'like', '%' . $requestData['search']['value'] . '%');
	// 	}
	// 	if ($request->orderBy) {
	// 		$ongoing = $ongoing->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
	// 	}
	// 	$ongoing = $ongoing->paginate($request->limit ? $request->limit : 20);
	// 	$i = 0;
	// 	$datas = [];
	// 	foreach ($ongoing as $item) {
	// 		$i++;
	// 		$nestedData = array();
    //         $nestedData[] = $i;
    //         $nestedData[] = $item->product_name;
    //         $nestedData[] = $item->transction_id;

    //         if($item->current_status == "ongoing"){
    //             $status = '<span class="text-success">Ongoing</span>';
    //         }
    //         $nestedData[] = $status;
    //         $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

    //         $OngoingLink = '<a href="' .url('/administrator/order/update-status-complete/'.$item->id).'" class="btn btn-danger btn-anim"
    //         ><i class="fa fa-sign-out"></i><span class="btn-text">Complete</span></a>';

    //         $ViewLink = '<a href="' .url('/administrator/order/package-view/'.$item->id).' " class="btn btn-primary  btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';
    //         $cancelLink = '<a href="' .url('/administrator/order/update-status-cancel/'.$item->id).' " class="btn btn-info  btn-anim"><i class="fa fa-trash"></i><span class="btn-text">Cancel</span></a>';

    //         $nestedData[] = $ViewLink." ". $OngoingLink;
	// 		$datas[] = $nestedData;
	// 	};

	// 	return [
	// 		'data' => $datas,
	// 		'total' => intval($total),
    //         "recordsTotal" => intval($total),
    //         "recordsFiltered" => intval($total),
	// 		'draw' => $request['draw']
	// 	];
    // }

    // public function complete_list(){
    //     return view('administrator.order_module.completed');
    // }

    // public function admin_getComplete_data(Request $request){
    //     $requestData = $_REQUEST;
    //     $total = Order::where('payment_status', 'success')->where('current_status','completed')->count();
	// 	$Complete = Order::with('product_data')->where('payment_status', 'success')->where('current_status', 'completed')->orderBy('created_at', 'desc');
    //     // dd($requestData['search']['value']);
	// 	if ($requestData['search']['value']) {
	// 		$Complete = $Complete->where('email', 'like', '%' . $requestData['search']['value'] . '%');
	// 	}
	// 	if ($request->orderBy) {
	// 		$Complete = $Complete->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
	// 	}
	// 	$Complete = $Complete->paginate($request->limit ? $request->limit : 20);
	// 	$i = 0;
	// 	$datas = [];
	// 	foreach ($Complete as $item) {
	// 		$i++;
	// 		$nestedData = array();
    //         $nestedData[] = $i;
    //         $nestedData[] = $item->product_name;
    //         $nestedData[] = $item->transction_id;

    //         if($item->current_status == "completed"){
    //             $status = '<span class="text-success">Complete</span>';
    //         }
    //         $nestedData[] = $status;
    //         $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

    //         $OngoingLink = '<a href="' .url('/administrator/order/update-status-ongoing/'.$item->id).'" class="btn btn-danger btn-anim"
    //         ><i class="fa fa-sign-out"></i><span class="btn-text">Ongoing</span></a>';

    //         $ViewLink = '<a href="' .url('/administrator/order/package-view/'.$item->id).' " class="btn btn-primary  btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';
    //         $cancelLink = '<a href="' .url('/administrator/order/update-status-cancel/'.$item->id).' " class="btn btn-info  btn-anim"><i class="fa fa-trash"></i><span class="btn-text">Cancel</span></a>';

    //         $nestedData[] = $ViewLink;
	// 		$datas[] = $nestedData;
	// 	};

	// 	return [
	// 		'data' => $datas,
	// 		'total' => intval($total),
    //         "recordsTotal" => intval($total),
    //         "recordsFiltered" => intval($total),
	// 		'draw' => $request['draw']
	// 	];
    // }

    // // public function cancelled_list(){
    // //     return view('administrator.order_module.cancelled');
    // // }

    // // public function admin_getCancelled_data(Request $request){
    // //     $requestData = $_REQUEST;
    // //     $total = Order::where('payment_status', 'success')->where('current_status','cancelled')->count();
	// // 	$Cancelled = Order::with('product_data')->where('payment_status', 'success')->where('current_status', 'cancelled')->orderBy('created_at', 'desc');
    // //     // dd($requestData['search']['value']);
	// // 	if ($requestData['search']['value']) {
	// // 		$Cancelled = $Cancelled->where('email', 'like', '%' . $requestData['search']['value'] . '%');
	// // 	}
	// // 	if ($request->orderBy) {
	// // 		$Cancelled = $Cancelled->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
	// // 	}
	// // 	$Cancelled = $Cancelled->paginate($request->limit ? $request->limit : 20);
	// // 	$i = 0;
	// // 	$datas = [];
	// // 	foreach ($Cancelled as $item) {
	// // 		$i++;
	// // 		$nestedData = array();
    // //         $nestedData[] = $i;
    // //         $nestedData[] = $item->name;
    // //         $nestedData[] = $item->email;
    // //         $nestedData[] = date("d-m-Y", strtotime($item->event_date));
    // //         $nestedData[] = $item->product_data?$item->product_data->title:"";

    // //         if($item->current_status == "cancelled"){
    // //             $status = '<span class="text-info">Cancelled</span>';
    // //         }
    // //         $nestedData[] = $status;
    // //         $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

    // //         $ViewLink = '<a href="' .url('/administrator/order/package-view/'.$item->id).' " class="btn btn-primary  btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

    // //         $nestedData[] = $ViewLink;
	// // 		$datas[] = $nestedData;
	// // 	};

	// // 	return [
	// // 		'data' => $datas,
	// // 		'total' => intval($total),
    // //         "recordsTotal" => intval($total),
    // //         "recordsFiltered" => intval($total),
	// // 		'draw' => $request['draw']
	// // 	];
    // // }


    // function update_status_ongoing($id){
    //     $response=DB::statement("UPDATE orders SET current_status =(CASE WHEN (current_status = 'pending') THEN 'ongoing' ELSE 'pending' END) where id = $id");
    //     if($response) {
    //         Session::flash('success_message', 'Order has been ongoing successfully!');
    //     }else {
    //         Session::flash('error_message', 'Unable to update status!');
    //     }
    //     return redirect()->back();
    // }



    // function update_status_complete($id){
    //     $response=DB::statement("UPDATE orders SET current_status =(CASE WHEN (current_status = 'ongoing') THEN 'completed' ELSE 'ongoing' END) where id = $id");
    //     if($response) {
    //         Session::flash('success_message', 'Order has been completed successfully!');
    //     }else {
    //         Session::flash('error_message', 'Unable to update status!');
    //     }
    //     return redirect()->back();
    // }


    // function update_status_cancel($id){
    //     $response=Order::where('id', $id)->update(['current_status'=>'cancelled']);
    //     if($response) {
    //         Session::flash('success_message', 'Order has been cancelled successfully!');
    //     }else {
    //         Session::flash('error_message', 'Unable to update status!');
    //     }
    //     return redirect()->back();
    // }



    public function pending_view($id){
        $select = Order::with('user_detail')->where('id', $id)->first();
        return view('administrator.order_module.view', compact('select'));
    }

    public function ongoing_view($id){
        $select = Order::with('user_detail')->where('id', $id)->first();
        return view('administrator.order_module.ongoing_view', compact('select'));
    }

    public function completed_view($id){
        $select = Order::with('user_detail')->where('id', $id)->first();
        return view('administrator.order_module.completed_view', compact('select'));
    }

    public function cancelled_view($id){
        $select = Order::with('user_detail')->where('id', $id)->first();
        return view('administrator.order_module.cancelled_view', compact('select'));
    }

    public function ongoing_index(){
        return view('administrator.order_module.ongoing');
    }

    public function getOngoingData(Request $request){
        $column = [ '0'=>'id', '1'=>'user_id', '2'=>'total_amount' ,'3'=>'status' ,'4'=>'created_at' ];
        $requestData = $_REQUEST;
        $total = Order::with('user_detail')->where('payment_status', 'success')->where('current_status','ongoing')->count();
		// $pending = Order::with('product_data')->where('payment_status', 'success')->where('current_status', 'pending')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
        $data = Order::with('user_detail')->where('current_status','ongoing')->where('is_deleted', '1');
        if ($requestData['search']['value']) {
			$data = $data->where(function ($query) use ($requestData) {
                $query->orWhere('total_amount', 'like','%'.$requestData['search']['value'].'%');
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
            $nestedData[] = $item->user_detail?$item->user_detail->username:"";
            $nestedData[] = $item->user_detail?$item->user_detail->email:"";
            $nestedData[] = $item->user_detail?$item->user_detail->mobile:"";
            $nestedData[] = $item->total_amount;
            $nestedData[] = $item->payment_status;

            $nestedData[] = "<span class='text-warning'> Ongoing</span>";
            // $nestedData[] = $item->status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            // $OngoingLink = '<a href="' .url('/administrator/order/update-status-ongoing/'.$item->id).'" class="btn btn-danger btn-anim"
            // ><i class="fa fa-sign-out"></i><span class="btn-text">Ongoing</span></a>';
            $ViewLink = '<a href="' .url('/administrator/orders/ongoing/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $cancelLink = '<a href="' .url('/administrator/order/update-status-cancel/'.$item->id).' " class="btn btn-info  btn-anim"><i class="fa fa-trash"></i><span class="btn-text">Cancel</span></a>';

            $nestedData[] = $ViewLink;
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

    public function completed_index(){
        return view('administrator.order_module.completed');
    }

    public function getCompletedData(Request $request){
        $column = [ '0'=>'id', '1'=>'user_id', '2'=>'total_amount' ,'3'=>'status' ,'4'=>'created_at' ];
        $requestData = $_REQUEST;
        $total = Order::with('user_detail')->where('payment_status', 'success')->where('current_status','completed')->count();
		// $pending = Order::with('product_data')->where('payment_status', 'success')->where('current_status', 'pending')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
        $data = Order::with('user_detail')->where('current_status','completed')->where('is_deleted', '1');
        if ($requestData['search']['value']) {
			$data = $data->where(function ($query) use ($requestData) {
                $query->orWhere('total_amount', 'like','%'.$requestData['search']['value'].'%');
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
            $nestedData[] = $item->user_detail?$item->user_detail->username:"";
            $nestedData[] = $item->user_detail?$item->user_detail->email:"";
            $nestedData[] = $item->user_detail?$item->user_detail->mobile:"";
            $nestedData[] = $item->total_amount;
            $nestedData[] = $item->payment_status;

            $nestedData[] = "<span class='text-success'> completed</span>";
            // $nestedData[] = $item->status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            // $OngoingLink = '<a href="' .url('/administrator/order/update-status-ongoing/'.$item->id).'" class="btn btn-danger btn-anim"
            // ><i class="fa fa-sign-out"></i><span class="btn-text">Ongoing</span></a>';
            $ViewLink = '<a href="' .url('/administrator/orders/completed/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $cancelLink = '<a href="' .url('/administrator/order/update-status-cancel/'.$item->id).' " class="btn btn-info  btn-anim"><i class="fa fa-trash"></i><span class="btn-text">Cancel</span></a>';

            $nestedData[] = $ViewLink;
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

    public function cancelled_index(){
        return view('administrator.order_module.cancelled');
    }

    public function getCancelledData(Request $request){
        $column = [ '0'=>'id', '1'=>'user_id', '2'=>'total_amount' ,'3'=>'status' ,'4'=>'created_at' ];
        $requestData = $_REQUEST;
        $total = Order::with('user_detail')->where('payment_status', 'success')->where('current_status','cancelled')->count();
		// $pending = Order::with('product_data')->where('payment_status', 'success')->where('current_status', 'pending')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
        $data = Order::with('user_detail')->where('current_status','cancelled')->where('is_deleted', '1');
        if ($requestData['search']['value']) {
			$data = $data->where(function ($query) use ($requestData) {
                $query->orWhere('total_amount', 'like','%'.$requestData['search']['value'].'%');
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
            $nestedData[] = $item->user_detail?$item->user_detail->username:"";
            $nestedData[] = $item->user_detail?$item->user_detail->email:"";
            $nestedData[] = $item->user_detail?$item->user_detail->mobile:"";
            $nestedData[] = $item->total_amount;
            $nestedData[] = $item->payment_status;

            $nestedData[] = "<span class='text-danger'> cancelled</span>";
            // $nestedData[] = $item->status;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

            // $OngoingLink = '<a href="' .url('/administrator/order/update-status-ongoing/'.$item->id).'" class="btn btn-danger btn-anim"
            // ><i class="fa fa-sign-out"></i><span class="btn-text">Ongoing</span></a>';
            $ViewLink = '<a href="' .url('/administrator/orders/cancelled/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            $cancelLink = '<a href="' .url('/administrator/order/update-status-cancel/'.$item->id).' " class="btn btn-info  btn-anim"><i class="fa fa-trash"></i><span class="btn-text">Cancel</span></a>';

            $nestedData[] = $ViewLink;
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
