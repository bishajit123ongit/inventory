@extends('layouts.admin')
@section('title')
  Update Setting
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    
                    Update Setting
                    
                    </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('settings.update',$setting->id)}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="name">Company Name</label>
                            <input type="text" name="company_name" class="form-control" required value="{{$setting->company_name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Company Email</label>
                            <input type="email" name="company_email" class="form-control" required value="{{ $setting->company_email}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="company_address" class="form-control" required value="{{ $setting->company_address}}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Company Phone</label>
                            <input type="text" name="company_phone" class="form-control" required value="{{ $setting->company_phone  }}">
                        </div>

                        <div class="form-group">
                            <label for="city">Company City</label>
                            <input type="text" name="company_city" class="form-control" required value="{{ $setting->company_city }}">
                        </div>

                        <div class="form-group">
                            <label for="mobile">Company Mobile</label>
                            <input type="text" name="company_mobile" class="form-control" required value="{{ $setting->company_mobile }}">
                        </div>

                        <div class="form-group">
                            <label for="mobile">Company Country</label>
                            <input type="text" name="company_country" class="form-control" required value="{{ $setting->company_country }}">
                        </div>

                        <div class="form-group">
                            <label for="nid_no">Company Zipcode</label>
                            <input type="text" name="company_zipcode" class="form-control" required value="{{ $setting->company_zipcode}}">
                        </div>

                        <div class="form-group">
                        <img style="width:120px; height:120px; border-radius:50%;" src="{{asset($setting->company_logo)}}" alt="">
                        </div>
                       

                        <div class="form-group">
                            <label for="photo">Company Logo</label>
                            <input type="file" name="company_logo" >
                        </div>
                        
                        <button type="submit" class="btn btn-purple waves-effect waves-light">
                         <i style="margin-right:3px;" class="fas fa-pen"></i>Update
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