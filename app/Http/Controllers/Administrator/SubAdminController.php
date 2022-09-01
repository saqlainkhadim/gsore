<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Admin;
use App\Models\SubAdminAttribute;
use Session;
use Hash;
use DB;
use Helper;

class SubAdminController extends Controller
{
	public function __construct()
	{
	}

    /*-------Show List Page ---------*/
    public function index(){
        return view('administrator.subadmin_module.index');
    }

    /*-------Get data for listing Page ---------*/
    public function getSubAdminData(Request $request){
    $requestData = $_REQUEST;
    $total = SubAdminAttribute::where(['is_deleted'=>1])->count();
    $subAdmin = SubAdminAttribute::where(['is_deleted'=>1])->whereNotNull('id')->orderBy('created_at', 'desc');
    if ($requestData['search']['value']) {
        $subAdmin = $subAdmin->where('username', 'like', '%' . $requestData['search']['value'] . '%');
    }
    if ($request->orderBy) {
        $subAdmin = $subAdmin->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
    }
    $subAdmin = $subAdmin->paginate($request->limit ? $request->limit : 20);
    $i = 0;
    $datas = [];
    foreach ($subAdmin as $item) {
        $i++;
        $nestedData = array();
        $nestedData[] = $i;
        $nestedData[] = $item->username;
        $nestedData[] = $item->email;
        $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));

        if($item->status){
            $message = "'Are you sure you want to Inactive the SubAdmin?'";
            $nestedData[] = '<a href="' .url('/administrator/sub-admin/update-status/'.$item->id).'" onclick="return confirm('.$message.')" title="Active"><i class="fa fa-toggle-on"></i></a>';
        }else{
            $message = "'Are you sure you want to Active the SubAdmin?'";
            $nestedData[] = '<a href="' .url('/administrator/sub-admin/update-status/'.$item->id).'" onclick="return confirm('.$message.')" title="Inactive"><i class="fa fa-toggle-off"></i></a>';
        }
        $changeLink = '<a href="' .url('/administrator/sub-admin/change-password/'.$item->id).'" title="Change Password"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-key"></i></button></a>';
        $editLink = '<a href="' .url('/administrator/sub-admin/edit/'.$item->id).'" title="Edit"><button class="btn btn-warning btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></a>';
            $deleteLink = '<a href="' .url('/administrator/sub-admin/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")" title="Delete"><button class="btn btn-info btn-icon-anim btn-circle"><i class="icon-trash"></i></button></a>';
            $ViewLink = '<a href="' .url('/administrator/sub-admin/view/'.$item->id).' " title="View"><button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></a>';
        $nestedData[] = $ViewLink." ". $editLink." ". $changeLink." ".$deleteLink;
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


    /*-------Show create Page ---------*/
    public function create(Request $request){
         return view('administrator.subadmin_module.create');
    }

    /*-------store data of create Page ---------*/
    public function store(Request $request){
      //     dd($request->all());
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required|unique:subadminattributes',
            'password' => 'min:6|max:100',
            'password_confirmation' => 'min:6|same:password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only('first_name','last_name','email','status');
        $data['username'] = $request->first_name." ".$request->last_name;
        $data['simple_pass'] = $request->password;
        $data['password'] = Hash::make($request->password);
        $permission=$request->input('permission');
        $data['access_permission'] = implode(',', $permission);
          SubAdminAttribute::create($data);
            return redirect()->route('admin_sub_admin')->with('success_message', 'One Sub-Admin has been created successfully.');
}

   /*-------Show change password Page ---------*/
   public function change_password($id){
    $select = SubAdminAttribute::findorfail($id);
    return view('administrator.subadmin_module.password_change', compact("select"));
}

/*-------Store data of change password Page ---------*/
public function store_change_password(Request $request){
    $validator = Validator::make($request->all(), [
        'password' => 'min:6|max:100',
        'password_confirmation' => 'min:6|same:password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $select = SubAdminAttribute::find($request->id);
        if($select->simple_pass == $request->old_password){
            SubAdminAttribute::where('id',$request->id)->update(['simple_pass'=> $request->password, 'password'=> Hash::make($request->password)]);
            return redirect()->route('admin_sub_admin')->with('success_message', 'Password has been updated successfully');
        }else{
            return redirect()->back()->with('error_message', 'Old Password is wrong. Please enter correct old password');
        }
}
    /*-------Soft delete data---------*/
    function delete($id){
        if($select = SubAdminAttribute::find($id)){
                $select->update(['is_deleted'=> '0']);
                Session::flash('success_message', 'One  Sub Admin has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->back();
    }

    /*-------Show user data---------*/
    function view($id){
        $select = SubAdminAttribute::where('id', $id)->first();
        return view('administrator.subadmin_module.view', compact('select'));
    }

    /*-------Show edit Page ---------*/
    function edit($id){
        $select = SubAdminAttribute::findorfail($id);
        return view('administrator.subadmin_module.edit', compact('select'));
    }

    /*-------update data of edit Page ---------*/
    public function edit_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
            $data = $request->only('first_name','last_name','status');
            $data['username'] = $request->first_name." ".$request->last_name;
            $permission=$request->input('permission');
            $data['access_permission'] = implode(',', $permission);
              SubAdminAttribute::where('id', $request->id)->update(['access_permission' => implode(",",$permission)]);
            return redirect()->route('admin_sub_admin')->with('success_message', 'One Sub-Admin has been created successfully.');


}
public function updateStatus($id)
{
    $response=DB::statement("UPDATE subadminattributes SET status =(CASE WHEN (status = 1) THEN 0 ELSE 1 END) where id = $id");
    if($response) {
        Session::flash('success_message', 'status has been updated successfully!');
    }
    else {
        Session::flash('error_message', 'Unable to update status');
    }

    return redirect()->back();
  }

}
