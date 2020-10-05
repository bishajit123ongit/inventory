@extends('layouts.admin')
@section('title')
Yearly Expenses
@endsection
@section('content')


<div class="card card-default">

	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
        <h4 style="color:red;font-size:30px;text-align:center;"></h4>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-danger">{{date("Y")}} All Expenses
                </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Details</th>
                                <th>Amount</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($expenses as $row)
                            <tr>
                                <td>{{$row->details}}</td>
                                <td>{{$row->amount}}</td>
                             
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
   
                    @php
                    $year=date("Y");
                    $expense=DB::table('expenses')->where('year',$year)->sum('amount');
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



