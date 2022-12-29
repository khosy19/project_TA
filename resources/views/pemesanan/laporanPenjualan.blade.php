<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Penjualan</title>
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
    .tg .tg-fymr{border-color:inherit;font-weight:bold;text-align:left;vertical-align:top}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    </style>
    <table class="tg" style="undefined;table-layout: fixed;" style="100%">
    <thead>
      <tr>
        <th class="tg-2dy9" colspan="4"><span style="font-weight:bold">GRANDE GARDEN CAFE</span><br>Jl. Kaliandra, Gamoh, Dayurejo, Kecamatan. Prigen, Pasuruan, Jawa Timur, 67157</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-7btt" colspan="4">LAPORAN PENJUALAN</td>
      </tr>
      <tr>
        <td class="tg-7btt">ID PEMESANAN</td>
        <td class="tg-7btt">NAMA PELANGGAN</td>
        <td class="tg-7btt">MENU YANG DIPESAN</td>
        <td class="tg-7btt">PENDAPATAN</td>
      </tr>
      @foreach ($cetakOrder as $data)
      <tr>
        <td class="tg-fymr">{{ ($data->id_pemesanan) }}</td>
        <td class="tg-0pky">{{ ($data->nama_pemesan) }}</td>
        <td class="tg-0pky">{{ ($data->nama_menu) }}</td>
        <td class="tg-0pky">{{ number_format($data->total,0,',','.') }}</td>
      </tr>
      @endforeach  
    </tbody>
    </table>
    <p><h3>Total Pendapatan : {{ number_format($total_pendapatan,0,',','.') }}</h3></p>
    <br><br><br>
        <td>Penerima,<br><br><br><br>Okta<br>(Owner Grande Garden Cafe)</td>

</body>
</html>