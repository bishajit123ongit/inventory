@extends('layouts.admin')
@section('title')
All Attendences
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Attendences</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Edit Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        @php
                         $sl=1;
                        @endphp
                        <tbody>
                            @foreach($all_att as $row)
                            <tr>
                            <td>{{$sl++}}</td>
                                <td>{{$row->edit_date}}</td>
                                <td> <a href="{{route('attendences.edit',$row->edit_date)}}" class="btn btn-info btn-sm "><i style="margin-right:3px;" class="far fa-edit"></i>Edit</a>
                                <a href="{{route('attendences.view',$row->edit_date)}}" class="btn btn-dark btn-sm "><i style="margin-right:3px;" class="fas fa-eye"></i>view</a>
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

