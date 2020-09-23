@extends('layouts.admin')
@section('title')
  @if(isset($customer))
  Edit Customer
  @else
  Add Customer
  @endif
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
                    @if(isset($customer))
                    Edit Customer
                    @else
                    Add Customer
                    @endif
                    </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{isset($customer)?route('customers.update',$customer->id):route('customers.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="name"required value="{{isset($customer)? $customer->name : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email"required value="{{isset($customer)? $customer->email : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="phone"required value="{{isset($customer)? $customer->phone : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="address"required value="{{isset($customer)? $customer->address : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="shopname">Shop Name</label>
                            <input type="text" name="shopname" class="form-control" placeholder="shopname"required value="{{isset($customer)? $customer->shopname : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="nid_no">NID_NO</label>
                            <input type="text" name="nid_no" class="form-control" placeholder="NID_NO"required value="{{isset($customer)? $customer->nid_no : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="account_holder">Account Holder</label>
                            <input type="text" name="account_holder" class="form-control" placeholder="Account Holder" value="{{isset($customer)? $customer->account_holder : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="account_number">Account Number</label>
                            <input type="text" name="account_number" class="form-control" placeholder="Account Number" value="{{isset($customer)? $customer->account_number : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control" placeholder="Bank Name" value="{{isset($customer)? $customer->bank_name : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="branch_name">Branch Name</label>
                            <input type="text" name="branch_name" class="form-control" placeholder="Branch Name" value="{{isset($customer)? $customer->branch_name : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City"required value="{{isset($customer)? $customer->city : '' }}">
                        </div>

                        @if(isset($customer))
                        <div class="form-group">
                        <img style="width:120px; height:120px; border-radius:50%;" src="{{asset($customer->photo)}}" alt="">
                        </div>
                        @endif

                        @if(isset($customer))
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" >
                        </div>
                        @else
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" required>
                        </div>

                        @endif

                        
                        
                        <button type="submit" class="btn btn-purple waves-effect waves-light">
                        @if(isset($customer))
                         <i style="margin-right:3px;" class="fas fa-pen"></i>Update
                        @else
                        <i class="fas fa-plus-square"></i>  Add
                        @endif


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