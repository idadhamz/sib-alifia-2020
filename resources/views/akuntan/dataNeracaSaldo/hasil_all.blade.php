@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataNeracaSaldo')}}">Data Neraca Saldo</a></div>
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
                        <div style="width:100%;">
                          <div style="width:100%;">
                            <td>
                              <a href="/dataNeracaSaldo" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
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
                            <p style="text-align: center;line-height: 25px;font-size: 16px;font-weight: bold;">Neraca Saldo<br> <!-- {{ Carbon\Carbon::parse(\Carbon\Carbon::now()->endOfMonth()->toDateString())->formatLocalized('%d %B %Y') }} -->
                            </p>
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-md">
                                    <thead>
                                        <tr style="background-color: rgb(149,185,199);">
                                            <th style="text-align: center;color: #fff;">Kode Akun</th>
                                            <th style="color: #fff;">Akun</th>
                                            <th style="color: #fff;">Debet</th>
                                            <th style="color: #fff;">Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataNeracaSaldoHasil as $index => $dok)
                                        <tr>
                                            <td style="color: #000000;text-align: center;">
                                              <span>{{$dok->no_akun}}</span>
                                            </td>
                                            <td style="color: #000000;">
                                              <span>{{$dok->nm_akun}}</span>
                                            </td>
                                            <td>Rp. {{ number_format($dok->debit, 0, ',', '.') }}</td>
                                            <td>Rp. {{ number_format($dok->kredit, 0, ',', '.') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot style="background-color: #F5F5F5;">
                                        <tr>
                                            <td></td>
                                            <td style="color: #000000;font-weight: bold;">
                                              <span>Total</span>
                                            </td>
                                            <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($total_debit, 0, ',', '.') }}</td>
                                            <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($total_kredit, 0, ',', '.') }}</td>
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