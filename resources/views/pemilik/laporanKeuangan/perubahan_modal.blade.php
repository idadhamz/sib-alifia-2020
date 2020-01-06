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
                              <a href="/dataPerubahanModal/cetak_pdf" class="btn btn-info" style="float: right;"><i class="fa fa-print" style="margin-right: 5px;"></i>Cetak Perubahan Modal</a>
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
                            <p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Laporan Perubahan Modal<br>
                            Periode Tahun {{$tahun}} 
                            </p>
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-md">
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