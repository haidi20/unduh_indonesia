@extends('_layouts.utama')

@section('tubuh')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Blog</h2>
      </div>
      <div class="col-md-6 text-right" style="margin-top:20px">
        <a href="{{route('blog.create')}}" class="btn btn-success btn-lg">
          Buat
        </a>
      </div>
    </div>
    <hr>
    @include('admin.blog.table')
  </div>
@endsection
