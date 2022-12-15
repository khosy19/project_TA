@extends('layouts.main')
@section('title')
    Tambah Data Menu
@endsection
@section('content')

<form action="{{ route('storeMenu') }}" method="post">
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
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/menu-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Menu</h3>
        </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama_karyawan">Nama Menu</label>
              <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Masukkan Nama Menu">
            </div>
            <div class="form-group">
                <label>Nama Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="nama_kategori">
                  <option selected="selected">--Nama Kategori--</option>
                  @foreach ($kategori as $a)    
                  <option value="{{ $a->id_kategori }}">{{ $a->nama_kategori }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_karyawan">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
              </div>
              <div class="form-group">
                  <label>Status Menu</label>
                  <select class="form-control select2" style="width: 100%;" name="status_menu">
                    <option selected="selected">--Status Menu--</option>
                    <option value="1">Aktif</option>
                    <option value="2">Tidak Aktif</option>
                  </select>
                </div>
          </div>
            
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>

@endsection

