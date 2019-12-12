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
                      <div class="card-body">
                        <form action="/dataJurnalUmum/cari" method="get" role="form" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label>Dari Tanggal</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="dari_tanggal" autocomplete="off">
                                    </div>
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
                                            <input type="date" class="form-control" name="dari_tanggal" autocomplete="off">
                                        </div>
                                        @if($errors->has('dari_tanggal'))
                                            <div class="text-danger" style="padding: 5px;">
                                                {{ $errors->first('dari_tanggal')}}
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <button type="submit" class="btn btn-success" style="margin-top:29px"><i class="fa fa-search" style="margin-right: 5px;"></i>Cari Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                            <div style="width:100%;">
                                <h4 style="float:left;">Dashboard Jurnal Umum</h4>
                                <div style="float: right;"> 
                                    <a href="{{url('/tambahJurnalUmum')}}"class="btn btn-primary" style="border-color: #95B9C7;color: #ffffff;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Jurnal Umum</a>
                                </div>
                            </div>
                      </div>
                      <div class="card-body">
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
                                    <tr>
                                        <td style="color: #000000;">1/12/2019</td>
                                        <td><span style="color: #000000;">JU-DEC2019</span></td>
                                        <td><span style="color: #000000;">Jurnal Umum Desember</span></td>
                                        <td><span style="color: #000000;">Rp. 500.000</span></td>
                                        <td>
                                            <a href="/dataJurnalUmum/edit" class="btn btn-warning">Ubah</a>
                                            <a href="/dataJurnalUmum/delete" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
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