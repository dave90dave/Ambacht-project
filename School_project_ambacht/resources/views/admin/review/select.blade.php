@extends('layouts.master')

@section('title')
			Markets Page
@endsection()

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Review</h4>
              </div>

              <div class="card-body">
               <a href="/admin/review/products">Ga naar review products</a><br>
               <a href="/admin/review/markets">Ga naar review markets</a>
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
