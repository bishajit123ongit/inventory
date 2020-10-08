@extends('layouts.admin')
@section('title')
  Products Import
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
                    Products Import
                    <a style="float:right;" href="{{route('export')}}" class="btn btn-primary btn-sm">Download Xlsx</a>
                    </h3>
                    
                    </div>
                   
                <div class="card-body">
                    <form method="POST" action="{{route('import')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="name">Xlsx File Import</label>
                            <input type="file" class="form-control" name="import_file" required>
                        </div>
                        
                        <button type="submit" class="btn btn-purple waves-effect waves-light">
                       
                        <i style="margin-right:3px;" class="fas fa-upload"></i>Upload
                      
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