<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DB;

class SalaryController extends Controller
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

    public function addAdvanceSalary(){
        return view('salary.advancesalary')->with('employees',Employee::all());
    }

    public function storeadvancesalary(Request $request){
        $validatedData = $request->validate([
            'emp_id' => 'required',
            'month' => 'required',
            'year' => 'required',
            'advanced_salary' => 'required',
        ]);

        $month=$request->month;
        $emp_id=$request->emp_id;
        $advance=DB::table('advance_salaries')
                ->where('month',$month)
                ->where('emp_id',$emp_id)->first();

        if($advance==NULL){
            $data=array();
            $data['emp_id']=$request->emp_id;
            $data['month']=$request->month;
            $data['year']=$request->year;
            $data['advanced_salary']=$request->advanced_salary;
    
            $advance_salary=DB::table('advance_salaries')->insert($data);
    
            if($advance_salary){
                $notification=array(
                    'message'=>'Advance Salary successfully inserted',
                    'alert-type'=>'success'
                   );
        
                //session()->flash('success','Employee create successfully!');
        
                return redirect(route('salaries.advancesalary'))->with($notification);
            }
            else{
                $notification=array(
                    'message'=>'error',
                    'alert-type'=>'success'
                   );
        
                //session()->flash('success','Employee create successfully!');
        
                return redirect(route('salaries.advancesalary'))->with($notification);
            }
        }
        else{
            $notification=array(
                'message'=>'Already given advance salary of this month!',
                'alert-type'=>'error'
               );
    
            return redirect(route('salaries.advancesalary'))->with($notification);
        }
       
    }

    public function alladvancesalaries(){

        $salaries=DB::table('advance_salaries')
        ->join('employees','advance_salaries.emp_id','employees.id')
        ->select('advance_salaries.*','employees.photo','employees.name','employees.salary')
        ->orderBy('id','DESC')
        ->get();


         return view('salary.alladvancesalary')->with('salaries',$salaries);
    }

    public function paysalary(){
        return view('salary.paysalary')->with('employees',Employee::all());
    }
}
