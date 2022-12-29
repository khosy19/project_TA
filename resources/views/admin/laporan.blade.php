@extends('layouts.main')
@section('title')
    Halaman Laporan
@endsection
@section('content')
<div class="card">
<div class="card-body">
       <h4>Laporan Penjualan</h4>
       <br>
       <p>Berikut Merupakan laporan penjualan</p>
       <p>
        <a href="{{ route('cetakPenjualan') }}" class="btn btn-primary" target="_blank">CETAK</a>
       </p>
       <br>
       <h4>Laporan Menu Terlaris</h4>
       <br>
       <p>Berikut Merupakan laporan menu terfavorit</p>
       <p>
        <a href="{{ route('cetakMenuTerjual') }}" class="btn btn-primary" target="_blank">CETAK</a>
       </p>
       <br>
       <h4>Laporan Jumlah Transaksi</h4>
       <br>
       <p>Berikut Merupakan laporan jumlah transaksi</p>
       <p>
        <a href="{{ route('cetakTransaksi') }}" class="btn btn-primary" target="_blank">CETAK</a>
       </p>
    </div>
    
  </div>
  
@endsection

