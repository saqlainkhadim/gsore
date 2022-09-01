<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\UserKyc;
use App\Models\SupportSystem;
use Auth;
use Session;
use Hash;
use Helper;
use DB;


class SupportSystemController extends Controller
{
	public function __construct()
	{
	}

    /*-------Show Pending List Page ---------*/
    public function index(){
        return view('administrator.support_system.index');
    }

    /*-------Get pending data for listing Page ---------*/
    public function getSupportSystemData(Request $request){
        $column = [ '0'=>'id', '1'=>'user_id', '2'=>'subject' ,'3'=>'status' ,'4'=>'created_at' ];
        $requestData = $_REQUEST;
        $total = SupportSystem::where('is_deleted', '1')->get()->count();
		$data = SupportSystem::where('is_deleted', '1');
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
            $nestedData[] = $item->message;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            if($item->status == 1){
                $nestedData[] = "<span class='text-success'>Complete</span>";
            }else{
                $nestedData[] = "<span class='text-warning'> Pending</span>";
            }
            $ViewLink = '<a href="' .url('/administrator/support-system/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
            if($item->status == 1){
                $replyLink = '';
            }else{
                $replyLink = '<button class="btn btn-success btn-icon-anim btn-circle " onclick="show_popup('."'".$item->id."'".')"><i class="fa fa-check"></i><span class="btn-text"></span></button>';
            }
            $nestedData[] = $ViewLink."  ". $replyLink;
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

    /*-------Show pending user data---------*/
    function view($id){
        $select = SupportSystem::where('id', $id)->first();
        return view('administrator.support_system.view', compact('select'));
    }

    /*-------Show approved answer data---------*/
        function approvedAnswer(Request $request){
            SupportSystem::where('id', $request->id)->update(['answer'=> $request->answer,'status'=>1]);
            Session::flash('success_message', 'Answer updated successfully.');
            return json_encode(['status'=>true]);
        }




}
?>



