@extends('layouts.master')

@section('title')

			Admin panel

@endsection()

@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title">Dashboard</h4>
        @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                  @endif
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
                <td>
                    <form action="/admin/profile/togglepublic/" method="post">
                      {{ csrf_field() }}
                      {{ method_field('post') }}
                      <button type="submit" class="btn btn-secondary">Maak verborgen</button>
                    </form>
                  </td>
              @elseif ($profileStatus == '0')
                <p class="card-text">Verborgen</p>
                <td>
                    <form action="/admin/profile/togglepublic" method="post">
                      {{ csrf_field() }}
                      {{ method_field('post') }}
                      <button type="submit" class="btn btn-primary">Maak openbaar</button>
                    </form>
                  </td>
              @endif
        </div>
      </div>
    </div>
  </div>


@endsection()

@section('scripts')


@endsection()
