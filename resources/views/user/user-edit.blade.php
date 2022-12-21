@extends('layouts.main')
@section('title')
    Edit Data User
@endsection
@section('content')

<form action="{{ route('updateUser', $data->id_user) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    <p>
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/user-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit User</h3>
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
                <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}" placeholder="Masukkan Username">
              </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ bcrypt($data->password) }}" placeholder="Masukkan Password">
            </div>
            <div class="form-group">
                <label>Level</label>
                <select class="form-control select2" style="width: 100%;" name="level" value="{{ $data->level }}">
                  <option selected="selected">Pilih Level</option>
                   <option value ="admin" {{ $data->level === 'admin' ? 'selected' : '' }}>Admin</option>
                  <option value ="kasir" {{ $data->level === 'kasir' ? 'selected' : '' }}>Kasir</option>
                  <option value ="produksi" {{ $data->level === 'produksi' ? 'selected' : '' }}>Kepala Produksi</option>
                  <option value ="meja" {{ $data->level === 'meja' ? 'selected' : '' }}>Meja</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>

      </div>
</form>

@endsection

