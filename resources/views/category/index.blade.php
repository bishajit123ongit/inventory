@extends('layouts.admin')
@section('title')
All Categories
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Categories</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($categories as $row)
                            <tr>
                                <td>{{$row->cat_name}}</td>
                                <td> <a href="{{route('categories.edit',$row->id)}}" class="btn btn-info btn-sm "><i style="margin-right:3px;" class="far fa-edit"></i>Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{$row->id}})"><i style="margin-right:3px;" class="fas fa-trash-alt"></i>Delete</button> </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="POST" id="deleteCategoryForm">
  	@csrf
  	@method('DELETE')
	    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-blod"> Are you sure want to delete category??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> No, Go Back</button>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
      </div>
    </div>
</form>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
 </div>	</div>
	</div>
</div>
@endsection


<script type="text/javascript">
	function handleDelete(id)
	{
		var form=document.getElementById('deleteCategoryForm');
		form.action='categories/'+id
        $('#deleteModal').modal('show');
	}
</script>
