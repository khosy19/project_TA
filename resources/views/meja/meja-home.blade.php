@extends('layouts.main')
@section('title')
    Halaman Meja
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
          <a href="{{ route('addMeja') }}" class="btn btn-primary">Tambah</a>
        </p>
        <table class="table table-sm table-bordered table-striped" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    {{-- <th>No Meja</th> --}}
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($showMeja) && $showMeja->count())
                    @foreach ($showMeja as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        {{-- <td>{{ $data->no_meja }}</td> --}}
                        <td>{{ $data->ket_meja }}</td>
                        <td>
                        <a href="{{ route('editMeja', $data->no_meja) }}" class="btn btn-primary">Edit</a>                            
                        <a href="{{ route('hapusMeja', $data->no_meja) }}" class="btn btn-danger">Hapus</a>                            
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
    </div>
  </div>
  
@endsection

