@extends('layouts.main')
@section('title')
    Halaman Menu
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
        <p>
            {{-- <a href="{{ route('storeMenu'), $menu->id_menu }}" class="btn btn-primary">Tambah</a> --}}
            <button class="btn btn-primary" type="button" onclick="window.location='menu-add'">Tambah</button>
        </p>
        <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    {{-- <th>@sortablelink('nama_menu','Nama Menu')</th> --}}
                    <th>Nama Menu</th>
                    <th>Nama Kategori</th>
                    <th>Harga</th>
                    <th>Status Menu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($menu) && $menu->count())
                    @foreach ($menu as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_menu }}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>@if ($data->status_menu == 1)
                            {{ 'Aktif' }}
                            @else
                            {{ 'Tidak Aktif' }}
                            @endif
                        </td>
                        <td>
                         <a href="{{ route('editMenu', $data->id_menu) }}" class="btn btn-primary">Edit</a>   
                        <a href="{{ route('hapusMenu', $data->id_menu) }}" class="btn btn-danger" type="submit">Hapus</a> 
                        </td>
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
    
  </div>
  
@endsection

