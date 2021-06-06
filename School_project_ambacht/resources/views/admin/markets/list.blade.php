@extends('layouts.master')

@section('title')
			Markets Page
@endsection()

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> All Markets</h4>
              </div>

            <div class="row">
                <div class="col-lg-12 margin-tb">

                    <div class="pull-right">
                        <a href="/admin/market/create" class="btn btn-success"> Create New Market</a>
                    </div>
                </div>
            </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table id= "datatable" class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>user_id</th>
                      <th>name</th>
                      <th>location</th>
                      <th>photo</th>
                      <th>active</th>
                      <th>description</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach($markets as $market)
                       <tr>
                        <td>{{$market['id']}}</td>
                        <td><a href="/profile/{{$market['user_id']}}">
                            {{ $market['user_id'] }}{{-- User::FindorFail($market['user_id'])->name --}}
                        </td>
                        <td><a href="/market/{{$market['id']}}">{{$market['name']}}</a></td>
                        <td>{{$market['location']}}</td>
                        <td>{{$market['photo']}}</td>
                        <td>{{$market['active']}}</td>
                        <td>{{$market['description']}}</td>

                        <td>
                          <a href="/admin/market/edit/{{ $market->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                          <!-- we have to add form method because without form method it will show error-->
                          <form action="/admin/market/delete/{{ $market->id }}" method="post">
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
