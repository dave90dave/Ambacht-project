@extends("layouts.app")

@section("content")
<div class="container">



    <h2>Profiel</h2>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/resources/img/test/profile.jpg" height="100px" width="100px" alt="..." style="border-radius: 100%;">
                <h5>{{$name}}</h5>
                <small class="text-muted">Gebruiker is actief sinds: {{$createdAt}}</small>
            </div>
            <div class="col">
                <p>{{$workExperience}}</p>
                <p>{{$smallBiography}}</p>
                <p>{{$activeInRegions}}</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <p>Hier komt een kaart, met daarop de locaties van de marktkraampjes.</p>
            <p>Hier komen alle marktkraampjes van de gebruiker</p>
            <p>Hier komen alle producten van de gebruiker</p>
        </div>
    </div>

</div>
@endsection
