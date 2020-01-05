<!DOCTYPE html>
<html>
<head>
  <title>Laba Rugi Laundry Al-Banna</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <style type="text/css">
  table tr td,
  table tr th{
    font-size: 10pt;
  }
</style>

<p style="text-align: center;line-height: 35px;font-size: 22px;">Al-Banna Laundry <br><span style="font-size: 17px;font-weight: normal;"> Jalan Semanggi 2, Ciputat Timur - Kota Tangerang Selatan</span></p>
<hr/>
<p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Laporan Arus Kas
</p>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th style="text-align: center;">Tanggal</th>
      <th>Deskripsi</th>
      <th>Nominal</th>
    </tr>
  </thead>
  <tbody>
    <tr style="background-color: #F5F5F5;text-align: center;">
      <th scope="row" colspan="6" style="font-size:17px;">Arus Kas Masuk</th>
    </tr>
    @foreach($transaksiArusPemasukan as $index => $dok)
    <tr>
      <td style="text-align: center;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
      <td><span style="color: #000000;">{{$dok->deskripsi}} </span></td>
      <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td>
    </tr>
    @endforeach
    <tr style="font-weight: bold;">
      <td></td>
      <td>Total</td>
      <td>Rp. {{ number_format($totalPemasukan, 0, ',', '.') }}</td>
    </tr>
    <tr style="background-color: #F5F5F5;text-align: center;">
      <th scope="row" colspan="6" style="font-size:17px;">Arus Kas Keluar</th>
    </tr>
    @foreach($transaksiArusPengeluaran as $index => $dok)
    <tr>
      <td style="text-align: center;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
      <td><span style="color: #000000;">{{$dok->deskripsi}} </span></td>
      <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td>
    </tr>
    @endforeach
    <tr style="font-weight: bold;">
      <td></td>
      <td>Total</td>
      <td>Rp. {{ number_format($totalPengeluaran, 0, ',', '.') }}</td>
    </tr>
  </tbody>
</table>

</body>
</html>