@extends('layouts.main')
@section('title')
    Halaman Jabatan
@endsection
@section('content')
@if (session('msg'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Data Berhasil Diupdate!</h5>
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
          <a href="{{ route('addJabatan') }}" class="btn btn-primary">Tambah</a>
            {{-- <button class="btn btn-primary" type="button" onclick="window.location='jabatan-add'" >Tambah</button> --}}
        </p>
        {{-- <p>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
        </p> --}}
        {{-- sebelumnya disini notif --}}
        <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($showJabatan) && $showJabatan->count())
                    @foreach ($showJabatan as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_jabatan }}</td>
                        <td>
                        <a href="{{ route('editJabatan', $data->id_jabatan) }}" class="btn btn-primary">Edit</a>                            
                        <a href="{{ route('hapusJabatan', $data->id_jabatan) }}" class="btn btn-danger">Hapus</a>                            
                        {{-- <button class="btn btn-info" type="button" onclick="window.location='/admin/jabatan-edit/{{ $data->id_jabatan }}'">Edit</button>
                        <form action="/admin/jabatan-hapus/{{ $data->id_jabatan }}" method="post" style="display: inline;" onsubmit="return hapusData()" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                            <script>
                                function hapusData() {
                                    msg = confirm('Anda yakin menghapus data ini?');
                                    if (msg)
                                        return true; else return false;
                                }
                              </script>
                        </form> --}}
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
    {{-- {{ $showJabatan->links() }} --}}
  </div>
  
@endsection

