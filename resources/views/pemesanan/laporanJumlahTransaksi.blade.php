<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Paling Banyak Terjual</title>
</head>
<body onload="window.print()">
    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
          overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
          font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg .tg-2dy9{border-color:inherit;font-family:"Trebuchet MS", Helvetica, sans-serif !important;text-align:center;vertical-align:top}
        .tg .tg-7btt{border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        </style>
        <table class="tg" style="undefined;table-layout: fixed; width: 556px">
        <colgroup>
        <col style="width: 181px">
        <col style="width: 149px">
        <col style="width: 226px">
        </colgroup>
        <thead>
          <tr>
            <th class="tg-2dy9" colspan="3">GRANDE GARDEN CAFE<br>Jl. Kaliandra, Gamoh, Dayurejo, Kecamatan. Prigen, Pasuruan, Jawa Timur, 67157</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-7btt" colspan="3">LAPORAN JUMLAH TRANSAKSI</td>
          </tr>
          <tr>
            <td class="tg-7btt">ID TRANSAKSI</td>
            <td class="tg-7btt">ID PEMESANAN</td>
            <td class="tg-7btt">JUMLAH TRANSAKSI</td>
          </tr>
        @foreach ($cetakTransaksi as $data)      
        <tr>
            <td class="tg-0pky">{{ $data->id_order }}</td>
            <td class="tg-0pky">{{ $data->id_pemesanan }}</td>
            <td class="tg-0pky">{{ $data->jumlah }}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
        <p>
            <h4>Jumlah Transaksi : {{ $jml_transaksi }}</h4>
          </p>
          <td colspan="2" rowspan="3">Penerima,<br><br><br><br>Okta<br>(Owner Grande Garden Cafe)</td>
      
</body>
</html>