<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\RequestCallback;
use Auth;
use Session;
use Hash;
use DB;


class RequestCallbackController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.callback_request_module.index');
    }

    public function getcallback(Request $request){
        $requestData = $_REQUEST;
        $total = RequestCallback::count();
		$callback = RequestCallback::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$callback = $callback->whereDate('created_at', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$callback = $callback->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$callback = $callback->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($callback as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->username;
            $nestedData[] = $item->email;
            $nestedData[] = $item->mobile;
            $nestedData[] = $item->city;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            $deleteLink = '<a href="' .url('/administrator/callback-request/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            $ViewLink = '<a href="' .url('/administrator/callback-request/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

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

    function delete($id){
        if($select = RequestCallback::find($id)){
            $select->delete();
            Session::flash('success_message', 'One Request has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_callback_request');
    }

    function view($id){
        $select = RequestCallback::where('id', $id)->first();
        return view('administrator.callback_request_module.view', compact('select'));
    }

}
