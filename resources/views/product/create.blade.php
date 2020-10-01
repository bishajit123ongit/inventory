@extends('layouts.admin')
@section('title')
  Add Products
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
                    Add Products
                    </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" class="form-control" placeholder="product name"required>
                        </div>
                        <div class="form-group">
                            <label for="cat_id">Category</label>
                            <select name="cat_id" class="form-control">
                            <option disabled="" selected=""></option>
                            @foreach($category as $row)
                            <option value="{{$row->id}}">{{$row->cat_name}}</option>
                             @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sup_id">Supplier</label>
                            <select name="sup_id" class="form-control">
                            <option disabled="" selected=""></option>
                            @foreach($supplier as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                             @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_code">Product Code</label>
                            <input type="text" name="product_code" class="form-control" placeholder="product code"required>
                        </div>

                        <div class="form-group">
                            <label for="product_garage">Product Garage</label>
                            <input type="text" name="product_garage" class="form-control" placeholder="product garage"required>
                        </div>

                        <div class="form-group">
                            <label for="product_route">Product Route</label>
                            <input type="text" name="product_route" class="form-control" placeholder="product route"required>
                        </div>

                        <div class="form-group">
                            <label for="buy_date">Buy Date</label>
                            <input type="date" name="buy_date" class="form-control" placeholder="mm/dd/yyyy"required>
                        </div>

                        <div class="form-group">
                            <label for="expire_date">Expire Date</label>
                            <input type="date" name="expire_date" class="form-control" placeholder="mm/dd/yyyy"required>
                        </div>

                        <div class="form-group">
                            <label for="buying_price">Buying Price</label>
                            <input type="text" name="buying_price" class="form-control" placeholder="buying price"required>
                        </div>

                        <div class="form-group">
                            <label for="selling_price">Selling Price</label>
                            <input type="text" name="selling_price" class="form-control" placeholder="selling price"required>
                        </div>
        
                        <div class="form-group">
                            <label for="product_image">Image</label>
                            <input type="file" name="product_image" required>
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