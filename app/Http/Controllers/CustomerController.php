<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('customer.create');
    }

    public function index(){
        return view('customer.index')->with('customers',Customer::all());
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:customers|max:255',
            'nid_no' => 'required|unique:customers|max:255',
            'address' => 'required',
            'phone' => 'required|max:15',
            'shopname' => 'required',
            'photo' => 'required',
            'city'=>'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['nid_no']=$request->nid_no;
        $data['phone']=$request->phone;
        $data['shopname']=$request->shopname;
        $data['account_holder']=$request->account_holder;
        $data['account_number']=$request->account_number;
        $data['bank_name']=$request->bank_name;
        $data['branch_name']=$request->branch_name;
        $data['city']=$request->city;

        $image=$request->file('photo');
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/customer/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['photo']=$image_url;

        $employee=DB::table('customers')->insert($data);

        $notification=array(
            'message'=>'Customers successfully inserted',
            'alert-type'=>'success'
           );

        //session()->flash('success','Employee create successfully!');

        return redirect(route('customers.index'))->with($notification);
    }

    public function destroy($id){
        $deletedCustomer=Customer::all()->where('id',$id)->first();
        unlink($deletedCustomer->photo);
        $dltCustomer=$deletedCustomer->delete();

        if($dltCustomer){
            $notification=array(
                'message'=>'Customer deleted successfully!',
                'alert-type'=>'success'
               );
        return redirect(route('customers.index'))->with($notification);
        }
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'success'
               );
        return redirect(route('customers.index'))->with($notification);
        }
    }

    public function edit($id){
        $customer=Customer::all()->where('id',$id)->first();
        return view('customer.create')->with('customer',$customer);
    }

    public function update(Request $request,$id){
        $customer=Customer::all()->where('id',$id)->first();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'nid_no' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required|max:15',
            'shopname' => 'required',
            'city'=>'required',
        ]);
        $data=array();

        $image=$request->file('photo');
        echo $image;
        if($image){
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['address']=$request->address;
            $data['nid_no']=$request->nid_no;
            $data['phone']=$request->phone;
            $data['shopname']=$request->shopname;
            $data['account_holder']=$request->account_holder;
            $data['account_number']=$request->account_number;
            $data['bank_name']=$request->bank_name;
            $data['branch_name']=$request->branch_name;
            $data['city']=$request->city;
    
            
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/customer/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['photo']=$image_url;
            unlink($customer->photo);
            $employee=DB::table('customers')->where('id',$id)->update($data);

            $notification=array(
                'message'=>'Customers updated successfully',
                'alert-type'=>'success'
            );

            return redirect(route('customers.index'))->with($notification);
        }
        else{

            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['address']=$request->address;
            $data['nid_no']=$request->nid_no;
            $data['phone']=$request->phone;
            $data['shopname']=$request->shopname;
            $data['account_holder']=$request->account_holder;
            $data['account_number']=$request->account_number;
            $data['bank_name']=$request->bank_name;
            $data['branch_name']=$request->branch_name;
            $data['city']=$request->city;

            $employee=DB::table('customers')->where('id',$id)->update($data);

            $notification=array(
                'message'=>'Customers updated successfully',
                'alert-type'=>'success'
            );

            return redirect(route('customers.index'))->with($notification);
        }
    }
}

