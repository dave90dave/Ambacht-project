@extends("layouts.app")

@section("content")

<div class="container">

<h1>Home</h1>

<div class="container">

    <form action="/search" method="GET">
        <div class="row g-6">
            <div class="col-md-4">
                <input type="text" name="keyword" class="form-control" placeholder="Zoeken...">
            </div>
            <div class="col-md-3">
                <input type="text" name="location" class="form-control" placeholder="Locatie...">
            </div>
            <div class="col-md-3">
                <select class="form-select" aria-label="category" name="category">
                    <option value="" selected>Alle categorieën</option>
                    <option value="" disabled>--------------</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Zoeken...</button>
            </div>
        </div>
    </form>
</div>




@if ($products)

<br>
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

@if ($markets)
<br>
<h2>Markten</h2>

<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($markets as $market)
        <div class="col">
            <div class="card h-100">
            <img src="resources/img/test/market.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$market->label}}</h5>
                <p class="card-text">{{$market->description}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$market->created_at}}</small>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
Er zijn geen markten...
@endif

@if ($profiles)
<br>
<h2>Boeren</h2>
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($profiles as $profile)
        <div class="col">
            <div class="card h-100">
            <img src="resources/img/test/profile.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$profile->name}}</h5>
                <p class="card-text">{{--$profile->description--}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$profile->created_at}}</small>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
Er zijn geen profielen...
@endif

@endsection
