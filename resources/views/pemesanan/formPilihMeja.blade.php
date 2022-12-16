@extends('layouts.main')
@section('title')
    Pilih Meja Untuk Form Pemesanan
@endsection
@section('content')
@if (session('msg'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Data Berhasil Diupdate!</h5>
        </div>
    @elseif (session('hapus'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Data Berhasil Dihapus!</h5>
      </div>

@endif
<div class="card">
    <div class="card-header">
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
<div class="card-body">
    <div class="content">
        <div class="container-fluid">
        <p>
            <a href="{{ route('formPemesanan') }}" class="btn btn-primary">Kembali</a>
        </p>
        {{-- ===================================BATAS============================================= --}}
        
        {{-- ===================================BATAS============================================= --}}
        <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Meja</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($pilihMeja) && $pilihMeja->count())
                    @foreach ($pilihMeja as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->no_meja }}</td>
                        <td>{{ $data->ket_meja }}</td>
                            {{-- @if ( $data->ket_meja == 'Sebelah Parkiran')
                            {{ 'Tersedia' }}
                            @else
                            {{ 'Habis' }}
                            @endif --}}
                        <td>
                        <a href="{{ route('formPemesanan') }}" class="btn btn-info">Pesan</a>   
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6">Tidak ada data</td>
                    </tr>
                @endif
                {{-- ==============================BATAS======================================= --}}
                
            </tbody>
        </table>
        {{-- =========================================== --}}
        
    </div>
    
  </div>
  
@endsection

