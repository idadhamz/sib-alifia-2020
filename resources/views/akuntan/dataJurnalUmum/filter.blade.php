@extends('layouts.master')

        @section('content')

        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                        <p>Data Jurnal Umum <span style="font-weight: bold;">({{ Carbon\Carbon::parse($dari)->formatLocalized('%d %B %Y') }} - {{ Carbon\Carbon::parse($sampai)->formatLocalized('%d %B %Y') }})</span></p>
                        <hr />
                        <div class="table-responsive">
                            <table class="table table-striped" id="data-user">
                                <thead>
                                    <tr>
                                        <th>Tanggal Jurnal</th>
                                        <th>No Jurnal Umum</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($DataJurnalUmumFilters as $index => $dok)
                                    <tr>
                                        <td style="color: #000000;">{{ Carbon\Carbon::parse($dok->tanggal_pembuatan)->formatLocalized('%d %B %Y') }}</td>
                                        <td><span style="color: #000000;">{{$dok->no_jurnal_umum}}</span></td>
                                        <td><span style="color: #000000;">{{$dok->nm_jurnal_umum}}</span></td>
                                        <td><span style="color: #000000;">Rp. {{ number_format($dok->nilai, 0, ',', '.') }}</span></td>
                                        <td>
                                            <a href="/dataJurnalUmum/lihat/{{$dok->kode_jurnal}}" class="btn btn-success">Lihat</a>
                                            <!-- <button href="/dataJurnalUmum/delete/{{$dok->kode_jurnal}}" class="btn btn-danger" id="hapus-jurnal">Hapus</button> -->
                                            <a href="" class="btn btn-danger btn-hapus" data-id="{{$dok->kode_jurnal}}">Delete</a>
                                        </td>
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
            </section>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection