@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataAkun')}}">Kelola Akun</a></div>
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
                        <h4>Kelola Akun</h4>
                    </div>
                    <div class="card-body">
                        <div style="margin:0px 0px 10px 0px;"> 
                            <a href="{{url('/tambahDataAkun')}}"class="btn btn-primary" style="border-color: #95B9C7;color: #ffffff;">Tambah Data Akun</a>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped" id="data-user">
                            <thead>
                                  <tr>
                                    <th>Kode Akun</th>
                                    <!-- <th>Role</th> -->
                                    <th>Nama Akun</th>
                                    <!-- <th>Nama</th> -->
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($DataAkun as $index => $dok)
                                <tr>
                                    <td style="color: #000000;">{{$dok->no_akun}}</td>
                                    <!-- @if($dok->id_role == 1)
                                    <td><div class="badge badge-success">Admin</div></td>
                                    @elseif($dok->id_role == 2)
                                    <td><div class="badge badge-warning">Pemilik</div></td>
                                    @elseif($dok->id_role == 3)
                                    <td><div class="badge badge-primary">Akuntan</div></td>
                                    @else
                                    <td><div class="badge badge-info">Kasir</div></td>
                                    @endif -->
                                    <!-- <td style="color: #000000;">{{$dok->nm_akun}}</td> -->
                                    <td><span style="color: #000000;">{{$dok->nm_akun}} </span> <br> 
                                        @if($dok->gol_akun == 1)
                                        <span style="color: #78828a;">Aset</span>
                                        @elseif($dok->gol_akun == 2)
                                        <span style="color: #78828a;">Kewajiban</span>
                                        @elseif($dok->gol_akun == 3)
                                        <span style="color: #78828a;">Modal</span>
                                        @elseif($dok->gol_akun == 4)
                                        <span style="color: #78828a;">Pendapatan</span>
                                        @else
                                        <span style="color: #78828a;">Beban</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/dataAkun/edit/{{ $dok->id }}" class="btn btn-warning">Ubah</a>
                                        <a href="/dataAkun/delete/{{ $dok->id }}" class="btn btn-danger">Hapus</a>
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