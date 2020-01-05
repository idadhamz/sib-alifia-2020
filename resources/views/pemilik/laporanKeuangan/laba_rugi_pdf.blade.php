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
    <p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Laporan Keuangan - Laba Rugi<br>
    Periode {{ Carbon\Carbon::parse($dari)->formatLocalized('%d/%m/%Y') }} - {{ Carbon\Carbon::parse($sampai)->formatLocalized('%d/%m/%Y') }} 
    </p>
    <table class='table table-bordered'>
      <thead>
        <tr>
          <th>Kode Akun</th>
          <th>Akun</th>
          <th>Debit</th>
          <th>Kredit</th>
        </tr>
      </thead>
      <tbody>
        @foreach($DataLabaRugiPendapatan as $index => $dok)
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
        <tr style="font-weight: bold;background-color: #F5F5F5;">
          <td></td>
          <td>Total Pendapatan</td>
          <td>Rp. {{ number_format($total_pendapatan, 0, ',', '.') }}</td>
          <td></td>
        </tr>
        @foreach($DataLabaRugiBeban as $index => $dok)
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
        <tr style="font-weight: bold;background-color: #F5F5F5;">
          <td></td>
          <td>Total Beban</td>
          <td>Rp. {{ number_format($total_beban, 0, ',', '.') }}</td>
          <td></td>
        </tr>
      </tbody>
      <tfoot style="background-color: #F5F5F5;">
        <tr>
          <td></td>
          <td style="color: #000000;font-weight: bold;">
            <span>Total Pendapatan Usaha</span>
          </td>
          <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($total_akhir, 0, ',', '.') }}</td>
          <td></td>
        </tr>
      </tfoot>
    </table>

  </body>
  </html>