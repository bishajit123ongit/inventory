@extends('layouts.admin')
@section('title')
View Attendence
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">View Attendence</h3>
                </div>
                <h3 class="text-success" align="center">Today {{$date->att_date}}</h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Attendence</th>
                                    </tr>
                                </thead>

                                <tbody>
                              
                                    @foreach($data as $row)
                                    <tr>
                                        <td>
                                            <img style="width:60px;height:60px;border-radius:50%;" src="{{asset($row->photo)}}" alt="">
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <input type="hidden" name="id[]" value="{{$row->id}}">
                                        <td>
                                          <input type="radio" value="Present" name="attendence[{{$row->id}}]" disabled="" <?php
                                            if($row->attendence=='Present'){
                                                echo "checked";
                                            }
                                          ?>> Present
                                          <input type="radio" value="Absence" name="attendence[{{$row->id}}]" disabled="" <?php
                                            if($row->attendence=='Absence'){
                                                echo "checked";
                                            }
                                          ?>> Absence
                                        </td>
                                        <input type="hidden" name="att_date" value="{{date("d/m/y")}}">
                                        <input type="hidden" name="att_year" value="{{date("Y")}}">
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