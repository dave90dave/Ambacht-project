@extends("layouts.app")

@section("content")
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <img src="/storage/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
        <h2>{{ $user->image }}'s Profiel</h2>
    </div>
</div>
@endsection
