@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/validasi/index')}}">Validasi Surat Izin</a></div>
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
                        <h4>Validasi Surat Izin Belajar</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div style="margin:0px 0px 10px 0px;"> 
                            <a href="{{url('/trackingVerifikasi/create')}}" class="btn btn-outline-primary" style="font-weight: bold;font-size: 13px;border-radius: 0px;border-width: 1.5px;">Buat Surat</a>
                        </div>
                        <hr/> -->
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-md" id="data-pemohon">
                            <thead style="background-color: #95b9c7;">
                                  <tr>
                                    <th style="color: white;">No</th>
                                    <th style="color: white;">Tanggal</th>
                                    <th style="color: white;">Nama Pemohon</th>
                                    <th style="color: white;">Pemeriksa</th>
                                    <th style="color: white;">Status</th>
                                    <!-- <th style="color: white;">Surat Izin</th> -->
                                    <!-- <th style="color: white;">Keterangan</th> -->
                                    <th style="color: white;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_permohonan_validasi as $index => $row)
                                <tr>
                                    <td style="color: #000000;">{{$index +1}}</td>
                                    @if($row->status == 0)
                                      <td style="color: #000000;">{{ Carbon\Carbon::parse($row->tgl_surat)->formatLocalized('%d %B %Y') }}</td>
                                    @else
                                      <td style="color: #000000;">{{ Carbon\Carbon::parse($row->tgl_validasi)->formatLocalized('%d %B %Y') }}</td>
                                    @endif
                                    <td style="color: #000000;">{{$row->nama}}</td>
                                    <td style="color: #000000;">{{$row->name}}</td>
                                    <td>
                                      @if($row->status == 0)
                                      <span style="font-weight: bold; color: red;"><i class="fas fa-times-circle" style="padding: 0px 5px 10px 0px; color: red;"></i>Belum divalidasi</span>
                                      <br>
                                      <span><span style="text-decoration: underline;">Keterangan</span> : <br>{{$row->keterangan}}</span>
                                      @else
                                      <span style="font-weight: bold; color: blue;"><i class="fas fa-check-circle" style="padding: 0px 5px 10px 0px; color: blue;"></i>Sudah divalidasi</span>
                                      <br>
                                      <a href="../{{$row->surat_izin_belajar}}" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;">Lihat Surat Izin Belajar</a>
                                      @endif
                                    </td>
                                    <!-- <td>@if($row->surat_izin_belajar != null)
                                    <iframe src="<?php echo asset("$row->surat_izin_belajar")?>" frameborder="0" style="width:100%;min-height:300px;"></iframe>
                                    @else
                                      <p style="color: red; padding: 5px 0px;">Surat Izin Belajar Belum Dibuat</p>
                                    @endif
                                    </td> -->
                                    <!-- <td>
                                      <a href="../{{$row->surat_izin_belajar}}" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;">Lihat Surat Izin Belajar</a>
                                    </td> -->
                                    <td> 
                                        @if($row->status == 0)
                                        <a href="/validasi/validasi/{{ $row->id }}" class="btn btn-outline-warning" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;">Validasi</a>
                                        @else
                                        <a href="/validasi/cancel/{{ $row->id }}" class="btn btn-outline-danger" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;">Batal Validasi</a>
                                        @endif
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