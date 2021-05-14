@extends('layouts.master')

@section('title')

			Admin panel

@endsection()

@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title">Dashboard</h4>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-3">
    <div class="col">
      <div class="card h-100 text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Actieve kraampjes</h5>
          <h3>{{$marketsActive}}</h3>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Actieve producten</h5>
          <h3>{{$productsActive}}</h3>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Jouw profiel:</h5>
              @if ($profileStatus == '1')
                <p class="card-text">Openbaar</p>
                <a href="">Maak verborgen</a>
              @elseif ($profileStatus == '0')
                <p class="card-text">Verborgen</p>
                <a href="">Maak openbaar</a>
              @endif
        </div>
      </div>
    </div>
  </div>


@endsection()

@section('scripts')


@endsection()
