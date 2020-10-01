@extends('layouts.admin')
@section('title')
Pay Salary
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pay Salary 
                    <span style="float:right;" class="pull-right text-danger">{{date("F Y")}}</span>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Month</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($employees as $row)
                                    <tr>
                                        <td>
                                            <img style="width:60px;height:60px;border-radius:50%;" src="{{asset($row->photo)}}" alt="">
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->salary}}</td>
                                        <td><span class="badge badge-success">{{date("F",strtotime('-1 months'))}}</span></td>
                                        <td>
                                        <a href="#" class="btn btn-primary btn-sm">Pay Now</a>
                                       </td> 
                                    </tr>
                                    @endforeach()
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
	</div>
</div>
@endsection