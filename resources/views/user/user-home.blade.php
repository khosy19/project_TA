@extends('layouts.main')
@section('title')
    Halaman User
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
            <a href="{{ route('addUser') }}" class="btn btn-primary">Tambah</a>
        </p>
        <table class="table table-sm table-bordered table-striped" style="text-align: center" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Email</th>
                    {{-- <th>Password</th> --}}
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                @if (!empty($user) && $user->count())
                    @foreach ($user as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_karyawan }}</td>
                        <td>{{ $data->email }}</td>
                        {{-- <td>{{ $data->password }}</td> --}}
                        <td>
                            @if ($data->level == 'admin')
                                {{ 'Admin' }}
                            @elseif ($data->level == 'kasir')
                                {{ 'Kasir' }}
                            @elseif ($data->level == 'produksi')
                                {{ 'Kepala Produksi' }}
                            @else
                                {{ 'Meja' }}
                            @endif
                        </td>
                        <td>
                         <a href="{{ route('editUser', $data->id_user) }}" class="btn btn-primary">Edit</a>   
                        <a href="{{ route('hapusUser', $data->id_user) }}" class="btn btn-danger" type="submit">Hapus</a>
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

