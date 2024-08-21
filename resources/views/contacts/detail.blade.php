@extends('layout.master')

@section('judul')
Halaman Detail
@endsection


@section('content')

<div class="card" style="width: 18rem;">
    <img src="{{asset ('uploads/'.$contact->foto) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $contact->nama }}</h5>
      <p class="card-text">Alamat : {{ $contact->alamat }}</p>
      <p class="card-text">No Telepon : {{ $contact->telp }}</p>
      <p class="card-text">Deskripsi : {{ $contact->description }}</p>
      <a href="/contacts" class="btn btn-primary">Kembali Ke daftar list</a>
    </div>
  </div>

{{-- <a href="/contacts" class="btn btn-primary"> Kembali Ke daftar list</a>
<img src="{{asset ('uploads/'.$contact->foto) }}" class="image-fluid" alt="">

<h1 class="text-primary">{{ $contact->nama }}</h1>
<p>Alamat : {{ $contact->alamat }}</p>
<p>Nomor Telepon : {{ $contact->telp }}</p>
<p>Keterangan : {{ $contact->description }}</p> --}}

@endsection