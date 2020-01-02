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
                        <h4>Data Neraca Saldo</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12" style="margin-bottom: 20px;">
                            <p style="text-align: center;line-height: 25px;font-size: 15px;font-weight: bold;">Neraca Saldo <br> Al-Banna Laundry <br> {{ Carbon\Carbon::parse(\Carbon\Carbon::now()->endOfMonth()->toDateString())->formatLocalized('%d %B %Y') }}</p>
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Akun</th>
                                            <th>Debet</th>
                                            <th>Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataNeracaSaldo as $index => $dok)
                                        <tr>
                                            <td style="color: #000000;text-align: center;">
                                              <span>{{$dok->nm_akun}}</span>
                                            </td>
                                            <td>Rp. {{ number_format($dok->total_debit, 0, ',', '.') }}</td>
                                            <td>Rp. {{ number_format($dok->total_kredit, 0, ',', '.') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        @foreach($dataTotalNeracaSaldo as $index => $dok)
                                        <tr>
                                            <td style="color: #000000;font-weight: bold;text-align: center;">
                                              <span>Total</span>
                                            </td>
                                            <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($dok->total_debit_all, 0, ',', '.') }}</td>
                                            <td style="color: #000000;font-weight: bold;">Rp. {{ number_format($dok->total_kredit_all, 0, ',', '.') }}</td>
                                        </tr>
                                        @endforeach
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