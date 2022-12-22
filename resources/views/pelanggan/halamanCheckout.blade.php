@extends('layouts.mainPesan')
    @section('content')
    <form action="{{ route('storePelanggan',$data->id_pemesanan) }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        {{ method_field('PUT') }}
    <div class="card-body">
        {{-- <p>
            <a href="{{ route('storeMenu'), $menu->id_menu }}" class="btn btn-primary">Tambah</a>
            <button class="btn btn-primary" type="button" onclick="window.location='menu-add'">Tambah</button>
        </p> --}}
        <div class="card" style="size: 350px">
            <div class="container">
                <div class="card-header bg-success text-white text-uppercase text-center">
                    <h4>Pesanan Anda</h4>
                </div>
                    <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
                        <thead>
                            <tr>
                                <th>No Meja</th>
                                <th>Nama Pemesan</th>
                                <th>Nama Menu</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->nama_pemesan }}</td>
                                <td>{{ $data->nama_menu }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->sub_total }}</td>
                                <td>{{ $data->total }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <footer id="footer">
                    <!--Footer-->
                <div class="fixed-bottom bg-white">
                    <div class="container">
                            <div class="tab">
                                <li class="tab-item different">
                                    <a href="https://jagoantechno.com/angloresto/status-orderan-pelanggan/no-meja/2" class="item-link"
                                        onclick="select(this)" href="/">
                                        <i class="fa fa-home"></i>
                                        Orderan Saya
                                    </a>
                                </li>
                                <li class="tab-item">
                                    <a href="https://jagoantechno.com/angloresto/orderan-pelanggan/no_meja/2" class="item-link"
                                        onclick="select(this)" href="/">
                                        <i class="fa fa-cutlery"></i>
                                        Menu
                                    </a>
                                </li>
                                <li class="tab-item">
                                    <a href="/admin/pemesanan-pilihmeja" class="item-link"
                                        onclick="/admin/pemesanan-pilihmeja" href="/">
                                        <i class="fa fa-home"></i>
                                        Kembali
                                    </a>
                                </li>
                            </div>
                
                        </div>
                    </div>
                </div>
                </footer>
            </div>
        </div>
    </form>