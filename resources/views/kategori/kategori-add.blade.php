@extends('layouts.main')
@section('title')
    Tambah Data Kategori
@endsection
@section('content')

<form action="{{ route('storeKategori') }}" method="post">
    @csrf
    <td>
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>{{ session('msg') }}</h5>
            Data Berhasil Ditambahkan
          </div>
        @endif
    </td>
    <p>
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/kategori-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Kategori</h3>
        </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Nama Kategori">
            </div>
        </div>
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

      </div>
</form>

@endsection

