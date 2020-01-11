@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/laporanKeuangan')}}">Laporan Keuangan</a></div>
                  </div>
              </div>

              <div class="section-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <div style="width:100%;">
                          <div style="width:100%;">
                            <td>
                              <a href="/laporanKeuangan" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                            </td>
                            <td>
                              <a href="/dataLabaRugi/{{$dari}}/{{$sampai}}/cetak_pdf" class="btn btn-info" style="float: right;"><i class="fa fa-print" style="margin-right: 5px;"></i>Cetak Laba Rugi</a>
                            </td>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12" style="margin-bottom: 20px;">
                            <!-- <img src="" /> -->
                            <p style="text-align: center;line-height: 35px;font-size: 22px;">Al-Banna Laundry <br><span style="font-size: 17px;font-weight: normal;"> Jalan Semanggi 2, Ciputat Timur - Kota Tangerang Selatan</span></p>
                            <hr/>
                            <p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Laporan Laba Rugi<br> 
                              Periode {{ Carbon\Carbon::parse($dari)->formatLocalized('%d/%m/%Y') }} - {{ Carbon\Carbon::parse($sampai)->formatLocalized('%d/%m/%Y') }}
                            </p>
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-md">
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
                                        <!-- <tr style="font-weight: bold;background-color: #F5F5F5;">
                                            <td></td>
                                            <td>Total Beban</td>
                                            <td>Rp. {{ number_format($total_beban, 0, ',', '.') }}</td>
                                            <td></td>
                                        </tr> -->
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
                                            @elseif($total_beban > $total_pendapatan)
                                            <td></td>
                                            <td style="color: #000000;font-weight: bold;">
                                              <span></span>
                                            </td>
                                            <td></td>
                                            <td style="color: red;font-weight: bold;">Rugi Rp. {{ number_format($total_akhir, 0, ',', '.') }}</td>
                                            @else
                                            <td></td>
                                            <td style="color: #000000;font-weight: bold;">
                                              <span></span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            @endif
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection