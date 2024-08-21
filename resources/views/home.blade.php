@extends('layout.master')

@section('judul')
Halaman Home Page
@endsection
  
@section('content')
  <div class="row">
    <div class="col-sm-4">
      <a href="{{ route('layanan') }}"><h3>Layanan</h3></a> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <a href="{{ route('tentang') }}"><h3>Tentang Kami</h3></a> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <a href="/contacts"><h3>Daftar Contact</h3></a>        
      <p>Silahkan isi daftar kontak berikut ini</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

@endsection
