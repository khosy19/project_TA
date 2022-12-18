@extends('layouts.main')
@section('title')
    Tambah Data Pemesanan
@endsection
@section('content')

<form action="{{ route('halamanPemesananSudahBayar') }}" method="post">
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
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/halaman-pemesanan'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Pemesanan</h3>
        </div>
    <div class="card-body">
            <div class="form-group">
              <label for="no_meja">No Meja</label>
              <input type="text" class="form-control" id="no_meja" name="no_meja" placeholder="Masukkan No Meja">
            </div>
            <div class="form-group">
                <label for="nama_menu">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Masukkan Nama Menu">
              </div>
              <div class="form-group">
                <label for="no_meja">Jumlah</label>
                <input type="text" class="form-control" id="Jumlah" name="Jumlah" placeholder="Masukkan Jumlah">
              </div>
              <div class="form-group">
                <label for="sub_total">Sub Total</label>
                <input type="text" class="form-control" id="sub_total" name="sub_total" placeholder="Masukkan Sub Total">
              </div>
              <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" placeholder="Masukkan Total">
              </div>
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

      </div>
    </div>
</form>

@endsection

