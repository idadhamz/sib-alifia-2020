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
                        <h4>Laporan Keuangan</h4>
                      </div>
                      <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Tabel</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Grafik</a>
                          </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTab3Content">
                          <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                            <div class="row">
                              <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                  <label>Dari Tanggal</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="dari_tanggal_lap" id="dari_tanggal_lap" autocomplete="off">
                                  </div>
                                  <small id="passwordHelpBlock" class="form-text text-muted">
                                    Contoh: 2020-01-01
                                  </small>
                                  @if($errors->has('dari_tanggal_lap'))
                                  <div class="text-danger" style="padding: 5px;">
                                    {{ $errors->first('dari_tanggal_lap')}}
                                  </div>
                                  @endif
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                  <label>Sampai Tanggal</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="sampai_tanggal_lap" id="sampai_tanggal_lap" autocomplete="off">
                                  </div>
                                  <small id="passwordHelpBlock" class="form-text text-muted">
                                    Contoh: 2020-01-01
                                  </small>
                                  @if($errors->has('sampai_tanggal_lap'))
                                  <div class="text-danger" style="padding: 5px;">
                                    {{ $errors->first('sampai_tanggal_lap')}}
                                  </div>
                                  @endif
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                  <label>Jenis Laporan</label>
                                  <select class="form-control" name="pilihan_akun" id="pilihan_akun">
                                    <option value="0">--Pilih Laporan--</option>
                                    <option value="1">Laba Rugi</option>
                                    <option value="2">Perubahan Modal</option>
                                    <option value="3">Neraca</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-2">
                                <button type="submit" class="btn btn-success btn-cari-neraca-saldo" style="margin-top:38px;"><i class="fa fa-search" style="margin-right: 5px;"></i>Lihat</button>
                              </div>
                            </div>
                            <!-- <div class="table-responsive">
                              <table class="table table-striped" id="data-pemasukan">
                                  <thead>
                                        <tr>
                                          <th>Periode</th>
                                          <th>Jumlah</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td style="color: #000000;">Januari 2019</td>
                                          <td><span style="color: #000000;">Rp. 50.000.000 </span></td>
                                      </tr>
                                  </tbody>
                              </table>
                            </div> -->
                          </div>
                          <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                            <div class="row">
                              
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card" id="card-grafik" style="display: none;">
                      <div class="card-header">
                        <h4>Grafik</h4>
                      </div>
                      <div class="card-body">
                        <canvas id="grafikLaporanKeuangan"></canvas>
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