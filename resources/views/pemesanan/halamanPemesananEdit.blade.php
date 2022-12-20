@extends('layouts.main')
@section('title')
    Edit Status Pesanan
@endsection
@section('content')

<form action="{{ route('pemesananUpdate',$data->id_pemesanan) }}" method="POST">
    @csrf
    {{-- @method('PUT') --}}
    {{ method_field('PUT') }}
    <table>
        <p>
            <button type="button" class="btn btn-primary" onclick="window.location='/admin/halaman-pemesanan'">Kembali</button>
        </p>
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Edit Pesanan</h3>
            </div>
            <form role="form">
            <div class="card-body">
                    <div class="form-group">
                        <label for="nama_karyawan">No Meja</label>
                        <input type="text" class="form-control" id="no_meja" name="no_meja" value="{{ $data->no_meja }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama_karyawan">Nama Menu</label>
                        <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $data->nama_menu }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama_karyawan">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $data->jumlah }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Status Pesanan</label>
                        <select class="form-control select2" style="width: 100%;" name="status_pemesanan">
                            <option value ="1" {{ $data->status_pemesanan === 1 ? 'selected' : '' }}>Belum Dibayar</option>
                            <option value ="2" {{ $data->status_pemesanan === 2 ? 'selected' : '' }}>Sudah Dibayar</option>
                          {{-- <option value selected="{{ $data->id_pemesanan }}">{{ $data->status_pemesanan }}</option>
                        @foreach ($status_pemesanan as $a)
                            <option value="{{ $a->id_pemesanan }}">{{ $a->status_pemesanan }}</option>
                        @endforeach --}}
                        </select>
                  <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
    </table>
</form>

@endsection

