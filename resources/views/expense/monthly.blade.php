@extends('layouts.admin')
@section('title')
Monthly Expenses
@endsection
@section('content')


<div class="card card-default">

	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
        <a href="{{route('expenses.january')}}" class="btn btn-success btn-sm">January</a>
        <a href="{{route('expenses.february')}}" class="btn btn-primary btn-sm">February</a>
        <a style="color:black;" href="{{route('expenses.march')}}" class="btn btn-warning btn-sm">March</a>
        <a href="{{route('expenses.april')}}" class="btn btn-info btn-sm">April</a>
        <a href="{{route('expenses.may')}}" class="btn btn-danger btn-sm">May</a>
        <a href="{{route('expenses.june')}}" class="btn btn-success btn-sm">June</a>
        <a href="{{route('expenses.july')}}" class="btn btn-primary btn-sm">July</a>
        <a style="color:black;"  href="{{route('expenses.august')}}" class="btn btn-warning btn-sm">August</a>
        <a href="{{route('expenses.september')}}" class="btn btn-info btn-sm">September</a>
        <a href="{{route('expenses.october')}}" class="btn btn-danger btn-sm">October</a>
        <a href="{{route('expenses.november')}}" class="btn btn-success btn-sm">November</a>
        <a style="margin-top:5px;" href="{{route('expenses.december')}}" class="btn btn-primary btn-sm">December</a>
        <h4 style="color:red;font-size:30px;text-align:center;"></h4>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-danger"> Monthly Expenses
                </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Details</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($expenses as $row)
                            <tr>
                                <td>{{$row->details}}</td>
                                <td>{{$row->date}}</td>
                                <td>{{$row->amount}}</td>
                             
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
   
                    @php
                    $month=date("F");
                    $expense=DB::table('expenses')->where('month',$month)->sum('amount');
                    @endphp

                    <h4 style="text-align:center;">Total: {{$expense}} Taka</h4>
                </div>
            </div>
        </div>
    </div>
 </div>	</div>
	</div>
</div>
@endsection



