@extends('layouts.admin')
@section('title')
Add Employee
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Employee</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="email"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="phone"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="address"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="experience">Experience</label>
                                                <input type="text" name="experience" class="form-control" placeholder="experience"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nid_no">NID_NO</label>
                                                <input type="text" name="nid_no" class="form-control" placeholder="NID_NO"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="salary">Salary</label>
                                                <input type="text" name="salary" class="form-control" placeholder="Salary"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="vocation">Vocation</label>
                                                <input type="text" name="vocation" class="form-control" placeholder="Vocation"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" name="photo"required>
                                            </div>
                                           
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div>
                                    <!-- card-body -->
                                </div>
                                <!-- card -->
                            </div>
		</div>
	</div>
@endsection