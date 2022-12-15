@extends('layouts.main')
@section('title')
    Edit Data Menu
@endsection
@section('content')

<form action="{{ route('updateMenu',$data->id_menu) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    <p>
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/menu-home'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit Menu</h3>
        </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama_karyawan">Nama Menu</label>
              <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $data->nama_menu }}">
            </div>
            <div class="form-group">
                <label>Nama Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="nama_kategori">
                  {{-- <option value ="{{ $data->id_kategori }}">{{ $data->nama_kategori }}</option> --}}
                  @foreach ($kategori as $a)    
                  <option value="{{ $a->id_kategori }}" {{ $data->id_kategori === $a->id_kategori ? 'selected': '' }}>{{ $a->nama_kategori }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_karyawan">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
              </div>
              <div class="form-group">
                <label>Status Menu</label>
                <select class="form-control select2" style="width: 100%;" name="status_menu">
                  
                  {{-- <option value selected="{{ $data->status_menu }}" disabled>{{ $status_menu }}</option> --}}
                  <option value ="1" {{ $data->status_menu === 1 ? 'selected' : '' }}>Aktif</option>
                  <option value ="2" {{ $data->status_menu === 2 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
              </div>
          </div>
            
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>

@endsection

