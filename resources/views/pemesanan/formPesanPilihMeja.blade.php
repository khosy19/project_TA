@extends('layouts.mainPesan')
    @section('content')
    <form action="{{ route ('storePemesanan') }}" method="post">
        @csrf
        {{ method_field('PUT') }}
    {{-- <button type="button" class="btn btn-primary" onclick="window.location='/admin/pemesanan-pilihmeja'">Kembali</button> --}}
    {{-- <hr class="my-3"> --}}
    {{-- <h1>Pilih Menu Anda</h1> --}}
    
    <div class="card" style="size: 350px">
        <div class="container">
            <div class="card-header bg-success text-white text-uppercase text-center">
                <h4>Pilih Menu Anda</h4>
            </div>
            <div class="row" style="margin-bottom: 350px">
                    {{-- <div class="col-md-12">
                        <p>
                            <a class="btn-sm btn btn-danger btn-block" data-toggle="collapse"
                                href="#multiCollapseExample1" role="button"
                                aria-expanded="false" aria-controls="multiCollapseExample1">
                                <span class="fas fa-eye"></span>
                                MAKANAN
                            </a>
                        </p>
                        <div class="collapse multi-collapse"
                            id="multiCollapseExample1">
                            <div class="card card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Pesan Berapa</th>
                                                <th>Item</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($menu as $dataMenu)    
                                            <td>
                                                <input type="hidden" class="form-control" name="jumlah">
                                                {{-- value="22" --}}
                                                {{-- <input type="number" value="0" name="jumlah" id="jumlah" class="form-control">
                                                <select hidden name="status" class="form-control">
                                                <option selected value="0">{{ $dataMenu->jumlah }}</option>
                                                </select>
                                                <input type="hidden" name="no_meja" value="2">
                                                <input type="hidden" name="tables[]" value="2">
                                            </td>
                                            <td>{{ $dataMenu->nama_menu }}</td>
                                            <td>{{ $dataMenu->harga }}</td>
                                            @endforeach                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}} 
                        {{-- ===================pilih menu=========================== --}}
                        
                <div class="col-md-12">
                    <p>
                        <a class="btn-sm btn btn-danger btn-block" data-toggle="collapse"
                            href="#multiCollapseExample2" role="button"
                            aria-expanded="false" aria-controls="multiCollapseExample2">
                            <span class="fas fa-eye"></span>
                            KLIK UNTUK LIHAT MENU
                            {{-- {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!} --}}
                        </a>
                    </p>
                    <div class="collapse multi-collapse"
                        id="multiCollapseExample2">
                        <div class="card card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Pesan Berapa</th>
                                            <th>Item</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>                     
                                    @foreach ($menu as $dataMenu)
                                    <tr>
                                    <td>
                                        <input type="hidden" class="form-control" name="foods[]" value="22">
                                        <input type="number" value="0" name="jumlah" id="jumlah" class="form-control">
                                        <select hidden name="status" class="form-control">
                                        <option selected value="0">Jumlah Menu</option>
                                        </select>
                                        <input type="hidden" name="no_meja" value="2">
                                        <input type="hidden" name="tables[]" value="2">
                                    </td>
                                        <td>{{ $dataMenu->nama_menu }}</td>
                                        <td>{{ $dataMenu->harga }}</td>
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
                                <div class="col-md-12" style="background-color: #fff;">
                                    <div class="form-group mb-3 bg-success text-center">
                                        <label for="name">Nama Pemesan</label>
                                        <input autofocus type="text" class="form-control" name="nama_pemesan" placeholder="Isi Nama Pemesan">
                                        <span class="text-danger error-text name_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3" style="background-color: #fff;">
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <i class="fa fa-gift"></i>
                                        Pesan Sekarang
                                    </button>
                                </div>
                                </form>
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
