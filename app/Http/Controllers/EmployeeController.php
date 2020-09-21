<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;

class EmployeeController extends Controller
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
        return view('employee.create');
    }

    public function index(){
        return view('employee.index')->with('employees',Employee::all());
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:employees|max:255',
            'nid_no' => 'required|unique:employees|max:255',
            'address' => 'required',
            'phone' => 'required|max:15',
            'salary' => 'required',
            'photo' => 'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['nid_no']=$request->nid_no;
        $data['phone']=$request->phone;
        $data['experience']=$request->experience;
        $data['salary']=$request->salary;
        $data['vocation']=$request->vocation;
        $data['city']=$request->city;

        $image=$request->file('photo');
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['photo']=$image_url;

        $employee=DB::table('employees')->insert($data);

        $notification=array(
            'message'=>'Employees successfully inserted',
            'alert-type'=>'success'
           );

        //session()->flash('success','Employee create successfully!');

        return redirect(route('employees.create'))->with($notification);
    }
}
