@extends('layouts.mainPesan')
    @section('content')
    <form action="{{ route ('halamanCheckout') }}" method="post">
        @csrf
                {{-- {{ method_field('PUT') }} --}}
            {{-- <button type="button" class="btn btn-primary" onclick="window.location='/admin/pemesanan-pilihmeja'">Kembali</button> --}}
            {{-- <hr class="my-3"> --}}
            {{-- <h1>Pilih Menu Anda</h1> --}}
            <td>
                @if (session('msg'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>{{ session('msg') }}</h5>
                    Data Berhasil Ditambahkan
                </div>
                @endif
            </td>
            <div class="card" style="size: 350px">
                <div class="container">
                    <div class="card-header bg-success text-white text-uppercase text-center">
                        <h4>Pilih Menu Anda</h4>
                    </div>
                    <br>
                        <div class="card-body">
                            <div class="form-group">
                            <label for="nama_karyawan">No Meja</label>
                            <input type="text" class="form-control" id="no_meja" name="no_meja">
                            </div>
                            <div class="form-group">
                                <label for="nama_karyawan">Nama Pemesan</label>
                                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="text" class="form-control" id="total" name="total" disabled>
                            </div>
                    </div>
                    
                    <div class="row" style="margin-bottom: 350px"> 
                                {{-- ===================PESAN MENU=========================== --}}
                                
                        <div class="col-md-12">
                            <p>
                                <a class="btn-sm btn btn-danger btn-block" data-toggle="collapse"
                                    href="#multiCollapseExample2" role="button"
                                    aria-expanded="false" aria-controls="multiCollapseExample2">
                                    <span class="fas fa-eye"></span>
                                    KLIK UNTUK LIHAT MENU
                                </a>
                            </p>
                            <div class="collapse multi-collapse"
                                id="multiCollapseExample2">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Menu</th>
                                                    <th>Harga</th>
                                                    <th>Pesan Berapa</th>
                                                </tr>
                                            </thead>
                                            <tbody>                     
                                            @foreach ($menu as $dataMenu)
                                            <tr>
                                                <td>{{ $dataMenu->nama_menu }}</td>
                                                <td>{{ $dataMenu->harga }}</td>
                                                <td>
                                                    {{-- <div class="number">
                                                        <span class="minus">-</span>
                                                        <input type="number" value="0" class="form-control"/>
                                                        <span class="plus">+</span>
                                                    </div> --}}
                                                    <input type="number" value="0" name="jumlah[]" id="jumlah" class="form-control">
                                                    <select hidden name="select" class="form-control">
                                                    <option selected value="0">Jumlah Menu</option>
                                                    </select>
                                                </td>
                                            </tr>    
                                            @endforeach
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                            <footer id="footer">
                                <!--Footer-->
                            <div class="fixed-bottom bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 mb-3" style="background-color: #fff;">
                                            <button type="submit" class="btn btn-danger btn-block">
                                                <i class="fa fa-gift"></i>
                                                Pesan Sekarang
                                            </button>
                                        </div>
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
                </div>
            </div>
</form>
@endsection
