@extends('layouts.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <!-- <h1>Data Akun</h1> -->
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{url('/dataTransaksi')}}">Data Transaksi</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Laporan Arus Kas</h4>
            </div>
            <div class="card-body">
              <!-- <form action="/dataJurnalUmum/cari" method="get" role="form" autocomplete="off"> -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div style="width:100%;">
                            <div style="width:100%;">
                              <td>
                                <a href="/dataArusKas" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                              </td>
                              <td>
                                <a href="/dataArusKas/{{$dari}}/{{$sampai}}/cetak_pdf" class="btn btn-info" style="float: right;"><i class="fa fa-print" style="margin-right: 5px;"></i>Cetak Arus Kas</a>
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
                              <p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Laporan Arus Kas
                              </p>
                            </div>
                            <div class="col-12">
                              <div class="table-responsive">
                                <table class="table table-striped table-bordered table-md">
                                  <thead>
                                    <tr>
                                      <th scope="row" colspan="6" style="font-size:15px;">Tanggal : 
                                        <span style="font-weight: normal;">({{ Carbon\Carbon::parse($dari)->formatLocalized('%d/%m/%Y') }} - {{ Carbon\Carbon::parse($sampai)->formatLocalized('%d/%m/%Y') }})</span>
                                      </th>
                                    </tr>
                                    <tr style="background-color: rgb(149,185,199);">
                                      <th style="text-align: center;color: #fff;">No.</th>
                                      <th style="text-align: center;color: #fff;width: 200px;">Tanggal</th>
                                      <th style="color: #fff;">Deskripsi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr style="background-color: #F5F5F5;text-align: center;">
                                      <th scope="row" colspan="6">Arus Kas Masuk</th>
                                    </tr>
                                    @foreach($DataArusKasPemasukanFilters as $index => $dok)
                                    <tr>
                                      <td style="text-align: center;">{{$index +1}}</td>
                                      <td style="text-align: center;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
                                      <td><span style="color: #000000;">{{$dok->deskripsi}} </span></td>
                                    </tr>
                                    @endforeach
                                    <tr style="background-color: #F5F5F5;text-align: center;">
                                      <th scope="row" colspan="6">Arus Kas Keluar</th>
                                    </tr>
                                    @foreach($DataArusKasPengeluaranFilters as $index => $dok)
                                    <tr>
                                      <td style="text-align: center;">{{$index +1}}</td>
                                      <td style="text-align: center;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
                                      <td><span style="color: #000000;">{{$dok->deskripsi}} </span></td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- </form> -->
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
