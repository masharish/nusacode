@extends('layout.master')

@section('judul')
Halaman Contact
@endsection

@section('content')

<a href="{{ route('home') }}" class="btn btn-primary"> Kembali Ke Home</a>

<div class="container-fluid p-5 border">
  <h3>Berikut ini adalah daftar kontak</h3> 
  <a href="/contacts/create" class="btn btn-primary">Tambah Kontak</a>

  @session('success')
  <div class="alert alert-success" role="alert">
    {{ $value }}

  </div>
      
  @endsession

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Alamat</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($daftar_contact as $contact)         
        
      <tr>
        <th scope="row">{{ $contact->id }}</th>
        <td>{{ $contact->nama }}</td>
        <td>{{ $contact->alamat }}</td>
        <td>{{ $contact->description }}</td>
        <td>
            <a href="/contacts/{{ $contact->id }}" class="btn btn-sm btn-info">Detail</a>
            <a href="/contacts/{{ $contact->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
            <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
          </form>
            {{-- <a href="#" class="btn btn-sm btn-danger">Delete</a> --}}
            
        </td>
      </tr>

      @endforeach
      
    </tbody>
  </table>

</div>

@endsection
  



