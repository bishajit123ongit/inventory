<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
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

    public function setting(){
        $setting=DB::table('settings')->first();
        return view('setting.edit')->with('setting',$setting);
    }

    public function update(Request $request,$id){
        $setting=DB::table('settings')->where('id',$id)->first();
        $validatedData = $request->validate([
            'company_name' => 'required|max:255',
            'company_address' => 'required',
            'company_phone' => 'required',
            'company_email' => 'required',
            'company_mobile' => 'required',
            'company_city' => 'required',
            'company_country' => 'required',
            'company_zipcode' => 'required',
        ]);

        $data=array();

        $image=$request->file('company_logo');
        if($image){
            $data['company_name']=$request->company_name;
            $data['company_address']=$request->company_address;
            $data['company_phone']=$request->company_phone;
            $data['company_email']=$request->company_email;
            $data['company_mobile']=$request->company_mobile;
            $data['company_city']=$request->company_city;
            $data['company_country']=$request->company_country;
            $data['company_zipcode']=$request->company_zipcode;
    
            
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/company/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['company_logo']=$image_url;
            unlink($setting->company_logo);
            $settings=DB::table('settings')->where('id',$id)->update($data);

            $notification=array(
                'message'=>'Settings updated successfully',
                'alert-type'=>'success'
            );

            return redirect(route('setting'))->with($notification);
        }
        else{

            $data['company_name']=$request->company_name;
            $data['company_address']=$request->company_address;
            $data['company_phone']=$request->company_phone;
            $data['company_email']=$request->company_email;
            $data['company_mobile']=$request->company_mobile;
            $data['company_city']=$request->company_city;
            $data['company_country']=$request->company_country;
            $data['company_zipcode']=$request->company_zipcode;

            $settings=DB::table('settings')->where('id',$id)->update($data);

            $notification=array(
                'message'=>'Settings updated successfully',
                'alert-type'=>'success'
            );

            return redirect(route('setting'))->with($notification);
        }
    }
}
