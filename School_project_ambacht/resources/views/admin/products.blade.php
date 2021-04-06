@extends('layouts.master')

@section('title')
			Products Page
@endsection()

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> All Products</h4>
              </div>

            <div class="row">
                <div class="col-lg-12 margin-tb">

                    <div class="pull-right">
                        <a class="btn btn-succes" > Create New Product</a>
                    </div>
                </div>
            </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table id= "datatable" class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>category_id</th>
                      <th>name</th>
                      <th>price</th>
                      <th>per_unit</th>
                      <th>amount</th>
                      <th>photo</th>
                      <th>active</th>
                      <th>description</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                       <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['category_id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['per_unit']}}</td>
                        <td>{{$product['amount']}}</td>
                        <td>{{$product['photo']}}</td>
                        <td>{{$product['active']}}</td>
                        <td>{{$product['description']}}</td>

                        <td>
                          <a href="/role-products-edit/{{ $product->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                          <!-- we have to add form method because without form method it will show error-->
                          <form action="/role-products-delete/{{ $product->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button>
<!-- <a href="/role-delete/" class="btn btn-danger">DELETE</a> it is not working or we are not submitting it-->
                          </form>
                        </td>
                       </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection()

@section('scripts')
<script>
$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
@endsection()
