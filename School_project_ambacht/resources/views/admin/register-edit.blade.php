@extends('layouts.master')

@section('title')
			Edit-Registered User:
@endsection()

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12"><!-- 12 row -->
			<div class="card">
				<div class="card-header">
					<h3>Edit User's</h3>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8"> <!--col-md-8 means 8 row  and form put into one row and updtate the button below-->
							<form action="/role-register-update/{{ $users->id }}" method="POST" ><!-- here we update the button-->
								{{ csrf_field() }}
								{{ method_field('PUT') }}
						<div class="form-group">
				    		<label>Name</label>
				    		<input type="text" name="name" value="{{ $users->name }}" class="form-control">
				     	</div>

                        <div class="form-group">
				    		<label>email</label>
				    		<input type="text" name="email" value="{{ $users->email }}" class="form-control">
				     	</div>

                         <div class="form-group">
				    		<label>Public</label>
                            <input type="checkbox" name="public" value="{{ $users->public }}" class="form-control">
				     	</div>

                         <div class="form-group">
				    		<label>Phone number</label>
				    		<input type="text" name="phoneNumber" value="{{ $users->phoneNumber }}" class="form-control">
				     	</div>

				     	<div class="form-group">
				    		<label>Give Role</label>
				    		<select name="usertype" class="form-control">
				    			<option value="admin">Admin</option>
				    			<option value="vendor">Vendor</option>
				    			<option value="">None</option>
				    		</select>
				     	</div>

                         <div class="form-group">
				    		<label>Password</label>
				    		<input type="password" name="password" class="form-control">
				     	</div>

                         <div class="form-group">
				    		<label>Confirm password</label>
				    		<input type="password" name="password_confirmation" class="form-control">
				     	</div>

				     	<button type="Submit" class="btn btn-success">Submit</button>
				     	<a href="/role-register" class="btn btn-danger">Cancel</a>
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
