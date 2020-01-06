<!DOCTYPE html>
<html>
<head>
  <title>Perubahan Modal Laundry Al-Banna</title>
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
    <p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Laporan Keuangan - Perubahan Modal<br> 
    </p>
    <table class='table table-bordered'>
      <thead>
        <tr style="background-color: rgb(149,185,199);">
          <th style="color: #fff;text-align: center;"></th>
          <th style="color: #fff;">Keterangan</th>
          <th style="color: #fff;">Saldo</th>
          <th style="color: #fff;">Saldo Modal</th>
        </tr>
      </thead>
      <tbody>
        @foreach($DataAkunKas as $index => $dok)
        <tr>
          <td style="color: #000000;text-align: center;">
            <span></span>
          </td>
          <td style="color: #000000;">
            <span>Modal Awal, 1 Januari {{$tahun}}</span>
          </td>
          <td></td>
          <td>Rp. {{ number_format($dok->total_debit, 0, ',', '.') }}</td>
        </tr>
        @endforeach
        <tr>
          <td style="color: #000000;text-align: center;">
            <span></span>
          </td>
          <td style="color: #000000;">
            <span>Laba Bersih</span>
          </td>
          <td>Rp. {{ number_format($total_kredit_laba, 0, ',', '.') }}</td>
          <td></td>
        </tr>
        <tr>
          <td style="color: #000000;text-align: center;">
            <span></span>
          </td>
          <td style="color: #000000;">
            <span>Prive</span>
          </td>
          <td>Rp. {{ number_format($total_debit_prive, 0, ',', '.') }}</td>
          <td></td>
        </tr>
        <tr>
          <td style="color: #000000;text-align: center;">
            <span></span>
          </td>
          <td style="color: #000000;">
            <span>Laba dikurang Prive</span>
          </td>
          @if($laba_prive < 0)
          <td>(Rp. {{ number_format($laba_prive, 0, ',', '.') }})</td>
          <td></td>
          @else
          <td>Rp. {{ number_format($laba_prive, 0, ',', '.') }}</td>
          <td></td>
          @endif
        </tr>
      </tbody>
      <tfoot style="background-color: #F5F5F5;">
        <tr>
          <td></td>
          <td style="color: #000000;font-weight: bold;">
            <span>Modal Akhir, 31 Desember {{$tahun}}</span>
          </td>
          <td style="color: #000000;font-weight: bold;"></td>
          <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($modal_akhir, 0, ',', '.') }}</td>
        </tr>
      </tfoot>
    </table>

  </body>
  </html>