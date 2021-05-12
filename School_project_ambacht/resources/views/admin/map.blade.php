@extends('layouts.master')

@section('title')
Welkom bij Greenmarket!
@endsection()



@section('content')

    <div style="width: 500px; height: 500px;">
        {!! Mapper::render() !!}
    </div>

@endsection()

@section('scripts')

@endsection()
