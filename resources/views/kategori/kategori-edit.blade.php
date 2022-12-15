@extends('layouts.main')
@section('title')
    Edit Kategori
@endsection
@section('content')

<form action="{{ route('updateKategori',$data->id_kategori) }}" method="POST">
    @csrf
    {{-- @method('PUT') --}}
    {{ method_field('PUT') }}
    <table>
        <p>
            <button type="button" class="btn btn-primary" onclick="window.location='/admin/kategori-home'">Kembali</button>
        </p>
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Kategori</h3>
            </div>
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $data->nama_kategori }}">
                  </div>
                  <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
    </table>
</form>

@endsection

