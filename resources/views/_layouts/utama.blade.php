@extends('_layouts.default')

@section('utama')
  @if (session()->get('navbar') == 'admin')
    @include('_layouts.navbar-admin')
  @elseif(session()->get('navbar') == 'landingpage')
    @include('_layouts.navbar')
  @endif
  @yield('tubuh')
@endsection
