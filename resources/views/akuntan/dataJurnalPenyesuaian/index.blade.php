@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataJurnalPenyesuaian')}}">Data Jurnal Penyesuaian</a></div>
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
                                <h4 style="float:left;">Dashboard Jurnal Penyesuaian</h4>
                                <div style="float: right;"> 
                                    <a href="{{url('/tambahJurnalPenyesuaian')}}"class="btn btn-info" style="color: #ffffff;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Jurnal Penyesuaian</a>
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
                                        <th>No Jurnal Penyesuaian</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($DataJurnalPenyesuaian as $index => $dok)
                                    <tr>
                                        <td>{{$index +1}}</td>
                                        <td style="color: #000000;">{{ Carbon\Carbon::parse($dok->tanggal_pembuatan)->formatLocalized('%d %B %Y') }}</td>
                                        <td><span style="color: #000000;">{{$dok->no_jurnal_penyesuaian}}</span></td>
                                        <td><span style="color: #000000;">{{$dok->nm_jurnal_penyesuaian}}</span></td>
                                        <td>
                                            <a href="/dataJurnalPenyesuaian/lihat/{{$dok->kode_jurnal_penyesuaian}}" class="btn btn-success">Lihat</a>
                                            <!-- <button href="/dataJurnalUmum/delete/{{$dok->kode_jurnal_penyesuaian}}" class="btn btn-danger" id="hapus-jurnal">Hapus</button> -->
                                            <a href="" class="btn btn-danger btn-hapus-penyesuaian" data-id="{{$dok->kode_jurnal_penyesuaian}}">Delete</a>
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