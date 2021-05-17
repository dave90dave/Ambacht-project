@extends('layouts.master')

@section('title')
			Products Page
@endsection()

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Review Products</h4>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table id= "datatable" class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>category</th>
                      <th>name</th>
                      <th>price</th>
                      <th>per_unit</th>
                      <th>amount</th>
                      <th>photo</th>
                      <th>active</th>
                      <th>description</th>
                      <th>Approve</th>
                      <th>Refuse</th>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                       <tr>
                        <td>{{$product['id']}}</td>
                        <td><a href="/category/{{$product['category_id']}}">
                            {{-- Category::FindorFail($product['category_id'])->name --}}
                        </td>
                        <td><a href="/product/{{$product['id']}}">{{$product['name']}}</a></td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['per_unit']}}</td>
                        <td>{{$product['amount']}}</td>
                        <td>{{$product['photo']}}</td>
                        <td>{{$product['active']}}</td>
                        <td>{{$product['description']}}</td>

                        <td>
                          <a href="/admin/review/product/approve/{{ $product->id }}" class="btn btn-success">Approve</a>
                        </td>
                        <td>
                            <a href="/admin/review/product/refuse/{{ $product->id }}" class="btn btn-danger">Refuse</a>
                        </td>
                       </tr>
                       @endforeach
                    </tbody>
                  </table>
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
