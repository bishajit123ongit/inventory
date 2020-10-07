<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExpenseController extends Controller
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
        return view('expense.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'details' => 'required',
            'amount' => 'required',
            'month' => 'required',
            'date' => 'required',
            'year' => 'required',
        ]);

        $data=array();
        $data['details']=$request->details;
        $data['amount']=$request->amount;
        $data['month']=$request->month;
        $data['date']=$request->date;
        $data['year']=$request->year;

        $expense=DB::table('expenses')->insert($data);

        $notification=array(
            'message'=>'Expense successfully inserted',
            'alert-type'=>'success'
           );

        return redirect(route('expenses.create'))->with($notification);
    }

    public function today(){
        $date=date("d/m/y");
        $today=DB::table('expenses')->where('date',$date)->get();
        return view('expense.today')->with('today',$today);
    }

    public function todayEdit($id){
        $today=DB::table('expenses')->where('id',$id)->first();
        return view('expense.edit_today_expense')->with('today',$today);
    }

    public function updatetoday(Request $request,$id){

        $today=DB::table('expenses')->where('id',$id)->first();
        $validatedData = $request->validate([
            'details' => 'required',
            'amount' => 'required',
            'month' => 'required',
            'date' => 'required',
            'year' => 'required',
        ]);

        $data=array();

        $data['details']=$request->details;
        $data['amount']=$request->amount;
        $data['month']=$request->month;
        $data['date']=$request->date;
        $data['year']=$request->year;
        $employee=DB::table('expenses')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Today Expenses updated successfully',
            'alert-type'=>'success'
        );

        return redirect(route('expenses.today'))->with($notification);
    }

    public function monthly(){
        $month=date("F");
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function yearly(){
        $year=date("Y");
        $expenses=DB::table('expenses')->where('year',$year)->get();
      
        return view('expense.yearly')->with('expenses',$expenses);
    }

    public function january(){
        $month="January";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function february(){
        $month="February";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function march(){
        $month="March";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function april(){
        $month="April";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function may(){
        $month="May";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function june(){
        $month="June";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function july(){
        $month="July";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function august(){
        $month="August";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function september(){
        $month="September";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function october(){
        $month="October";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function november(){
        $month="November";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

    public function december(){
        $month="December";
        $expenses=DB::table('expenses')->where('month',$month)->get();
      
        return view('expense.monthly')->with('expenses',$expenses);
    }

}
