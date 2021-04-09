@extends("layouts.app")

@section("content")

<div class="container">
@if ($products)

<h2>Producten</h2>

<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">

        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100">
            <img src="resources/img/test/product.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$product->created_at}}</small>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
Er zijn geen producten...
@endif
</div>
@endsection
