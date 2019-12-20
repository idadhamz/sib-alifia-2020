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
                        3
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
                        42
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
                        20
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
                        5
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Penjualan Bulan Desember</h4>
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
                        <table class="table table-striped" id="data-pemasukan">
                          <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Transaksi</th>
                              <!-- <th>Nominal</th> -->
                              <th>Jenis</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td style="color: #000000;">1/12/2019</td>
                              <td><span style="color: #000000;">Laundry 2 Kg </span><br>
                                  <span style="color: #333;">Rp. 13.000 </span>
                              </td>
                              <!-- <td><span style="color: #000000;">Rp. 13.000 </span></td> -->
                              <td><span style="color: #000000;">Tunai </span></td>
                            </tr>
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