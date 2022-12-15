@extends('layouts.main')
@section('title')
    Edit Jabatan
@endsection
@section('content')

<form action="{{ route('updateJabatan',$jabatan->id_jabatan) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    {{-- @method('PUT') --}}
    <table>
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
                    <label for="nama_jabatan">ID Jabatan</label>
                    <input type="text" class="form-control" id="id_jabatan" name="id_jabatan" value="{{ $jabatan->id_jabatan }}" readonly style="cursor: not-allowed">
                  </div>
                <div class="form-group">
                  <label for="nama_jabatan">Nama Jabatan</label>
                  <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}">
                </div>
                  <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
    </table>
</form>

@endsection

