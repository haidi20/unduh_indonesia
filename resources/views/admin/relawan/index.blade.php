@extends('_layouts.utama')

@section('tubuh')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Relawan</h2>
      </div>
      <div class="col-md-6">
      </div>
    </div>
    <hr>
    @include('admin.relawan.table')
  </div>
@endsection
