@extends("layouts.app")

@section("content")

@foreach ($markets as $market)
    {{$market->label}}
    {{$market->location}}
    <br>
@endforeach

@endsection
