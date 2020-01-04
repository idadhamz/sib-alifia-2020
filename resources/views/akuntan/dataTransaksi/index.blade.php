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

              @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                    </button>
                    {{ session()->get('message') }}
                  </div>
                </div>
              @endif
              @if(session()->has('message_edit'))
                <div class="alert alert-warning alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                    </button>
                    {{ session()->get('message_edit') }}
                  </div>
                </div>
              @endif
              @if(session()->has('message_delete'))
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                    </button>
                    {{ session()->get('message_delete') }}
                  </div>
                </div>
              @endif

              <div class="section-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Data Transaksi</h4>
                      </div>
                      <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Pemasukan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Pengeluaran</a>
                          </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTab3Content">
                          <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                            <div class="table-responsive">
                              <table class="table table-striped table-md" id="data-pemasukan">
                                  <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Diinput Oleh</th>
                                          <th>Tanggal Transaksi</th>
                                          <th>Transaksi</th>
                                          <th>Jenis Pembayaran</th>
                                          <!-- <th>Nominal</th> -->
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($transaksiPemasukan as $index => $dok)
                                      <tr>
                                          <td>{{$index +1}}</td>
                                          <td><span style="color: #000000;">{{$dok->nama}} </span></td>
                                          <td style="color: #000000;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d %B %Y') }}</td>
                                          <td><span style="color: #000000;">{{$dok->deskripsi}} </span><br>
                                              <span style="color: #333;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span>
                                          </td>
                                          <td><span style="color: #000000;">{{$dok->jenis}} </span></td>
                                          <!-- <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td> -->
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                            <div class="table-responsive">
                              <table class="table table-striped table-md" id="data-pengeluaran">
                                  <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Diinput Oleh</th>
                                          <th>Tanggal Transaksi</th>
                                          <th>Transaksi</th>
                                          <th>Jenis Pembayaran</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($transaksiPengeluaran as $index => $dok)
                                      <tr>
                                          <td>{{$index +1}}</td>
                                          <td><span style="color: #000000;">{{$dok->nama}} </span></td>
                                          <td style="color: #000000;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d %B %Y') }}</td>
                                          <td><span style="color: #000000;">{{$dok->deskripsi}} </span><br>
                                              <span style="color: #333;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span>
                                          </td>
                                          <td><span style="color: #000000;">{{$dok->jenis}} </span></td>
                                          <!-- <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td> -->
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
              </div>
            </section>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection