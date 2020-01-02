@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataJurnalUmum')}}">Data Jurnal Umum</a></div>
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
                              <a href="/dataJurnalUmum" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                            </td>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <p style="font-weight: bold;">Data Jurnal Umum</p>
                        <hr />
                        <div class="row">
                          <div class="col-12" style="margin: 20px 0px;">
                            @foreach($DataJurnal as $index => $dps)
                            <p style="text-align: center;line-height: 25px;font-size: 17px;font-weight: bold;">Jurnal Umum (General Ledger)<br> Al-Banna Laundry <br> {{ Carbon\Carbon::parse($dps->tanggal_pembuatan)->formatLocalized('%d %B %Y') }}</p>
                            @endforeach
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-md" style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debet</th>
                                            <th>Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody">
                                        @foreach($DataAkunJurnal as $index => $dps)
                                        <tr>
                                            <td>{{ Carbon\Carbon::parse($dps->tgl_transaksi)->formatLocalized('%d %B %Y') }}</td>
                                            <!-- <td>
                                              <span style="font-weight: bold;">Aktiva</span> 
                                              <br><span>Kas</span>
                                              <br><span>Pendapatan</span>
                                            </td> -->
                                            <td>{{$dps->nm_akun}}</td>
                                            <td><span>Rp. {{ number_format($dps->debit, 0, ',', '.') }}</td>
                                            <td><span>Rp. {{ number_format($dps->kredit, 0, ',', '.') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        @foreach($DataJurnal as $index => $dps)
                                        <tr>
                                            <td></td>
                                            <td style="color: #000000; font-weight: bold;">Total</td>
                                            <td style="color: #000000; font-weight: bold;">Rp. {{ number_format($dps->nilai, 0, ',', '.') }}</td>
                                            <td style="color: #000000; font-weight: bold;">Rp. {{ number_format($dps->nilai, 0, ',', '.') }}</td>
                                        </tr>
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