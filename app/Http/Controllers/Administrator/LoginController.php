<?php
namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Models\Admin;
use Auth;
use Session;
use Hash;

class LoginController extends Controller
{

	public function __construct()
	{

	}


	public function index()
	{
        return view('administrator.login.index');
		// if(Auth::guard('administrator')->user())
		// {
		// 	return redirect('admin/dashboard');
		// }
		// else
		// {
			
		// }
	}

	public function authenticate(Request $request)
	{
       
		if (Auth::guard('administrator')->attempt(['username' => $request->username, 'password' => $request->password,'active' => 1]))
		{
			 $data=Admin::where('username',$request->username)->first();
		     Session::put('user_adata',  $data);
			 return redirect('administrator/dashboard');
		}else{
			$request->flash();
			Session::flash('message', 'Invalid username or password');
			return redirect('administrator');
		}
	}

	public function logout()
	{
		Auth::guard('administrator')->logout();
		return redirect('/administrator');
	}

    public function forget_pass(){
        return view('administrator.login.forget_pass');
    }

    public function forget_pass_send_link(Request $request){
        $user = Admin::where('email', $request->email)->first();
            if (!empty($user)) {
                $id = $user->id;
                $link = url('administrator/forget-change-password/' . encrypt($id));
                $emailData = array(
                    'to' => $request->email,
                    'from' => 'a2technosoftdev@gmail.com',
                    'subject' => 'Admin Reset Password',
                    'view' => 'administrator.login.forgot_email',
                    'content' => "Please click on below URL or paste into your browser to reset your Password \n\n " . $link . "\n" . "\n\nThanks\nAdmin Team"
                );
                Mail::send($emailData['view'], $emailData, function ($message) use ($emailData) {
                    $message->to($emailData['to'])
                            ->from($emailData['from'])
                            ->subject($emailData['subject']);
                });
                Session::flash('success_message', 'An email with the reset password link has been sent to you. Please check your inbox or spam folder');
                return redirect()->back();
            } else {
                Session::flash('error_message', 'This email id is not registered');
                return redirect()->back();
            }
    }

    function forget_pass_token($token){
        $id = decrypt($token);
        $user = Admin::find($id);
        if (!empty($user)) {
            Session::put('reset-password', $user->id);
            return view('administrator.login.forget_pass_reset');
        } else {
            Session::flash('error_message', 'Your link is not verify. Please correct your link..!!');
            return redirect()->route('admin_link_forget_pass');
        }
    }

    function update_forget_pass(Request $request){
        $data = $request->all();
        // dd($data);
        $validator = Validator::make($request->all(), [
            'new_password' => 'min:6|required',
            'comfirm_new_password' => 'required|same:new_password'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $id = Session::get('reset-password');
            $user = Admin::find($id);
            $user->password = Hash::make($data['new_password']);
            $user->save();
            Session::put('reset-password', '');
            Session::flash('success_message', "Password successfully reset");
            return redirect()->route('admin_index_page');

    }

}

