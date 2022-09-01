<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Request_quote;
use Auth;
use Session;
use Hash;
use DB;


class QuoteController extends Controller
{

	public function __construct()
	{
	}

    public function index(){
        return view('administrator.quote_module.index');
    }

    public function getquoteData(Request $request){
        $requestData = $_REQUEST;
        $total = Request_quote::count();
		$quote = Request_quote::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$quote = $quote->whereDate('created_at', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$quote = $quote->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$quote = $quote->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($quote as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->name;
            $nestedData[] = $item->email;
            $nestedData[] = $item->mobile;
            $nestedData[] = $item->message;
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
           $deleteLink = '<a href="' .url('/administrator/quote/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/quote/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';

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
        if($select = Request_quote::find($id)){
            $select->delete();
            Session::flash('success_message', 'One Request a quote has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->back();
    }

    function view($id){
        $select = Request_quote::where('id', $id)->first();
        return view('administrator.quote_module.view', compact('select'));
    }

}
