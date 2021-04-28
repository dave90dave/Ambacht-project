@extends('layouts.master')

@section('title')
    Admin dashboard
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
          <p class="card-text">{{$marketsActive}}</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Actieve producten</h5>
          <p class="card-text">{{$productsActive}}</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 text-white bg-dark">
        <div class="card-body">
          <h5 class="card-title">Jouw profiel:</h5>
          <p class="card-text">Publiek zichtbaar {{$profileStatus}}</p>
        </div>
      </div>
    </div>
  </div>


@endsection()

@section('scripts')


@endsection()
