@extends('layout.master')

@section('judul')
Halaman Contact
@endsection

@section('content')

<a href="{{ route('home') }}" class="btn btn-primary"> Kembali Ke Home</a>

<form method="POST" action="/contacts" enctype="multipart/form-data">

    {{-- menampilkan validasi inputan --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@csrf

    <div class="mb-3">
        <label  >Nama</label>
        <input type="text" name="nama"  class="form-control" placeholder="masukan nama lengkap">
    </div>
    <div class="mb-3">
        <label >Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="masukan alamat lengkap">
    </div>
    <div class="mb-3">
        <label >Telp</label>
        <input type="text" name="telp" class="form-control" placeholder="masukan nomor telp">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label >Foto</label>
        <input type="file" name="foto" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    


@endsection