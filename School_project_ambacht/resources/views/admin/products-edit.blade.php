@extends('layouts.master')

@section('title')
			Edit-Products:
@endsection()

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12"><!-- 12 row -->
			<div class="card">
				<div class="card-header">
					<h3>Edit Products</h3>

				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8"> <!--col-md-8 means 8 row  and form put into one row and updtate the button below-->
							<form action="/role-products-update/{{ $products->id }}" method="POST" ><!-- here we update the button-->
								{{ csrf_field() }}
								{{ method_field('PUT') }}
                         <div class="form-group">
				    		<label>name</label>
				    		<input type="text" name="name" value="{{ $products->name }}" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>price</label>
				    		<input type="text" name="price" value="{{ $products->price }}" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>per_unit</label>
				    		<input type="text" name="per_unit" value="{{ $products->per_unit }}" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>amount</label>
				    		<input type="text" name="amount" value="{{ $products->amount }}" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>photo</label>
				    		<input type="text" name="photo" value="{{ $products->photo }}" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>active</label>
				    		<input type="text" name="active" value="{{ $products->active }}" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>description</label>
				    		<input type="text" name="description" value="{{ $products->description }}" class="form-control">
				     	</div>

				     	<button type="Submit" class="btn btn-success">Submit</button>
				     	<a href="/products" class="btn btn-danger">Cancel</a>
					</form>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>

@endsection()

@section('scripts')


@endsection()
