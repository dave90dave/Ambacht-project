@extends("layouts.app")

@section("content")
<table border="1">
    <tr>
        <th>Id</th>
        <th>Category id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Per unit</th>
        <th>Amount</th>
        <th>Photo</th>
        <th>Active</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>

@foreach ($products as $product)
<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->category_id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->per_unit}}</td>
    <td>{{$product->amount}}</td>
    <td>{{$product->photo}}</td>
    <td>{{$product->active}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->created_at}}</td>
    <td>{{$product->updated_at}}</td>
</tr>
@endforeach

</table>

@endsection
