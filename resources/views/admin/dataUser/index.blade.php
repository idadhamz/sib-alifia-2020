@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataUser')}}">Data User</a></div>
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
                        <h4>Data User</h4>
                    </div>
                    <div class="card-body">
                        <div style="margin:0px 0px 10px 0px;"> 
                            <a href="{{url('/tambahDataUser')}}"class="btn btn-primary" style="border-color: #95B9C7;color: #ffffff;">Tambah Data User</a>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-md" id="data-user">
                            <thead>
                                  <tr>
                                    <th>No</th>
                                    <!-- <th>Role</th> -->
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($DataUser as $index => $dok)
                                <tr>
                                    <td style="color: #000000;">{{$index +1}}</td>
                                    <!-- @if($dok->id_role == 1)
                                    <td><div class="badge badge-success">Admin</div></td>
                                    @elseif($dok->id_role == 2)
                                    <td><div class="badge badge-warning">Pemilik</div></td>
                                    @elseif($dok->id_role == 3)
                                    <td><div class="badge badge-primary">Akuntan</div></td>
                                    @else
                                    <td><div class="badge badge-info">Kasir</div></td>
                                    @endif -->
                                    <td style="color: #000000;">{{$dok->username}}</td>
                                    <td><span style="color: #000000;">Sdr. {{$dok->nama}} </span> <br> 
                                        @if($dok->id_role == 1)
                                        <span style="color: #78828a;">Admin</span>
                                        @elseif($dok->id_role == 2)
                                        <span style="color: #78828a;">Pemilik</span>
                                        @elseif($dok->id_role == 3)
                                        <span style="color: #78828a;">Akuntan</span>
                                        @else
                                        <span style="color: #78828a;">Kasir</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/dataUser/edit/{{ $dok->id }}" class="btn btn-warning">Ubah</a>
                                        <a href="/dataUser/delete/{{ $dok->id }}" class="btn btn-danger">Hapus</a>
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