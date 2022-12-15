@extends('layouts.main')
@section('title')
    Edit Karyawan
@endsection
@section('content')

<form action="{{ route('update',$data->id_karyawan) }}" method="POST">
    @csrf
    {{-- @method('PUT') --}}
    {{ method_field('PUT') }}
    <table>
        <p>
            <button type="button" class="btn btn-primary" onclick="window.location='/admin/karyawan-home'">Kembali</button>
        </p>
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Karyawan</h3>
            </div>
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                    <label for="nama_karyawan">Nama Karyawan</label>
                    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="{{ $data->nama_karyawan }}">
                  </div>
                  <label for="kelamin">Jenis Kelamin</label><br>
                    <input type="radio" id="laki" name="kelamin" value="Laki-Laki">
                    <label for="html">Laki-Laki</label><br>
                    <input type="radio" id="css" name="kelamin" value="Perempuan">
                    <label for="css">Perempuan</label><br>
                
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control select2" style="width: 100%;" name="jabatan">
                          <option value selected="{{ $data->id_jabatan }}">{{ $data->nama_jabatan }}</option>
                        @foreach ($jabatan as $a)
                            <option value="{{ $a->id_jabatan }}">{{ $a->nama_jabatan }}</option>
                        @endforeach
                        </select>
                  <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
    </table>
</form>

@endsection

