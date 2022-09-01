<?php
namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Contactus;
use App\Models\Newsletter;
use App\Models\Get_touch;
use App\Models\Request_quote;
use Auth;
use DB;
use Session;
use Hash;

class DashboardController extends Controller
{

	public function __construct(){
	}

	public function index()
	{
            $user = User::get();
            $inacive_user = User::where('verify_status', 'unverified')->get();
            $acive_user = User::where('verify_status', 'verified')->get();
            $contact = Contactus::count();
            $Request_quote = Request_quote::count();
            $Get_touch = Get_touch::count();
            $newsletter = Newsletter::get();
            $todayJoining = User::whereDate('created_at', Carbon::today())->get();
            // dd($todayJoining);
             $data_user =  User::select(DB::raw("(COUNT(*)) as countt"),DB::raw("MONTHNAME(created_at) as monthname"))->whereYear('created_at', date('Y'))->groupBy('monthname')->get();
        //  dd($data_user);
			return view('administrator.dashboard.index', compact('user','data_user','inacive_user', 'acive_user', 'contact', 'newsletter','todayJoining','Get_touch','Request_quote'));
	}

}
