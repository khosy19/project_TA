@extends('layouts.main')
@section('title')
    Tambah Data User
@endsection
@section('content')

<form action="{{ route('storeUser') }}" method="post">
    @csrf
    <td>
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>{{ session('msg') }}</h5>
            Data Berhasil Ditambahkan
          </div>
        @endif
    </td>
    <p>
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/user-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah User</h3>
        </div>
          <div class="card-body">
            <div class="form-group">
                <label>Nama Karyawan</label>
                <select class="form-control select2" style="width: 100%;" name="nama_karyawan">
                  <option selected="selected">Pilih Nama Karyawan</option>
                    @foreach ($nama_karyawan as $a)  
                      <option value="{{ $a->id_karyawan }}">{{ $a->nama_karyawan }}</option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
              </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <select class="form-control select2" style="width: 100%;" name="level">
                  <option selected="selected">Pilih Level User</option>
                  <option value="admin">Admin</option>
                  <option value="kasir">Kasir</option>
                  <option value="produksi">Produksi</option>
                  <option value="meja">Meja</option>


                  {{-- <option value ="admin" {{ $data->level === 'admin' ? 'selected' : '' }}>Admin</option>
                  <option value ="kasir" {{ $data->level === 'kasir' ? 'selected' : '' }}>Kasir</option>
                  <option value ="produksi" {{ $data->level === 'produksi' ? 'selected' : '' }}>Kepala Produksi</option> --}}
                    {{-- @foreach ($level as $a)  
                      <option value="{{ $a->id_user }}">{{ $a->level }}</option>
                    @endforeach --}}
                </select>                {{-- <select class="form-control select2" style="width: 100%;" name="level">
                  <option selected="selected">Pilih Level</option>
                  @foreach ($level as $b)  
                      <option value="{{ $b->level }}">{{ $b->level }}</option>
                    @endforeach
                </select> --}}
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>

      </div>
</form>

@endsection

