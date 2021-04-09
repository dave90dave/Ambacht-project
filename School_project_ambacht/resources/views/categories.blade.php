@extends("layouts.app")

@section("content")

<div class="container">
@if ($categories)

<h2>Categorieen</h2>

<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">

        @foreach ($categories as $category)
        <div class="col">
            <div class="card h-100">
            <img src="resources/img/test/category.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$category->created_at}}</small>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
Er zijn geen categorieen...
@endif
</div>
@endsection
