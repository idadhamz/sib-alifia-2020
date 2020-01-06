@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                <h1>Dashboard</h1>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                      <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Total User</h4>
                      </div>
                      <div class="card-body">
                        {{$jmlUser}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                      <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Transaksi</h4>
                      </div>
                      <div class="card-body">
                        {{$jmlTransaksi}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                      <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Akun</h4>
                      </div>
                      <div class="card-body">
                        {{$jmlAkun}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                      <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Golongan Akun</h4>
                      </div>
                      <div class="card-body">
                        {{$jml_GolAkun}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 style="font-size: 17px;">Pemasukan Setiap Bulan</h4>
                    </div>
                    <div class="card-body">
                      <canvas id="grafikLaporanKeuangan" height="182"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Transaksi Terakhir</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Tanggal</th>
                              <th style="width: 275px;">Transaksi</th>
                              <!-- <th>Nominal</th> -->
                              <th>Jenis</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($DataTransaksi as $index => $dok)
                            <tr>
                              <td>{{$index +1}}</td>
                              <td style="color: #000000;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
                              <td><span style="color: #000000;">{{$dok->deskripsi}} </span><br>
                                  <!-- <span style="color: #333;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span> -->
                              </td>
                              <td><span style="color: #000000;">{{$dok->jenis}} </span></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
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