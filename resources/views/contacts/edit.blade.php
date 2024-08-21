@extends('layout.master')

@section('judul')
Halaman Contact
@endsection

@section('content')

<a href="{{ route('home') }}" class="btn btn-primary"> Kembali Ke Home</a>

<form method="POST" action="{{ route('contacts.update', $contact->id) }}" enctype="multipart/form-data">

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
@method('PUT')

    <div class="mb-3">
        <label  >Nama</label>
        <input type="text" name="nama"  class="form-control" value="{{ $contact->nama }}">
    </div>
    <div class="mb-3">
        <label >Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{ $contact->alamat }}"">
    </div>
    <div class="mb-3">
        <label >Telp</label>
        <input type="text" name="telp" class="form-control" value="{{ $contact->telp }}"">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $contact->description }}</textarea>
    </div>
    <div class="mb-3">
        <label >Foto</label>
        <input type="file" name="foto" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
</div>

@endsection