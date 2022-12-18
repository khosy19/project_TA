@extends('layouts.mainPesan')
    @section('content')
    <div class="card-body">
        {{-- <p>
            <a href="{{ route('storeMenu'), $menu->id_menu }}" class="btn btn-primary">Tambah</a>
            <button class="btn btn-primary" type="button" onclick="window.location='menu-add'">Tambah</button>
        </p> --}}
        <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
            <thead>
                <tr>
                    <th>No Meja</th>
                    {{-- <th>@sortablelink('nama_menu','Nama Menu')</th> --}}
                    <th>Nama Pemesan</th>
                    <th>Nama Menu</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($pemesanan) && $pemesanan->count())
                    @foreach ($pemesanan as $data)
                    <tr>
                        <td>{{ $data->nama_pemesan }}</td>
                        <td>{{ $data->nama_menu }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->sub_total }}</td>
                        <td>{{ $data->total }}</td>
                        {{-- <td>
                         <a href="{{ route('editMenu', $data->id_menu) }}" class="btn btn-primary">Edit</a>   
                        </td> --}}
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6">Tidak ada data</td>
                    </tr>
                @endif

            </tbody>
        </table>
        {{-- {{ $menu->links() }} --}}
    </div>