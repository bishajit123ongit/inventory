@extends('layouts.admin')
@section('title')
  @if(isset($supplier))
  Edit Supplier
  @else
  Add Supplier
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
                    @if(isset($supplier))
                    Edit Supplier
                    @else
                    Add Supplier
                    @endif
                    </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{isset($supplier)?route('suppliers.update',$supplier->id):route('suppliers.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="name"required value="{{isset($supplier)? $supplier->name : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email"required value="{{isset($supplier)? $supplier->email : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="phone"required value="{{isset($supplier)? $supplier->phone : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="address"required value="{{isset($supplier)? $supplier->address : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="shop">Shop</label>
                            <input type="text" name="shop" class="form-control" placeholder="shop"required value="{{isset($supplier)? $supplier->shop : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                            <option disabled="" selected=""></option>
                            <option value="1" @if(isset($supplier)) @if($supplier->type=="1") selected @endif @endif>Distributor</option>
                            <option value="2" @if(isset($supplier)) @if($supplier->type=="2") selected @endif @endif>Whole Sellers</option>
                            <option value="3" @if(isset($supplier)) @if($supplier->type=="3") selected @endif @endif>Brochure</option>
                            </select>
                         </div>

                        <div class="form-group">
                            <label for="account_holder">Account Holder</label>
                            <input type="text" name="account_holder" class="form-control" placeholder="Account Holder" value="{{isset($supplier)? $supplier->account_holder : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="account_number">Account Number</label>
                            <input type="text" name="account_number" class="form-control" placeholder="Account Number" value="{{isset($supplier)? $supplier->account_number : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control" placeholder="Bank Name" value="{{isset($supplier)? $supplier->bank_name : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="branch_name">Branch Name</label>
                            <input type="text" name="branch_name" class="form-control" placeholder="Branch Name" value="{{isset($supplier)? $supplier->branch_name : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City"required value="{{isset($supplier)? $supplier->city : '' }}">
                        </div>

                        @if(isset($supplier))
                        <div class="form-group">
                        <img style="width:120px; height:120px; border-radius:50%;" src="{{asset($supplier->photo)}}" alt="">
                        </div>
                        @endif

                        @if(isset($supplier))
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
                        @if(isset($supplier))
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