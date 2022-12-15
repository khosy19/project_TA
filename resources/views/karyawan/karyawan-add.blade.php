@extends('layouts.main')
@section('title')
    Tambah Data Karyawan
@endsection
@section('content')

<form action="{{ route('saveKaryawan') }}" method="post">
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
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/karyawan-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Karyawan</h3>
        </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama_karyawan">Nama Karyawan</label>
              <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Masukkan Nama Karyawan">
            </div>
            <label for="kelamin">Jenis Kelamin</label><br>
            <input type="radio" id="laki" name="kelamin" value="Laki-Laki">
            <label for="html">Laki-Laki</label><br>
            <input type="radio" id="css" name="kelamin" value="Perempuan">
            <label for="css">Perempuan</label><br>
            {{-- <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">JavaScript</label> --}}
            {{-- <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="laki" name="kelamin" value="Laki-Laki">
                <label for="customRadio1" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="perempuan" name="kelamin" value="Perempuan">
                <label for="customRadio2" class="custom-control-label">Perempuan</label>
              </div>
            </div> --}}
            {{-- <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <input type="text" class="form-control" id="kelamin" name="kelamin" placeholder="Masukkan jenis klaminn">
            </div> --}}
            <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control select2" style="width: 100%;" name="jabatan">
                  <option selected="selected">Jabatan</option>
                  @foreach ($jabatan as $a)
                      
                  <option value="{{ $a->id_jabatan }}">{{ $a->nama_jabatan }}</option>
                  @endforeach
                </select>
              </div>
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

      </div>
</form>

@endsection

