
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grande Garden Cafe</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
  {{-- boostrap 5.1 --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{-- css data table --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

  

  {{-- =======================CSS PEMESANAN============================ --}}
  <style>
    .tab {
        width: 100%;
        margin: auto;
        /* margin-top: 0px; */
        padding: 0 2em;
        border-radius: 0.5rem;
        background-color: rgb(36, 143, 48);
        line-height: 5em;
        font-weight: bold;
        font-size: 12px;
        white-space: nowrap;
        overflow: auto;
        transition: all 0.5s linear;
        box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.904);
        text-align: center;
    }

    .tab-items {
        margin: 0;
        padding: 0;
        list-style: none;
        display: inline-grid;
        grid-gap: 0em;
        transition: color 5s ease-in;
        /* line-height: 20px; */
    }

    .tab-items> :nth-child(1) {
        grid-column: 1/2;

    }

    .tab-items> :nth-child(2) {
        grid-column: 2/3;
    }

    .tab-items> :nth-child(3) {
        grid-column: 3/4;
    }


    /* .tab-items> :nth-child(4) {
        grid-column: 4/5;
    }

    .tab-items> :nth-child(5) {
        grid-column: 5/6;
    } */

    .tab-item {
        display: inline;
        grid-row: 1/2;
    }

    .tab-item.active .item-link {
        color: rgb(74, 167, 167);
    }

    .item-link {
        padding: 0 0.75em;
        color: #fff;
        text-decoration: none;
        display: inline-block;
        transition: color 256ms;
    }

    .item-link:hover {
        color: #297;
        text-decoration: underline;
    }

    .tab-indicator {
        height: 3px;
        background-color: rgb(4, 137, 28);
        border-radius: 3px 3px 0 0;
        grid-column: var(--index)/span 1 !important;
        grid-row: 1/2;
        align-self: end;
    }

</style>

</head>
<body>
    {{-- <br><br><br><br><br> --}}

    {{-- <div class="content-wrapper"> --}}
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@yield('title')</h1>
              </div>
             
            </div>
          </div>
        </section> --}}
    
        <section class="content">
    
            @yield('content')
    
        </section>
      {{-- </div> --}}
{{-- =================FOOTER PESANAN PELANGGAN=================================== --}}
{{-- <footer id="footer">
    <!--Footer-->
<div class="fixed-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #fff;">
                <div class="form-group mb-3 bg-success text-center">
                    <label for="name">Nama Pemesan</label>
                    <input autofocus type="text" class="form-control" name="nama_pemesan" placeholder="Isi Nama Pemesan">
                    <span class="text-danger error-text name_error"></span>
                </div>
            </div>
            <div class="col-md-12 mb-3" style="background-color: #fff;">
                <button type="submit" class="btn btn-danger btn-block">
                    <i class="fa fa-gift"></i>
                    Pesan Sekarang
                </button>
            </div>
            </form>
            <div class="tab">
                <li class="tab-item different">
                    <a href="https://jagoantechno.com/angloresto/status-orderan-pelanggan/no-meja/2" class="item-link"
                        onclick="select(this)" href="/">
                        <i class="fa fa-home"></i>
                        Orderan Saya
                    </a>
                </li>
                <li class="tab-item">
                    <a href="https://jagoantechno.com/angloresto/orderan-pelanggan/no_meja/2" class="item-link"
                        onclick="select(this)" href="/">
                        <i class="fa fa-cutlery"></i>
                        Menu
                    </a>
                </li>
                <li class="tab-item">
                    <a href="/admin/pemesanan-pilihmeja" class="item-link"
                        onclick="/admin/pemesanan-pilihmeja" href="/">
                        <i class="fa fa-home"></i>
                        Kembali
                    </a>
                </li>
            </div>

        </div>
    </div>
</div>
</footer> --}}

{{-- =================FOOTER PESANAN PELANGGAN=================================== --}}
<!-- jQuery -->
<script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/') }}dist/js/demo.js"></script>
{{-- datatable --}}
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      
    });
  });
  $(document).ready( function () {
    $('#myTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "lengthMenu" : [5,10,20,-1],
      // "text-align" center,
    });
} );
</script>
</body>
</html>
