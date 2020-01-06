@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataBukuBesar')}}">Data Buku Besar</a></div>
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
                              <a href="/dataBukuBesar" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                            </td>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
<!--                         <p style="font-weight: bold;">Data Jurnal Umum</p>
                        <hr /> -->
                        <div class="row">
                          <div class="col-12" style="margin: 20px 0px;">
                            <p style="text-align: center;line-height: 35px;font-size: 22px;">Al-Banna Laundry <br><span style="font-size: 17px;font-weight: normal;"> Jalan Semanggi 2, Ciputat Timur - Kota Tangerang Selatan</span></p>
                            <p style="text-align: center;line-height: 25px;font-size: 17px;font-weight: bold;">Buku Besar</p>
                            <hr/>
                            @foreach($DataAkunDetail as $index => $dps)
                            <br>
                            <div class="row">
                              <div class="col-6" style="text-align: left;">
                                <p style="font-weight: bold;font-size: 15px;"> 
                                  Akun : {{$dps->nm_akun}}
                                </p>
                              </div>
                              <div class="col-6" style="text-align: right;">
                                <p style="font-weight: bold;font-size: 15px;"> 
                                  No. Akun : {{ $dps->no_akun }}
                                </p>
                              </div>
                            </div>
                            @endforeach
                            <hr/>
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-md" style="text-align: center;" id="data-user">
                                    <thead>
                                        <tr style="background-color: rgb(149,185,199);">
                                            <th style="color: #fff;">No.</th>
                                            <th style="width: 150px;color: #fff;">Tanggal</th>
                                            <th style="width: 350px;text-align: left;color: #fff;">Keterangan</th>
                                            <th style="color: #fff;">Debet</th>
                                            <th style="color: #fff;">Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($DataBukuBesarDetail as $index => $dps)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td>{{ Carbon\Carbon::parse($dps->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
                                            <!-- <td>
                                              <span style="font-weight: bold;">Aktiva</span> 
                                              <br><span>Kas</span>
                                              <br><span>Pendapatan</span>
                                            </td> -->
                                            <td style="width: 350px;text-align: left;">{{$dps->deskripsi}}</td>
                                            <!-- <td><span>Rp. {{ number_format($dps->debit, 0, ',', '.') }}</td>
                                            <td><span>Rp. {{ number_format($dps->kredit, 0, ',', '.') }}</td> -->
                                            @if($dps->debit == null)
                                              <td style="text-align: right;">Rp.0</td>
                                            @else
                                              <td style="text-align: right;"><span>Rp. {{ number_format($dps->debit, 0, ',', '.') }}</td>
                                            @endif
                                            @if($dps->kredit == null)
                                              <td style="text-align: right;">Rp.0</td>
                                            @else
                                              <td style="text-align: right;"><span>Rp. {{ number_format($dps->kredit, 0, ',', '.') }}</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot style="background-color: #F5F5F5;">
                                      @foreach($DataBukuBesarDetail as $index => $dok)
                                      @if ($loop->first)
                                      <tr>
                                        <td></td>
                                        <td style="color: #000000;font-weight: bold;"></td>
                                        <td style="color: #000000;font-weight: bold;text-align: left;">Total Saldo</td>
                                        <td style="color: #000000;font-weight: bold;text-align: right;">Rp. {{ number_format($dok->total_debit, 0, ',', '.') }}</td>
                                        <td style="color: #000000;font-weight: bold;text-align: right;">Rp. {{ number_format($dok->total_kredit, 0, ',', '.') }}</td>
                                      </tr>
                                      @endif
                                      @endforeach
                                    </tfoot>
                                </table>
                            </div>
                          </div>
                        </div>
                        <hr />
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