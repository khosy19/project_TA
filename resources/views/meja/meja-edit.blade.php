@extends('layouts.main')
@section('title')
    Edit Meja
@endsection
@section('content')

<form action="{{ route('updateMeja',$meja->no_meja) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <table>
        <p>
            <button type="button" class="btn btn-primary" onclick="window.location='/admin/meja-home'">Kembali</button>
        </p>
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Meja</h3>
            </div>
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                    <label for="no_meja">No Meja</label>
                    <input type="text" class="form-control" id="no_meja" name="no_meja" value="{{ $meja->no_meja }}" readonly style="cursor: not-allowed">
                  </div>
                <div class="form-group">
                  <label for="ket_meja">Keterangan Meja</label>
                  <input type="text" class="form-control" id="ket_meja" name="ket_meja" value="{{ $meja->ket_meja }}">
                </div>
                  <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
    </table>
</form>

@endsection

