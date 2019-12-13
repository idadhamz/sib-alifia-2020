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
                        <h4>Laporan Keuangan</h4>
                      </div>
                      <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="myTab2" role="tablist">
                          <li class="nav-item mr-2">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Tabel</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Grafik</a>
                          </li>
                        </ul>
                        <hr />
                        <div class="tab-content" id="myTab3Content">
                          <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                            <div class="table-responsive">
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
                            </div>
                          </div>
                          <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                            <div class="row">
                              <!-- <?php $jml_bulan = 12; ?> -->
                              <?php $bulan = array(1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'); ?>
                              @foreach ($bulan as $index => $nama_bulan)
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-statistic-1" style="border: 1px solid #eee;">
                                  <!-- <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                  </div> -->
                                  <div class="card-wrap" style="padding: 20px 30px;">
                                    <div class="card-header mb-2" style="padding: 0px;">
                                      <h4 style="color: #000000;">Bulan {{ $nama_bulan }}</h4>
                                    </div>
                                    <div class="card-body" style="padding: 0px;">
                                      <a href="/grafikLaporanKeuangan/{{$index}}" class="btn btn-primary">Lihat Grafik</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4>Grafik</h4>
                      </div>
                      <div class="card-body">

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