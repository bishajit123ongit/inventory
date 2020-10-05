@extends('layouts.admin')
@section('title')
  Edit Today Expense
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
                    Edit Today Expense 
                 </h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('expenses.updatetoday',$today->id)}}">
                    @csrf
                        <div class="form-group">
                            <label for="details">Expense Details</label>
                            <textarea name="details" cols="4" class="form-control">{{$today->details}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" class="form-control" placeholder="amount"required value="{{$today->amount}}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="date" class="form-control" required value="{{date("d/m/y")}}">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="month" class="form-control" required value="{{date("F")}}">
                        </div>
                    

                        <div class="form-group">
                            <input type="hidden" name="year" class="form-control" required value="{{ date("Y") }}">
                        </div>
                        
                        <button type="submit" class="btn btn-purple waves-effect waves-light">
                       
                        <i class="fas fa-pen"></i>  Update
                     
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