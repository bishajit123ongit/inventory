@extends('layouts.admin')
@section('title')
Today Expenses
@endsection

@section('content')

@php
$date=date("d/m/y");
$expense=DB::table('expenses')->where('date',$date)->sum('amount');
@endphp
<div class="card card-default">

	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
        <h4 style="color:red;font-size:30px;text-align:center;">Total: {{$expense}} Taka</h4>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Today Expenses
                <a style="float:right;" href="{{'expenses.create'}}" class="btn btn-primary btn-sm">Add New</a>
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
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($today as $row)
                            <tr>
                                <td>{{$row->details}}</td>
                                <th>{{$row->amount}}</th>
                                <td> <a href="{{route('expenses.todayedit',$row->id)}}" class="btn btn-info btn-sm"><i style="margin-right:3px;" class="far fa-edit"></i>Edit</a>
                                  </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
   

                </div>
            </div>
        </div>
    </div>
 </div>	</div>
	</div>
</div>
@endsection



