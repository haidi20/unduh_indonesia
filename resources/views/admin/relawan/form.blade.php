@extends('_layouts.utama')

@section('tubuh')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Form Relawan</h2>
      </div>
      <div class="col-md-6 text-right">
        <a href="{{route('relawan.index')}}" class="btn btn-success btn-md" style="margin-top:20px">Kembali</a>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form action="{{$action}}" method="post">
          <input type="hidden" name="_method" value="{{$method}}">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" value="{{old('nama')}}">
          </div>
          <div class="form-group">
            <label for="hp">Nomor HP</label>
            <input type="text" class="form-control" id="hp" value="{{old('hp')}}">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
