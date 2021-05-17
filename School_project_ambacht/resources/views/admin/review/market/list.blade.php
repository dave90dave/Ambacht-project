@extends('layouts.master')

@section('title')
			Markets Page
@endsection()

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Review Markets</h4>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table id= "datatable" class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>name</th>
                      <th>location</th>
                      <th>photo</th>
                      <th>description</th>
                      <th>Approve</th>
                      <th>Refuse</th>
                    </thead>
                    <tbody>
                    @foreach($markets as $market)
                       <tr>
                        <td>{{$market['id']}}</td>
                        <td><a href="/market/{{$market['id']}}">{{$market['name']}}</a></td>
                        <td>{{$market['location']}}</td>
                        <td>{{$market['photo']}}</td>
                        <td>{{$market['description']}}</td>

                        <td>
                          <a href="/admin/review/market/approve/{{ $market->id }}" class="btn btn-success">Approve</a>
                        </td>
                        <td>
                            <a href="/admin/review/market/refuse/{{ $market->id }}" class="btn btn-danger">Refuse</a>
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
