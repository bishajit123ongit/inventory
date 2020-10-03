<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Supplier;
use App\Product;
use DB;
class ProductController extends Controller
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
        return view('product.create')
        ->with('category',Category::all())
        ->with('supplier',Supplier::all());
    }

    public function index(){
        return view('product.index')->with('products',Product::all());
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'product_name' => 'required|unique:products|max:255',
            'cat_id' => 'required',
            'sup_id' => 'required',
            'product_code' => 'required|unique:products|max:13',
            'product_garage' => 'required',
            'product_route' => 'required',
            'buy_date' => 'required',
            'expire_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
            'product_image' => 'required',
        ]);

        $data=array();
        $data['product_name']=$request->product_name;
        $data['cat_id']=$request->cat_id;
        $data['sup_id']=$request->sup_id;
        $data['product_code']=$request->product_code;
        $data['product_garage']=$request->product_garage;
        $data['product_route']=$request->product_route;
        $data['buy_date']=$request->buy_date;
        $data['expire_date']=$request->expire_date;
        $data['buying_price']=$request->buying_price;
        $data['selling_price']=$request->selling_price;
        $data['product_image']=$request->product_image;

        $image=$request->file('product_image');
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/product/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['product_image']=$image_url;

        $employee=DB::table('products')->insert($data);

        $notification=array(
            'message'=>'Product successfully inserted',
            'alert-type'=>'success'
           );

        //session()->flash('success','Employee create successfully!');

        return redirect(route('products.create'))->with($notification);
    }

    public function edit($id){
        $product=Product::all()->where('id',$id)->first();
        return view('product.create')->with('product',$product)
        ->with('category',Category::all())
        ->with('supplier',Supplier::all());
    }

    public function update(Request $request,$id){
        $product=Product::all()->where('id',$id)->first();
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'cat_id' => 'required',
            'sup_id' => 'required',
            'product_code' => 'required|max:13',
            'product_garage' => 'required',
            'product_route' => 'required',
            'buy_date' => 'required',
            'expire_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
        ]);
        $data=array();

        $image=$request->file('product_image');
        if($image){
            $data['product_name']=$request->product_name;
            $data['cat_id']=$request->cat_id;
            $data['sup_id']=$request->sup_id;
            $data['product_code']=$request->product_code;
            $data['product_garage']=$request->product_garage;
            $data['product_route']=$request->product_route;
            $data['buy_date']=$request->buy_date;
            $data['expire_date']=$request->expire_date;
            $data['buying_price']=$request->buying_price;
            $data['selling_price']=$request->selling_price;
            $data['product_image']=$request->product_image;
    
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/product/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['product_image']=$image_url;
            unlink($product->product_image);
            $employee=DB::table('products')->where('id',$id)->update($data);
    
            $notification=array(
                'message'=>'Product successfully inserted',
                'alert-type'=>'success'
               );
    
            //session()->flash('success','Employee create successfully!');
    
            return redirect(route('products.index'))->with($notification);
        }
        else{
            $data['product_name']=$request->product_name;
            $data['cat_id']=$request->cat_id;
            $data['sup_id']=$request->sup_id;
            $data['product_code']=$request->product_code;
            $data['product_garage']=$request->product_garage;
            $data['product_route']=$request->product_route;
            $data['buy_date']=$request->buy_date;
            $data['expire_date']=$request->expire_date;
            $data['buying_price']=$request->buying_price;
            $data['selling_price']=$request->selling_price;

            $employee=DB::table('products')->where('id',$id)->update($data);
    
            $notification=array(
                'message'=>'Product successfully updated',
                'alert-type'=>'success'
               );
    
            //session()->flash('success','Employee create successfully!');
    
            return redirect(route('products.index'))->with($notification);
        }
    }

    public function destroy($id){
        $deletedproduct=Product::all()->where('id',$id)->first();
        unlink($deletedproduct->product_image);
        $dltPro=$deletedproduct->delete();

        if($dltPro){
            $notification=array(
                'message'=>'Products deleted successfully!',
                'alert-type'=>'success'
               );
        return redirect(route('products.index'))->with($notification);
        }
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'success'
               );
        return redirect(route('products.index'))->with($notification);
        }
    }
}
