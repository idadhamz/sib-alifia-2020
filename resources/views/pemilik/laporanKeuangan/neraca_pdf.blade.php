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
<p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Laporan Keuangan - Neraca<br>
  Periode {{ Carbon\Carbon::parse($dari)->formatLocalized('%d/%m/%Y') }} - {{ Carbon\Carbon::parse($sampai)->formatLocalized('%d/%m/%Y') }} 
</p>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th style="text-align: center;">Kode Akun</th>
      <th>Akun</th>
      <th>Debit</th>
      <th>Kredit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($DataNeracaHarta as $index => $dok)
    <tr>
      <td style="color: #000000;text-align: center;">
        <span>{{$dok->no_akun}}</span>
      </td>
      <td style="color: #000000;">
        <span>{{$dok->nm_akun}}</span>
      </td>
      <td>Rp. {{ number_format($dok->total_debit, 0, ',', '.') }}</td>
      <td>Rp. {{ number_format($dok->total_kredit, 0, ',', '.') }}</td>
    </tr>
    @endforeach
    @foreach($DataNeracaHutang as $index => $dok)
    <tr>
      <td style="color: #000000;text-align: center;">
        <span>{{$dok->no_akun}}</span>
      </td>
      <td style="color: #000000;">
        <span>{{$dok->nm_akun}}</span>
      </td>
      <td>Rp. {{ number_format($dok->total_debit, 0, ',', '.') }}</td>
      <td>Rp. {{ number_format($dok->total_kredit, 0, ',', '.') }}</td>
    </tr>
    @endforeach
    @foreach($DataNeracaModal as $index => $dok)
    <tr>
      <td style="color: #000000;text-align: center;">
        <span>{{$dok->no_akun}}</span>
      </td>
      <td style="color: #000000;">
        <span>{{$dok->nm_akun}}</span>
      </td>
      <td>Rp. {{ number_format($dok->total_debit, 0, ',', '.') }}</td>
      <td>Rp. {{ number_format($dok->total_kredit, 0, ',', '.') }}</td>
    </tr>
    @endforeach
  </tbody>
  <tfoot style="background-color: #F5F5F5;">
    <tr>
      <td></td>
      <td style="color: #000000;font-weight: bold;">
        <span>Total</span>
      </td>
      <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($total_debit_all, 0, ',', '.') }}</td>
      <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($total_kredit_all, 0, ',', '.') }}</td>
    </tr>
  </tfoot>
</table>

</body>
</html>