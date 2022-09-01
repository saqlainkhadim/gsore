<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\IncomeLevel;
use App\Models\RepurchaseLevel;
use Auth;
use Session;
use Hash;
use DB;


class IncomeSettingController extends Controller
{

	public function __construct()
	{
	}

    function index(){
        $level1 = IncomeLevel::where('level','1')->first();
        $level2 = IncomeLevel::where('level','2')->first();
        $level3 = IncomeLevel::where('level','3')->first();
        $level4 = IncomeLevel::where('level','4')->first();
        $level5 = IncomeLevel::where('level','5')->first();
        $level6 = IncomeLevel::where('level','6')->first();
        $level7 = IncomeLevel::where('level','7')->first();
        $level8 = IncomeLevel::where('level','8')->first();
        $level9 = IncomeLevel::where('level','9')->first();
        $level10 = IncomeLevel::where('level','10')->first();
        $level11 = IncomeLevel::where('level','11')->first();
        return view('administrator.income_setting.income_view', compact('level1','level2','level3','level4','level5','level6','level7','level8','level9','level10','level11',));
    }


    public function update(Request $request)
    {
        $amount = $request->amount;
        $day = $request->day;
        $check = IncomeLevel::get();
        if(count($amount)>0){
                if(count($check)>0){
                    IncomeLevel::whereNotNull('id')->delete();
                    foreach($amount as $ks =>$vs){
                        if($vs != "" && $day[$ks] !=""){
                            IncomeLevel::create(['level'=>$ks+1,'day'=>$day[$ks], 'amount'=> $amount[$ks]]);
                        }
                    }
                }else{
                    foreach($amount as $ks =>$vs){
                        if($vs != "" && $day[$ks] !=""){
                            IncomeLevel::create(['level'=>$ks+1,'day'=>$day[$ks], 'amount'=> $amount[$ks]]);
                        }
                    }
                }

            }


            // IncomeLevel::where('id', $request->id)->update($data);
            return redirect()->route('admin_level')->with('success_message', 'One Level has been updated successfully.');
    }


    function repurchase_index(){
        $level1 = RepurchaseLevel::where('level','1')->first();
        $level2 = RepurchaseLevel::where('level','2')->first();
        $level3 = RepurchaseLevel::where('level','3')->first();
        $level4 = RepurchaseLevel::where('level','4')->first();
        $level5 = RepurchaseLevel::where('level','5')->first();
        $level6 = RepurchaseLevel::where('level','6')->first();
        $level7 = RepurchaseLevel::where('level','7')->first();
        $level8 = RepurchaseLevel::where('level','8')->first();
        $level9 = RepurchaseLevel::where('level','9')->first();
        $level10 = RepurchaseLevel::where('level','10')->first();
        $level11 = RepurchaseLevel::where('level','11')->first();
        return view('administrator.income_setting.repurchase_view', compact('level1','level2','level3','level4','level5','level6','level7','level8','level9','level10','level11',));
    }


    public function repurchaseUpdate(Request $request)
    {
        $amount = $request->amount;
        $day = $request->day;
        $check = RepurchaseLevel::get();
        if(count($amount)>0){
                if(count($check)>0){
                    RepurchaseLevel::whereNotNull('id')->delete();
                    foreach($amount as $ks =>$vs){
                        if($vs != "" && $day[$ks] !=""){
                            RepurchaseLevel::create(['level'=>$ks+1,'day'=>$day[$ks], 'amount'=> $amount[$ks]]);
                        }
                    }
                }else{
                    foreach($amount as $ks =>$vs){
                        if($vs != "" && $day[$ks] !=""){
                            RepurchaseLevel::create(['level'=>$ks+1,'day'=>$day[$ks], 'amount'=> $amount[$ks]]);
                        }
                    }
                }

            }


            // IncomeLevel::where('id', $request->id)->update($data);
            return redirect()->back()->with('success_message', 'One Repurchase Level has been updated successfully.');
    }


}
