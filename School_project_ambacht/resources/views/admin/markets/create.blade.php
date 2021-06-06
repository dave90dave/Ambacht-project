@extends('layouts.master')

@section('title')
			Create-Markets:
@endsection()

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12"><!-- 12 row -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
			<div class="card">
				<div class="card-header">
					<h3>Create a Market</h3>

				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8"> <!--col-md-8 means 8 row  and form put into one row and updtate the button below-->
							<form action="/admin/market/create/" method="POST" ><!-- here we update the button-->
								{{ csrf_field() }}
								{{ method_field('POST') }}
                        <div class="form-group">
                            <label>user_id</label>
                            <input type="text" name="user_id" class="form-control">
                        </div>
                         <div class="form-group">
				    		<label>name</label>
				    		<input type="text" name="name" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>location</label>
				    		<input type="text" name="location" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>photo</label>
				    		<input type="text" name="photo" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>active</label>
				    		<input type="text" name="active" class="form-control">
				     	</div>
                         <div class="form-group">
				    		<label>description</label>
				    		<input type="text" name="description" class="form-control">
				     	</div>

				     	<button type="Submit" class="btn btn-success">Submit</button>
				     	<a href="/admin/markets" class="btn btn-danger">Cancel</a>
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
