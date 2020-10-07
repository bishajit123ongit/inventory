<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attendence;

class AttendenceController extends Controller
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

    public function take(){
        $employees=DB::table('employees')->get();
        return view('attendence.take')->with('employees',$employees);
    }

    public function takestore(Request $request){
        //return $request->all();
        $date=$request->att_date;
        $att_date=DB::table('attendences')->where('att_date',$date)->first();
        if($att_date){
            $notification=array(
                'message'=>'Today attendence already taken',
                'alert-type'=>'error'
               );
               return redirect()->back()->with($notification);
        }
        else{
            foreach($request->user_id as $id){
                $data[]=[
                    'emp_id'=>$id,
                    'attendence'=>$request->attendence[$id],
                    'att_date'=>$request->att_date,
                    'att_year'=>$request->att_year,
                    'month'=>$request->month,
                    'edit_date'=>date("d_m_y"),
                ];
            }
    
            $att=DB::table('attendences')->insert($data);
            if($att){
                $notification=array(
                    'message'=>'Attendence successfully taken',
                    'alert-type'=>'success'
                   );
                   return redirect()->back()->with($notification);
            }
            else{
                $notification=array(
                    'message'=>'Attendence Error',
                    'alert-type'=>'error'
                   );
                   return redirect()->back()->with($notification);
            }
        }
    }

    public function allAttendence(){
        $all_att=DB::table('attendences')->select('edit_date')->groupBy('edit_date')->get();
        return view('attendence.all_attendence')->with('all_att',$all_att);
    }

    public function edit($edit_date){
        $date=DB::table('attendences')->where('edit_date',$edit_date)->first();
        $data=DB::table('attendences')
        ->join('employees','attendences.emp_id','employees.id')
        ->select('employees.name','employees.photo','attendences.*')
        ->where('edit_date',$edit_date)->get();
        return view('attendence.edit_attendence')->with('date',$date)->with('data',$data);
    }

    public function updateattendence(Request $request){
        //return $request->all();
        $date=$request->att_date;
        $att_date=DB::table('attendences')->where('att_date',$date)->first();
       
            foreach($request->id as $id){
                $data=[
                    'attendence'=>$request->attendence[$id],
                    'att_date'=>$request->att_date,
                    'att_year'=>$request->att_year,
                    'month'=>$att_date->month,
                ];
                $attendence=Attendence::where(['att_date'=>$request->att_date,'id'=>$id])->first();
                $attendence->update($data);
            }
    
            if($attendence){
                $notification=array(
                    'message'=>'Attendence updated successfully!',
                    'alert-type'=>'success'
                   );
                   return redirect(route('attendences.all'))->with($notification);
            }
            else{
                $notification=array(
                    'message'=>'Attendence Error',
                    'alert-type'=>'error'
                   );
                   return redirect(route('attendences.all'))->with($notification);
            }
    }

    public function view($edit_date){
        $date=DB::table('attendences')->where('edit_date',$edit_date)->first();
        $data=DB::table('attendences')
        ->join('employees','attendences.emp_id','employees.id')
        ->select('employees.name','employees.photo','attendences.*')
        ->where('edit_date',$edit_date)->get();
        return view('attendence.view_attendence')->with('date',$date)->with('data',$data);
    }
}
