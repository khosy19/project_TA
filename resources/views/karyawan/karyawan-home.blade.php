@extends('layouts.main')
@section('title')
    Halaman Karyawan
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
            <a href="{{ route('addKaryawan') }}" class="btn btn-primary">Tambah</a>
        </p>
        {{-- //cari --}}
        {{-- <form method="get">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">
                    Cari Data :
                </label>
                <input type="text" name="cari" id="cari" class="form-control" placeholder="Masukkan Nama" autofocus="true" value="{{ $cari }}">
            </div>
        </form> --}}
        {{-- sebelumnya disini notif --}}
        <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- @php
                    $nomor = 1 + (($data->currentPage()-1)* $showKaryawan->perPage());
                @endphp --}}
                @if (!empty($karyawan) && $karyawan->count())
                    @foreach ($karyawan as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_karyawan }}</td>
                        <td>{{ $data->kelamin }}</td>
                        <td>{{ $data->nama_jabatan }}</td>

                        <td>
                         <a href="{{ route('edit', $data->id_karyawan) }}" class="btn btn-primary">Edit</a>   
                        {{-- <button class="btn btn-info" type="button" onclick="window.location='/karyawan/karyawan-edit/{{ $data->id_karyawan }}'">Edit</button> --}}
                        <a href="{{ route('hapus', $data->id_karyawan) }}" class="btn btn-danger" type="submit">Hapus</a>
                        {{-- <form action="{{ 'hapus',$data->id_karyawan }}" method="post" style="display: inline;" onsubmit="return hapus()" >
                            @csrf
                            @method('DELETE')
                            {{-- <button class="btn btn-danger" type="submit">Hapus</button> --}}
                            {{-- <script>
                                function hapus() {
                                    hapus = confirm('Anda yakin menghapus data ini?');
                                    if (hapus)
                                        return true; else return false;
                                }
                              </script> --}}
                        {{-- </form> --}} 
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
        {{-- {{ $karyawan->links() }} --}}
    </div>
    
  </div>
  
@endsection

