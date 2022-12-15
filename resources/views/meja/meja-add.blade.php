@extends('layouts.main')
@section('title')
    Tambah Data Meja
@endsection
@section('content')

<form action="{{ route('storeMeja') }}" method="post">
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
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/meja-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Meja</h3>
        </div>
        <form role="form">
          <div class="card-body">
            <div class="form-group">
              <label for="ket_meja">Keterangan Meja</label>
              <input type="text" class="form-control" id="ket_meja" name="ket_meja" placeholder="Masukkan Keterangan Meja">
            </div>
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
         
        </form>
      </div>
</form>

@endsection

