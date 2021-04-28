@extends("layouts.app")

@section("content")
<div class="container">

@if ($profiles)

<h2>Profielen</h2>

<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($profiles as $profile)
        <div class="col">
            <div class="card h-100">
            <img src="/resources/img/test/profile.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$profile->name}}</h5>
                <p class="card-text">Heeft X markten, met in totaal X producten</p>
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
</div>
@endsection
