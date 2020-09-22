@extends('layouts.admin')
@section('title')
All Employee
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Employee</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($employees as $row)
                                    <tr>
                                        <td>
                                            <img style="width:60px;height:60px;border-radius:50%;" src="{{asset($row->photo)}}" alt="">
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->address}}</td>
                                        <td>{{$row->phone}}</td>
                                        <td>{{$row->salary}}</td>
                                        <td> <a href="{{route('employees.edit',$row->id)}}" class="btn btn-info btn-sm "><i style="margin-right:3px;" class="far fa-edit"></i>Edit</a>
                                        <a id="delete" href="{{route('employees.destroy',$row->id)}}" class="btn btn-danger btn-sm "><i style="margin-right:3px;" class="fas fa-trash-alt"></i>Delete</a>
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