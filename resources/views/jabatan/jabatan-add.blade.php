@extends('layouts.main')
@section('title')
    Tambah Data Jabatan
@endsection
@section('content')

<form action="{{ route('storeJabatan') }}" method="post">
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
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/jabatan-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Jabatan</h3>
        </div>
        <form role="form">
          <div class="card-body">
            <div class="form-group">
              <label for="nama_jabatan">Nama Jabatan</label>
              <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Masukkan Nama Jabatan">
            </div>
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
         
        </form>
      </div>
</form>

@endsection

