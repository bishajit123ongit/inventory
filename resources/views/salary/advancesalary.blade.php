@extends('layouts.admin')
@section('title')
  Add Advance Salary
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h3 class="card-title text-white">
                   
                    Add Advance Salary
                    </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('salaries.storeadvancesalary')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="emp_id">Employee Name</label>
                            <select name="emp_id" class="form-control">
                            <option disabled="" selected=""></option>
                            @foreach($employees as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                             @endforeach
                            
                            </select>
                         </div>

                         <div class="form-group">
                            <label for="month">Month</label>
                            <select name="month" class="form-control">
                            <option disabled="" selected=""></option>
                            
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                            </select>
                         </div>

                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" name="year" class="form-control" placeholder="Year">
                        </div>

                        <div class="form-group">
                            <label for="advanced_salary">Advanced Salary</label>
                            <input type="text" name="advanced_salary" class="form-control" placeholder="Adcanced Salary">
                        </div>

                        
                        
                        <button type="submit" class="btn btn-purple waves-effect waves-light">
            
                        <i class="fas fa-plus-square"></i>  Add
                        </button>
                    </form>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div>
		</div>
	</div>
@endsection