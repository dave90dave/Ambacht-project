@extends("layouts.app")

@section("content")
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>

@foreach ($categories as $category)
<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->name}}</td>
    <td>{{$category->created_at}}</td>
    <td>{{$category->updated_at}}</td>
</tr>
@endforeach

</table>
@endsection
