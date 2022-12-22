@extends('layouts.main')
@section('title')
    Halaman Order
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
        <a href="{{ route('formPilihMeja') }}" class="btn btn-info">Scan QR Bayar</a>
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
                    <th>ID Pemesanan</th>
                    <th>Jumlah</th>
                    <th>Sub Total</th>
                    <th>Total</th>
                    {{-- <th>Status Pesanan</th> --}}
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($order) && $order->count())
                    @foreach ($order as $data)
                    <tr>
                        <td>{{ $data->id_pemesanan }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->subtotal }}</td>
                        <td>{{ $data->total }}</td>
                        <td>
                            <a href="{{ route('cetakOrder'), $data->id_order }}" class="btn btn-primary" target="_blank">Cetak</a>
                        </td>
                        {{-- <td>{{ $data->status_pemesanan }}</td> --}}
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

