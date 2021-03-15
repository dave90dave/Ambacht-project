@extends("layouts.app")

@section("content")
<table border="1">
    <tr>
        <th>Id</th>
        <th>User id</th>
        <th>Label</th>
        <th>Location</th>
        <th>Photo</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Has X products added</th>
    </tr>

@foreach ($markets as $market)
<tr>
    <td>{{$market->id}}</td>
    <td>{{$market->user_id}}</td>
    <td>{{$market->label}}</td>
    <td>{{$market->location}}</td>
    <td>{{$market->photo}}</td>
    <td>{{$market->description}}</td>
    <td>{{$market->created_at}}</td>
    <td>{{$market->updated_at}}</td>
</tr>
@endforeach

</table>
@endsection
