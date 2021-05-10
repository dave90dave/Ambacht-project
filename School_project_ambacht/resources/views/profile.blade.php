@extends("layouts.app")

@section("content")
<div class="container">



    <h2>Profiel</h2>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 g-1">
            <div class="col">

                <img src="/resources/img/test/profile.jpg" height="100px" alt="...">
                <h5 class="card-title">{{$name}}</h5>
                <small class="text-muted">Gebruiker is actief sinds: {{$createdAt}}</small>

                <p class="card-text">{{$workExperience}}</p>
                <p class="card-text">{{$smallBiography}}</p>
                <p class="card-text">{{$activeInRegions}}</p>
                <p class="card-text">Hier komt een kaart, met daarop de locaties van de marktkraampjes.</p>
                <p class="card-text">Hier komen alle marktkraampjes van de gebruiker</p>
                <p class="card-text">Hier komen alle producten van de gebruiker</p>
            </div>
        </div>
    </div>
</div>
@endsection
