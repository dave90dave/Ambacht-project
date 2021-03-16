@extends("layouts.app")

@section("content")

@foreach ($products as $product)
    {{$product->name}}
    {{$product->price}}
    <br>
@endforeach

@endsection
