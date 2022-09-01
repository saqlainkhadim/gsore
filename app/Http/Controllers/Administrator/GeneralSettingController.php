<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use Hash;
use DB;


class GeneralSettingController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        $select = GeneralSetting::first();
        return view('administrator.general_setting_module.index', compact('select'));
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'site_name' => 'required',
            'mobileNumber' => 'required',
            'email' => 'required',
            'address' => 'required',
            'copyright' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = [
                'site_name' =>$request->site_name,
                'mobileno' =>$request->mobileNumber,
                'mobileno2' =>$request->mobileNumber2,
                'email' =>$request->email,
                'email2' =>$request->email2,
                'address' =>$request->address,
                'timing' =>$request->timing,
                'timing2' =>$request->timing2,
                'copyright' =>$request->copyright,
                'facebook_link' =>$request->facebook,
                'instagram_link' =>$request->instagram,
                'twitter_link' =>$request->twitter,
                'linkedin_link' =>$request->linkedin,
                'youtube_link' =>$request->youtube,
                'telegram_link' =>$request->telegram_link,
            ];

            if($request->site_logo){
                $path_original=public_path() . '/backend/uploads/general_setting';
                $file = $request->site_logo;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $data['site_logo'] = $photo_name;
            }

            // if($request->event_detail_image){
            //     $path_original=public_path() . '/backend/uploads/general_setting';
            //     $file = $request->event_detail_image;
            //     $photo_name = time().'-'.$file->getClientOriginalName();
            //     $file->move($path_original, $photo_name);
            //     $data['event_detail_image'] = $photo_name;
            // }

            $select =GeneralSetting::first();
            if($select){
                $update = GeneralSetting::where('id',$select->id)->update($data);
            }else{
                $flight = GeneralSetting::create($data);
            }

            return redirect()->back()->with('success_message', 'General Setting has been updated successfully.');
    }
}
