@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/idp/index')}}">Data Izin Dinas Perpanjangan</a></div>
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
                        <h4>Data Izin Dinas Perpanjangan</h4>
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
                                    <th style="color: white;width: 100px;">Tanggal Validasi</th>
                                    <th style="color: white;width: 100px;">Nama Pemohon</th>
                                    <th style="color: white;width: 100px;">Petugas</th>
                                    <th style="color: white;width: 150px;">Status</th>
                                    <th style="color: white;">Cetak</th>
                                    <th style="color: white;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_idp as $index => $row)
                                <tr>
                                    <td style="color: #000000;">{{$index +1}}</td>
                                    <td style="color: #000000;">{{ Carbon\Carbon::parse($row->tgl_validasi)->formatLocalized('%d %B %Y') }}</td>
                                    <td style="color: #000000;">{{$row->nama}}</td>
                                    <td style="color: #000000;">{{$row->name}}</td>
                                    <td>
                                      <span style="font-weight: bold;color: blue;"><i class="fas fa-check-circle" style="font-size: 15px; margin-right: 5px;margin-bottom: 10px;color: blue;"></i>Surat Izin Divalidasi</span>
                                      <br>
                                      <a href="../{{$row->surat_izin_belajar}}" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;">Lihat Surat</a>
                                    </td>
                                    <td>
                                      <a href="/idp/print/{{ $row->id }}" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;margin-right: 5px;">Surat IDP</a>
                                    </td>
                                    <td>
                                        @if($row->izin_dinas_perpanjangan == null)
                                        <a href="/idp/create/{{ $row->id }}" class="btn btn-outline-primary" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;">Upload</a>
                                        @elseif($row->izin_dinas_perpanjangan != null)
                                        <a href="/idp/cancel/{{ $row->id }}/{{$row->id_berkas}}" class="btn btn-outline-danger" style="font-weight: bold;font-size: 12px;border-radius: 0px;border-width: 1.5px;">Batal Upload</a>
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