@extends('layouts.admin')
@section('title')
  @if(isset($category))
  Edit Category
  @else
  Add Category
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
                    @if(isset($category))
                    Edit Category
                    @else
                    Add Category
                    @endif
                    </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{isset($category)?route('categories.update',$category->id):route('categories.store')}}" enctype="multipart/form-data">
                    @csrf

                    @if(isset($category))
                    @method('PUT')
                    @endif
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="cat_name" class="form-control" placeholder="Category Name"required value="{{isset($category)? $category->cat_name : '' }}">
                        </div>
                        

                        
                        
                        <button type="submit" class="btn btn-purple waves-effect waves-light">
                        @if(isset($category))
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