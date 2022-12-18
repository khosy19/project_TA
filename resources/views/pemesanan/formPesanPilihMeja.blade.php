@extends('layouts.mainPesan')
    @section('content')
    <form action="" method="post">
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
                        {{-- ===================MINUMAN=========================== --}}
                        
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
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
