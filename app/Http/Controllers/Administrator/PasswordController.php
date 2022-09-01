<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Admin;
use Auth;
use Session;
use Hash;
use DB;


class PasswordController extends Controller
{

	public function __construct()
	{

	}

    public function change_password (){
        return view('administrator.password_module.changePassword');
    }

function update_change_password(Request $request){
    // dd($request->all());/

    $validator = Validator::make($request->all(), [
            'current_pass' => 'required',
            'new_pass' => 'required',
            'PasswordConfirm' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_change_pass')->withErrors($validator)->withInput();
            }
            $user = Admin::where('role',1)->first();
            if (Hash::check($request->current_pass, $user->password))
            {
                $user->password = Hash::make($request->new_pass);
                $user->save();
                Session::flash('success_message', 'Successfully updated password!');
            }else{
                Session::flash('error_message', 'Current password is incorrect');
            }
           return redirect()->back();


}
    // public function store(Request $request){

    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required',
    //         'description' => 'required',
    //         'image' => 'required',
    //         'status' => 'required',
    //         ]);

    //         if ($validator->fails()) {
    //             return redirect()->route('admin_category_create')->withErrors($validator)->withInput();
    //         }

    //         // dd($request->all());
    //         $insert = new Category;
    //         $insert->title = $request->title;
    //         $insert->slug = str_slug($request->title, "-");
    //         $insert->description = $request->description;
    //         $insert->status = $request->status;

    //         if($request->image){

    //             $path_original=public_path() . '/backend/uploads/category';
    //             $file = $request->image;
    //             $photo_name = time().'-'.$file->getClientOriginalName();
    //             $file->move($path_original, $photo_name);
    //             $insert->image = $photo_name;
    //         }

    //         $insert->save();

    //         return redirect()->route('admin_category')->with('success_message', 'One New category has been created successfully.');
    // }


}
