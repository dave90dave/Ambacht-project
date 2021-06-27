@extends('layouts.app')

@section('title')
			Change profile picture:
@endsection()

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12"><!-- 12 row -->
			<div class="card">
				<div class="card-header">
					<h3>Change profile picture</h3>

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
							<form action="/profile/" method="POST" enctype="multipart/form-data"><!-- here we update the button-->
								{{ csrf_field() }}
								{{ method_field('PUT') }}
						<div class="form-group">
				    		<label>Photo</label>
				    		<input type="file" name="photo" value="" class="form-control">
				     	</div>

				     	<button type="submit" class="btn btn-success">Submit</button>
				     	<a href="/profiles" class="btn btn-danger">Cancel</a>
					</form>
						</div>
					</div>

                    <img src="{{ asset("/image" . Auth()->user()->id) }}" alt="">
				</div>

			</div>
		</div>
	</div>
</div>

@endsection()

@section('scripts')


@endsection()
