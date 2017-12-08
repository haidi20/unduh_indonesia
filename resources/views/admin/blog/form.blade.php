@extends('_layouts.utama')

@section('tubuh')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form action="{{$action}}" method="post">
          <input type="hidden" name="_method" value="{{$method}}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{old('judul')}}">
          </div>
          <div class="form-group">
            <label for="isi">Isi</label>
            <textarea rows="5" name="isi" id="isi" class="form-control">{{old('isi')}}</textarea>
          </div>
          <button class="btn btn-success btn-md" >Kirim</button>
        </form>
      </div>
    </div>
    @include('admin.blog.table')
  </div>
@endsection
