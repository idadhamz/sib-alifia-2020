@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataBukuBesar')}}">Data Buku Besar</a></div>
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
                    <div class="card" style="width: 100%">
                      <div class="card-header">
                        <h4>Data Buku Besar</h4>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-md" id="data-user">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Akun</th>
                                        <th style="width: 350px;">Akun</th>
                                        <th>Golongan Akun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($DataAkun as $index => $dok)
                                    <tr>
                                        <td>{{$index +1}}</td>
                                        <td style="color: #000000;">{{$dok->no_akun}}</td>
                                        <td style="width: 350px;"><span style="color: #000000;">{{$dok->nm_akun}}</span></td>
                                        <td><span style="color: #000000;">{{$dok->nm_golongan}}</span></td>
                                        <td>
                                            <a href="/dataBukuBesar/akun/{{$dok->no_akun}}" class="btn btn-success">Lihat</a>
                                            <!-- <button href="/dataJurnalUmum/delete/{{$dok->kode_jurnal}}" class="btn btn-danger" id="hapus-jurnal">Hapus</button> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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