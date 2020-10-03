@extends('layouts.admin')
@section('title')
@if(isset($product))
  Edit Product
  @else
  Add Product
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
                    @if(isset($product))
                    Edit Product
                    @else
                    Add Product
                    @endif
                    </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{isset($product)?route('products.update',$product->id):route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" class="form-control" placeholder="product name"required value="{{isset($product)? $product->product_name : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="cat_id">Category</label>
                            <select name="cat_id" class="form-control">
                            <option disabled="" selected=""></option>
                            @foreach($category as $row)
                            <option value="{{$row->id}}"
                            @if(isset($product))
                                @if($row->id == $product->cat_id)
                                selected

                                @endif

                                @endif
                            >{{$row->cat_name}}</option>
                             @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sup_id">Supplier</label>
                            <select name="sup_id" class="form-control">
                            <option disabled="" selected=""></option>
                            @foreach($supplier as $row)
                            <option value="{{$row->id}}"
                            @if(isset($product))
                                @if($row->id == $product->sup_id)
                                selected

                                @endif

                                @endif
                            
                            >{{$row->name}}</option>
                             @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_code">Product Code</label>
                            <input type="text" name="product_code" class="form-control" placeholder="product code"required value="{{isset($product)? $product->product_code : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="product_garage">Product Garage</label>
                            <input type="text" name="product_garage" class="form-control" placeholder="product garage"required value="{{isset($product)? $product->product_garage : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="product_route">Product Route</label>
                            <input type="text" name="product_route" class="form-control" placeholder="product route"required value="{{isset($product)? $product->product_route : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="buy_date">Buy Date</label>
                            <input type="date" name="buy_date" class="form-control" placeholder="mm/dd/yyyy"required value="{{isset($product)? $product->buy_date : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="expire_date">Expire Date</label>
                            <input type="date" name="expire_date" class="form-control" placeholder="mm/dd/yyyy"required value="{{isset($product)? $product->expire_date : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="buying_price">Buying Price</label>
                            <input type="text" name="buying_price" class="form-control" placeholder="buying price"required value="{{isset($product)? $product->buying_price : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="selling_price">Selling Price</label>
                            <input type="text" name="selling_price" class="form-control" placeholder="selling price"required value="{{isset($product)? $product->selling_price : '' }}">
                        </div>
        
                        @if(isset($product))
                        <div class="form-group">
                        <img style="width:120px; height:120px; border-radius:50%;" src="{{asset($product->product_image)}}" alt="">
                        </div>
                        @endif

                        @if(isset($product))
                        <div class="form-group">
                            <label for="product_image">Image</label>
                            <input type="file" name="product_image">
                        </div>
                        @else
                        <div class="form-group">
                            <label for="product_image">Image</label>
                            <input type="file" name="product_image" required>
                        </div>

                        @endif


                        
                        
                        <button type="submit" class="btn btn-purple waves-effect waves-light">
                        @if(isset($product))
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