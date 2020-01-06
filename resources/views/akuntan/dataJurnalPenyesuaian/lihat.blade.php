@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataJurnalPenyesuaian')}}">Data Jurnal Penyesuaian</a></div>
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
                              <a href="/dataJurnalPenyesuaian" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                            </td>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <!-- <p style="font-weight: bold;">Data Jurnal Penyesuaian</p>
                        <hr /> -->
                        <div class="row">
                          <div class="col-12" style="margin: 20px 0px;">
                            <p style="text-align: center;line-height: 35px;font-size: 22px;">Al-Banna Laundry <br><span style="font-size: 17px;font-weight: normal;"> Jalan Semanggi 2, Ciputat Timur - Kota Tangerang Selatan</span></p>
                            <hr/>
                            @foreach($DataJurnalPenyesuaian as $index => $dps)
                            <p style="text-align: center;line-height: 25px;font-size: 17px;font-weight: bold;">Jurnal Penyesuaian<br> {{ Carbon\Carbon::parse($dps->tanggal_pembuatan)->formatLocalized('%d/%m/%Y') }}<br><span style="font-weight: normal;">No. {{$dps->no_jurnal_penyesuaian}}</span></p>
                            @endforeach
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-md" style="text-align: center;">
                                    <thead>
                                        <tr style="background-color: rgb(149,185,199);">
                                            <!-- <th>No.</th> -->
                                            <th style="width: 250px;color: #fff;">Tgl</th>
                                            <th style="text-align: left;color: #fff;">Keterangan</th>
                                            <th style="color: #fff;">Debit</th>
                                            <th style="color: #fff;">Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($DataAkunJurnalPenyesuaian as $index => $dps)
                                        <tr>
                                            <td style="width: 250px;">{{ Carbon\Carbon::parse($dps->tgl_transaksi)->formatLocalized('%d/%m') }}</td>
                                            <!-- <td>
                                              <span style="font-weight: bold;">Aktiva</span> 
                                              <br><span>Kas</span>
                                              <br><span>Pendapatan</span>
                                            </td> -->
                                            @if($dps->kredit == null)
                                              <td style="text-align: left;">{{$dps->nm_akun}}</td>
                                            @else
                                              <td style="text-align: left;padding-left: 50px;">{{$dps->nm_akun}}</td>
                                            @endif
                                            <!-- <td><span>Rp. {{ number_format($dps->debit, 0, ',', '.') }}</td>
                                            <td><span>Rp. {{ number_format($dps->kredit, 0, ',', '.') }}</td> -->
                                            @if($dps->debit == null)
                                              <td>-</td>
                                            @else
                                              <td style="text-align: right;"><span>Rp. {{ number_format($dps->debit, 0, ',', '.') }}</td>
                                            @endif
                                            @if($dps->kredit == null)
                                              <td>-</td>
                                            @else
                                              <td style="text-align: right;"><span>Rp. {{ number_format($dps->kredit, 0, ',', '.') }}</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
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