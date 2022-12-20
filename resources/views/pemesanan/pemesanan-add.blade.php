@extends('layouts.main')
@section('title')
    Tambah Data Pemesanan
@endsection
@section('content')

{{-- <form action="{{ route('halamanPemesananSudahBayar') }}" method="post"> --}}
<form action="{{ route('validasi') }}" method="post">
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
        <button type="button" class="btn btn-primary" onclick="window.location='/admin/halaman-pemesanan'">Kembali</button>
    </p>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Pemesanan</h3>
        </div>
    <div class="card-body">
            <div class="form-group">
              <label for="no_meja">Scan QR</label>
              <div id="reader" width="600px"></div>
            </div>
            <div class="form-group">
              <label for="no_meja">No Meja</label>
              <input type="text" class="form-control" id="no_meja" name="no_meja" placeholder="Masukkan No Meja">
            </div>
            <div class="form-group">
                <label for="nama_menu">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Masukkan Nama Menu">
              </div>
              <div class="form-group">
                <label for="no_meja">Jumlah</label>
                <input type="text" class="form-control" id="Jumlah" name="Jumlah" placeholder="Masukkan Jumlah">
              </div>
              <div class="form-group">
                <label for="sub_total">Sub Total</label>
                <input type="text" class="form-control" id="sub_total" name="sub_total" placeholder="Masukkan Sub Total">
              </div>
              <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" placeholder="Masukkan Total">
              </div>
              <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>

      </div>
      <input type="hidden" name="result" id="result">
      <div class="al-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} {PHP v{{PHP_VERSION}}}
      </div>
    </div>
</form>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
  function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
  // console.log(`Code matched = ${decodedText}`, decodedResult);
  $('#result').val(decodedText);
                let id = decodedText;                
                html5QrcodeScanner.clear().then(_ => {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        
                        url: "{{ route('validasi') }}",
                        type: 'POST',            
                        data: {
                            _methode : "POST",
                            _token: CSRF_TOKEN, 
                            qr_code : id
                        },            
                        success: function (response) {
                          console.log(response); 
                          if(response.status == 404){
                            // Swal.fire({
                            //   tittle: 'Sertifikat tidak ditemukan, scan ulang lagi?'
                            //   confirmButtonText: 'Ya, scan ulang',
                            //   denyButtonText: 'Cancel',
                            // }).then((result) => {
                            //   if(result.isConfirmed){
                            //     location.reload();
                            //   } else if(result.isDismissed){
                            //     console.log("Deny")
                            //   }
                            // });
                          }else{
                            // Swal.fire({
                            //   tittle: '<strong>Sertifikat Terdaftar</strong>',
                            //   icon: 'success',
                            //   html:
                            //         '<b>Nama :</b>'+response.nama+'</br>',
                            //         '<b>Kelas :</b>'+response.kelas+'</br>',
                            //   showCloseButton: true,
                            //   showCancelButton: false,
                            //   focusConfirm: false,
                            // })
                          }  
                          // console.log(response);
                            // if(response.status == 200){
                            //     alert('berhasil');
                            // }else{
                            //     alert('gagal');
                            // }
                            
                        }
                    });   
                }).catch(error => {
                    alert('something wrong');
                });
}

function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
  // console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>

@endsection

