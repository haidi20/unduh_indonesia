@extends('_layouts.default')

@section('utama')
<div class="container">
  <div class="row">
    {{-- <div class="col-md-3 col-md-offset-5 login">
      <h2>Login</h2>
    </div> --}}
    <div class="col-md-4 col-md-offset-4 login">
      <h2 align="center">Login</h2>
      <form action="{{route('loginn')}}" method="post">
        {{ csrf_field() }}
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <button class="btn btn-success btn-md">Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
