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
                      <div class="card-body">
                        <!-- <form action="/dataJurnalUmum/cari" method="get" role="form" autocomplete="off"> -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label>Dari Tanggal</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="dari_tanggal" id="dari_tanggal" autocomplete="off">
                                    </div>
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                      Contoh: 2020-01-01 atau 1 Jan 2020
                                    </small>
                                    @if($errors->has('dari_tanggal'))
                                        <div class="text-danger" style="padding: 5px;">
                                            {{ $errors->first('dari_tanggal')}}
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Sampai Tanggal</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="sampai_tanggal" id="sampai_tanggal" autocomplete="off">
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                          Contoh: 2020-01-04 atau 4 Jan 2020
                                        </small>
                                        @if($errors->has('sampai_tanggal'))
                                            <div class="text-danger" style="padding: 5px;">
                                                {{ $errors->first('sampai_tanggal')}}
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <button type="submit" class="btn btn-success btn-cari" style="margin-top:29px"><i class="fa fa-search" style="margin-right: 5px;"></i>Cari Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                            <div style="width:100%;">
                                <h4 style="float:left;">Dashboard Jurnal Umum</h4>
                                <div style="float: right;"> 
                                    <a href="{{url('/tambahJurnalUmum')}}"class="btn btn-info" style="color: #ffffff;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Jurnal Umum</a>
                                </div>
                            </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="data-user">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Jurnal</th>
                                        <th>No Jurnal Umum</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($DataJurnalUmum as $index => $dok)
                                    <tr>
                                        <td>{{$index +1}}</td>
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