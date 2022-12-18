@extends('layouts.main')
@section('title')
    Halaman Pemesanan
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
            <a href="{{ route('pemesananAdd') }}" class="btn btn-danger">Scan Pesanan</a>
            <a href="{{ route('formPilihMeja') }}" class="btn btn-warning">Tambah Pesanan</a>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <h5 class="title">Filter Berdasarkan Status Pesanan</h5>
                <hr class="my-3">
                <ul class="nav nav-pills card-header-pills autofocus">
                    <li class="nav-item">
                        <a
                            href="{{ route('halamanPemesanan') }}"
                            class="nav-link"
                        >
                            Pesanan Belum Dibayar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="{{ route('halamanPemesananSudahBayar') }}"
                            class="nav-link"
                        >
                            Pesanan Sudah Dibayar
                        </a>
                    </li>
            
        </ul>
    </div>
</div>
</div>

<div class="card-body">
    <div class="content">
        <div class="container-fluid">
        {{-- ===================================BATAS============================================= --}}
        
        {{-- ===================================BATAS============================================= --}}
        <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Meja</th>
                    <th>Nama Menu</th>
                    <th>Jumlah</th>
                    <th>Status Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($pemesanan) && $pemesanan->count())
                    @foreach ($pemesanan as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->no_meja }}</td>
                        <td>{{ $data->nama_menu}}</td>
                        <td>{{ $data->jumlah }}</td>
                        
                        <td>
                            @if ( $data->status_pemesanan == 1)
                            {{ 'Belum Dibayar' }}
                            @else
                            {{ 'Sudah Dibayar' }}
                            @endif
                        </td>

                        <td>

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

