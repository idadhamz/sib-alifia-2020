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
        <tr style="background-color: rgb(149,185,199);">
          <th style="color: #fff;text-align: center;">Kode Akun</th>
          <th style="color: #fff;">Akun</th>
          <th style="color: #fff;">Debit</th>
          <th style="color: #fff;">Kredit</th>
        </tr>
      </thead>
      <tbody>
        <tr style="background-color: #F5F5F5;text-align: center;">
          <th scope="row" colspan="6">Bagian Pendapatan</th>
        </tr>
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
        <tr style="background-color: #F5F5F5;text-align: center;">
          <th scope="row" colspan="6">Bagian Beban</th>
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
      </tbody>
      <tfoot style="background-color: #F5F5F5;">
        <tr>
          <td></td>
          <td style="color: #000000;font-weight: bold;">
            <span>Total</span>
          </td>
          <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($total_beban, 0, ',', '.') }}</td>
          <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($total_pendapatan, 0, ',', '.') }}</td>
        </tr>
        <tr>
          @if($total_pendapatan > $total_beban)
          <td></td>
          <td style="color: #000000;font-weight: bold;">
            <span></span>
          </td>
          <td style="color: green;font-weight: bold;">Laba Rp. {{ number_format($total_akhir, 0, ',', '.') }}</td>
          <td></td>
          @else
          <td></td>
          <td style="color: #000000;font-weight: bold;">
            <span></span>
          </td>
          <td></td>
          <td style="color: red;font-weight: bold;">Rugi Rp. {{ number_format($total_akhir, 0, ',', '.') }}</td>
          @endif
        </tr>
      </tfoot>
    </table>

  </body>
  </html>