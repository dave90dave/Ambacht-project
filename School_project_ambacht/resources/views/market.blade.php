@extends("layouts.app")

@section("content")
<div class="container">

@if ($markets)

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
</div>
@endsection
