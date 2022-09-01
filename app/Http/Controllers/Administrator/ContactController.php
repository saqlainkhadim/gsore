<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contactus;
use Auth;
use Session;
use Hash;
use DB;


class ContactController extends Controller
{

	public function __construct()
	{
	}

    public function index(){
        return view('administrator.contact_module.index');
    }

    public function getcontact_us(Request $request){
        $requestData = $_REQUEST;
        $total = Contactus::count();
		$contact = Contactus::where('is_deleted',1)->whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$contact = $contact->whereDate('created_at', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$contact = $contact->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$contact = $contact->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($contact as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->name;
            $nestedData[] = $item->email;
            $nestedData[] = $item->message;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
           $deleteLink = '<a href="' .url('/administrator/contact-us/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/contact-us/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';

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
        if($select = Contactus::find($id)){
            $select->delete();
            Session::flash('success_message', 'One contact has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_contact_us');
    }

    function view($id){
        $select = Contactus::where('id', $id)->first();
        return view('administrator.contact_module.view', compact('select'));
    }

}
