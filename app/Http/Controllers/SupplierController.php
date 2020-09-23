<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Supplier;

class SupplierController extends Controller
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
        return view('supplier.create');
    }

    public function index(){
        return view('supplier.index')->with('suppliers',Supplier::all());
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:suppliers|max:255',
            'address' => 'required',
            'phone' => 'required|max:15',
            'shop' => 'required',
            'photo' => 'required',
            'city'=>'required',
            'type'=>'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['type']=$request->type;
        $data['phone']=$request->phone;
        $data['shop']=$request->shop;
        $data['account_holder']=$request->account_holder;
        $data['account_number']=$request->account_number;
        $data['bank_name']=$request->bank_name;
        $data['branch_name']=$request->branch_name;
        $data['city']=$request->city;

        $image=$request->file('photo');
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/supplier/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['photo']=$image_url;

        $employee=DB::table('suppliers')->insert($data);

        $notification=array(
            'message'=>'Suppliers successfully inserted',
            'alert-type'=>'success'
           );

        //session()->flash('success','Employee create successfully!');

        return redirect(route('suppliers.index'))->with($notification);
    }

    public function destroy($id){
        $deletedSupplier=Supplier::all()->where('id',$id)->first();
        unlink($deletedSupplier->photo);
        $dltSupplier=$deletedSupplier->delete();

        if($dltSupplier){
            $notification=array(
                'message'=>'Supplier deleted successfully!',
                'alert-type'=>'success'
               );
        return redirect(route('suppliers.index'))->with($notification);
        }
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'success'
               );
        return redirect(route('suppliers.index'))->with($notification);
        }
    }

    public function edit($id){
        $supplier=Supplier::all()->where('id',$id)->first();
        return view('supplier.create')->with('supplier',$supplier);
    }

    public function update(Request $request,$id){
        $supplier=Supplier::all()->where('id',$id)->first();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required|max:15',
            'shop' => 'required',
            'city'=>'required',
            'type'=>'required',
        ]);
        $data=array();

        $image=$request->file('photo');
        echo $image;
        if($image){
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['address']=$request->address;
            $data['type']=$request->type;
            $data['phone']=$request->phone;
            $data['shop']=$request->shop;
            $data['account_holder']=$request->account_holder;
            $data['account_number']=$request->account_number;
            $data['bank_name']=$request->bank_name;
            $data['branch_name']=$request->branch_name;
            $data['city']=$request->city;
    
            
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/supplier/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['photo']=$image_url;
            unlink($supplier->photo);
            $employee=DB::table('suppliers')->where('id',$id)->update($data);

            $notification=array(
                'message'=>'Suppliers updated successfully',
                'alert-type'=>'success'
            );

            return redirect(route('suppliers.index'))->with($notification);
        }
        else{

            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['address']=$request->address;
            $data['type']=$request->type;
            $data['phone']=$request->phone;
            $data['shop']=$request->shop;
            $data['account_holder']=$request->account_holder;
            $data['account_number']=$request->account_number;
            $data['bank_name']=$request->bank_name;
            $data['branch_name']=$request->branch_name;
            $data['city']=$request->city;

            $employee=DB::table('suppliers')->where('id',$id)->update($data);

            $notification=array(
                'message'=>'Suppliers updated successfully',
                'alert-type'=>'success'
            );

            return redirect(route('suppliers.index'))->with($notification);
        }
    }
}
