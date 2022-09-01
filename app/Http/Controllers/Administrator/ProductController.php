<?php
namespace App\Http\Controllers\Administrator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Models\Revenue;
use Illuminate\Support\Str;
use Auth;
use Session;
use Hash;
use DB;


class ProductController extends Controller
{

	public function __construct()
	{

	}

    public function index(){
        return view('administrator.product.index');
    }

    
    public function getproductData(Request $request){
        $requestData = $_REQUEST;
        $total = Product::count();
		$data = Product::whereNotNull('id')->orderBy('created_at', 'desc');
		if ($requestData['search']['value']) {
			$data = $data->where('name', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$data = $data->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$data = $data->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($data as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->name;
         
            $nestedData[] = '<img src="'.asset('/backend/uploads/product/'.$item->image).'" alt="gallery" width="80px">';
            $nestedData[] = $item->description;
            $nestedData[] = $item->price;
           
            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            if($item->status){
                $status = '<a href="'.url('/administrator/product/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/product/update-home-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;

           
            $editLink = '<a href="' .url('/administrator/product/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/product/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            // $ViewLink = '<a href="' .url('/administrator/product/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

            $nestedData[] =  $editLink."  ".$deleteLink;
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

    public function create(){

        return view('administrator.product.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
            'price' =>'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_product_create')->withErrors($validator)->withInput();
            }

            // dd($request->all());
            $insert = new Product;
            $insert->name = $request->name;
            $insert->price = $request->price;
            $insert->description = $request->description;
            $insert->status = $request->status;
            if($request->image){
                $path_original=public_path() . '/backend/uploads/product';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $insert->image = $photo_name;
            }

            $insert->save();

            return redirect()->route('admin_product')->with('success_message', 'One New Image has been created successfully.');
    }

    function get_subcategory(Request $request){
       $sub_cat = SubCategory::where('category_id' , $request->cat_id)->where('status', '1')->get();
        return view('administrator.product_module.subcat_ajax', compact('sub_cat'));
    }

    function update_status($id){
        $response=DB::statement("UPDATE products SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_product');
    }

    function update_home_status($id){
        $response=DB::statement("UPDATE products SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_product');
    }


    function delete($id){
        if($Product = Product::find($id)){
            $Product->delete();
            Session::flash('success_message', 'One Product has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Try Again!');
        }
        return redirect()->route('admin_product');
    }

    // function view($id){
    //     $select = Product::where('id', $id)->first();
    //     return view('administrator.product_module.view', compact('select'));
    // }

    function edit($id){
        $select = Product::where('id', $id)->first();
        return view('administrator.product.edit', compact('select'));
    }

    // function edit_update(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'description' => 'required',
    //         'image' => 'required',
    //         'status' => 'required',
    //         ]);

    //         if ($validator->fails()) {
    //             return redirect()->back()->withErrors($validator)->withInput();
    //         }


    //         $update = Product::find($request->product_id);
    //         $insert->name = $request->name;
    //         $insert->description = $request->description;
    //         $insert->status = $request->status;
    //         if($request->image){
    //             $path_original=public_path() . '/backend/uploads/product';
    //             $file = $request->image;
    //             $photo_name = time().'-'.$file->getClientOriginalName();
    //             $file->move($path_original, $photo_name);
    //             $insert->image = $photo_name;
    //         }
        
    //         }
    //         $insert->save();

    //         return redirect()->route('admin_product')->with('success_message', 'One product has been updated successfully.');

    // }

    public function edit_update( Request $request){
        $Product = array(
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
           // 'image' => $request->input('image'),
            'status' => $request->input('status'),
        );
    
        $validator = Validator::make($Product, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            //'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_product_edit')->withErrors($validator)->withInput();
            }

         
            // $update = Product::find($request->id);
            $update = Product::find($request->id);
           //dd($request->all());
            $update->name = $request->name;
            $update->price = $request->price;
            $update->description = $request->description;
            $update->status = $request->status;
            if($request->image){
                $path_original=public_path() . '/backend/uploads/product';
                $file = $request->image;
                $photo_name = time().'-'.$file->getClientOriginalName();
                $file->move($path_original, $photo_name);
                $update->image = $photo_name;
            }
            
            $update->save();

            return redirect()->route('admin_product')->with('success_message', 'One New Image has been created successfully.');
    }

















    public function index_revenue(){
        return view('administrator.revenue_module.index');
    }

    public function getRevenueData(Request $request){
        $requestData = $_REQUEST;
        $total = Revenue::count();
		$data = Revenue::whereNotNull('id')->orderBy('created_at', 'desc');
        // dd($requestData['search']['value']);
		if ($requestData['search']['value']) {
			$data = $data->where('name', 'like', '%' . $requestData['search']['value'] . '%');
		}
		if ($request->orderBy) {
			$data = $data->orderBy($request->orderBy, $request->ascending == 1 ? 'ASC' : 'DESC');
		}
		$data = $data->paginate($request->limit ? $request->limit : 20);
		$i = 0;
		$datas = [];
		foreach ($data as $item) {
			$i++;
			$nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $item->days . " days";
            $nestedData[] = $item->percent ." %";
                $img = "<img src=".url('/backend/uploads/product/'.$item->image)." width='100px'>";
            $nestedData[] = $img;


            if($item->status){
                $status = '<a href="'.url('/administrator/revenue/update-status/'.$item->id).'"><i class="fa fa-toggle-on" aria-hidden="true" style="color: green; " title="Enable"></i> </a>';
            }else{
                $status = '<a href="'.url('/administrator/revenue/update-status/'.$item->id).'"><i class="fa fa-toggle-off" aria-hidden="true" style="color: red;" title="Disable"></i> </a>';
            }
            $nestedData[] = $status;

            $nestedData[] = date("d-m-Y h:i a", strtotime($item->created_at));
            $editLink = '<a href="' .url('/administrator/revenue/edit/'.$item->id).'" class="btn btn-primary btn-anim"
            ><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a>';
            $deleteLink = '<a href="' .url('/administrator/revenue/delete/'.$item->id).' " onclick="return confirm("Are you sure want to delete?")"  class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
            $ViewLink = '<a href="' .url('/administrator/revenue/view/'.$item->id).' " class="btn btn-primary btn-anim"><i class="icon-emotsmile"></i><span class="btn-text">View</span></a>';

            $nestedData[] =  $editLink."  ".$deleteLink;
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

    public function create_revenue(){
        return view('administrator.revenue_module.create');
    }

    public function store_revenue(Request $request){
                $validator = Validator::make($request->all(), [
            'days' => 'required',
            'percent' => 'required',

            'image' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert = new Revenue;
            $insert->percent = $request->percent;
            $insert->days = $request->days;
            $insert->status = $request->status;


            $images= $request->image;
            if($images){
                foreach($images as $img){
                    $path_original=public_path() . '/backend/uploads/product';
                    $file = $img;
                    $photo_name = time().'-'.$file->getClientOriginalName();
                    $file->move($path_original, $photo_name);
                    $insert->image = $photo_name;
                }
            }
            $insert->save();
            return redirect()->route('admin_revenue')->with('success_message', 'One New Revenue has been created successfully.');
    }



    function update_status_revenue($id){
        $response=DB::statement("UPDATE revenues SET status =(CASE WHEN (status = '1') THEN '0' ELSE '1' END) where id = $id");
        if($response) {
            Session::flash('success_message', 'Status has been updated successfully!');
        }else {
            Session::flash('error_message', 'Unable to update status!');
        }
        return redirect()->route('admin_revenue');
    }


    function delete_revenue($id){
        if($Product = Revenue::find($id)){
            $Product->delete();
            Session::flash('success_message', 'One Revenue has been deleted successfully!');
        }else{
            Session::flash('success_message', 'Please Revenue Try Again!');
        }
        return redirect()->route('admin_revenue');
    }

    function view_revenue($id){
        $select = Revenue::where('id', $id)->first();
        return view('administrator.revenue_module.view', compact('select'));
    }

    function edit_revenue($id){
        $select = Revenue::where('id', $id)->first();
        return view('administrator.revenue_module.edit', compact('select'));
    }

    function edit_update_revenue(Request $request){

        $validator = Validator::make($request->all(), [
            'days' => 'required',
            'percent' => 'required',
            'status' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            $update = Revenue::find($request->product_id);
            $update->percent = $request->percent;
            $update->days = $request->days;
            $update->status = $request->status;


            $images= $request->image;
            if($images){
                foreach($images as $img){
                    $path_original=public_path() . '/backend/uploads/product';
                    $file = $img;
                    $photo_name = time().'-'.$file->getClientOriginalName();
                    $file->move($path_original, $photo_name);
                    $update->image = $photo_name;
                }
            }
            $update->save();

            return redirect()->route('admin_revenue')->with('success_message', 'One revenue has been updated successfully.');

    }
}
