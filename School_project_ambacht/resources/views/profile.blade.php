@extends("layouts.app")

@section("content")
<div class="container">



    <h2>Profiel</h2>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 g-1">
            <div class="col">

                <img src="/resources/img/test/profile.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$name}}</h5>
                    <p class="card-text">Heeft X markten, met in totaal X producten</p>
                    <small class="text-muted">{{$createdAt}}</small>

            </div>
        </div>
    </div>
</div>
@endsection
