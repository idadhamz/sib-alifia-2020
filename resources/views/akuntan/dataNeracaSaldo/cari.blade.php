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
                      <div class="breadcrumb-item"><a href="{{url('/dataNeracaSaldo')}}">Data Neraca Saldo</a></div>
                  </div>
              </div>

              <div class="section-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Pilih Periode Neraca Saldo</h4>
                      </div>
                      <div class="card-body">
                        <!-- <form action="/dataJurnalUmum/cari" method="get" role="form" autocomplete="off"> -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label>Dari Tanggal</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="dari_tanggal_neraca_saldo" id="dari_tanggal_neraca_saldo" autocomplete="off">
                                    </div>
                                    @if($errors->has('dari_tanggal_neraca_saldo'))
                                        <div class="text-danger" style="padding: 5px;">
                                            {{ $errors->first('dari_tanggal_neraca_saldo')}}
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Sampai Tanggal</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="sampai_tanggal_neraca_saldo" id="sampai_tanggal_neraca_saldo" autocomplete="off">
                                        </div>
                                        @if($errors->has('sampai_tanggal_neraca_saldo'))
                                            <div class="text-danger" style="padding: 5px;">
                                                {{ $errors->first('sampai_tanggal_neraca_saldo')}}
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <button type="submit" class="btn btn-success btn-cari-neraca-saldo" style="margin-top:29px"><i class="fa fa-search" style="margin-right: 5px;"></i>Cari Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
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