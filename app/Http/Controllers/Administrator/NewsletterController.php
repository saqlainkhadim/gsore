<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Newsletter;
use Auth;
use Session;
use Hash;
use DB;


class NewsletterController extends Controller
{

	public function __construct()
	{
	}

    public function index(){
        return view('administrator.newsletter_module.index');
    }

    public function getnewsletter(Request $request){

        $requestData = $_REQUEST;
        $total = Newsletter::count();
		$newsletter = Newsletter::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$newsletter = $newsletter->whereDate('email', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$newsletter = $newsletter->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$newsletter = $newsletter->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($newsletter as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->email;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            $deleteLink = '<a href="' .url('/administrator/newsletter/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';

            $nestedData[] = $deleteLink;
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
        if($select = Newsletter::find($id)){
            $select->delete();
            Session::flash('success_message', 'One Newsletter has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_newsletter');
    }

}
