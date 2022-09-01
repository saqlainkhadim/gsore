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


class ReferalIncomeController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        $select = GeneralSetting::first();
        return view('administrator.referal_income_module.index', compact('select'));
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'refferal_commission' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = [
                'refferal_commission' =>$request->refferal_commission,
                'minimum_amount'=>$request->minimum_amount,
            ];

            $select =GeneralSetting::first();
            if($select){
                $update = GeneralSetting::where('id',$select->id)->update($data);
            }else{
                $flight = GeneralSetting::create($data);
            }

            return redirect()->back()->with('success_message', 'Income has been updated successfully.');
    }
}
