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
                            <a href="{{url('/dataUser/create')}}"class="btn btn-outline-primary" style="font-weight: bold;font-size: 13px;border-radius: 0px;border-width: 1.5px;">Tambah Data</a>
                        </div>
                        <hr/>
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-md" id="data-user">
                            <thead style="background-color: #95b9c7;">
                                  <tr>
                                    <th style="color: white;">No</th>
                                    <!-- <th style="color: white;">Role</th> -->
                                    <th style="color: white;">Email</th>
                                    <th style="color: white;">Nama</th>
                                    <th style="color: white;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_user as $index => $dok)
                                <tr>
                                    <td style="color: #000000;">{{$index +1}}</td>
                                    <td style="color: #000000;">{{$dok->email}}</td>
                                    <td><span style="color: #000000;">Sdr. {{$dok->name}} </span> <br> 
                                        @if($dok->id_role == 1)
                                        <span style="color: #78828a;">Admin</span>
                                        @elseif($dok->id_role == 2)
                                        <span style="color: #78828a;">Pemohon</span>
                                        @elseif($dok->id_role == 3)
                                        <span style="color: #78828a;">Staff Pengembang Kompetensi</span>
                                        @elseif($dok->id_role == 4)
                                        <span style="color: #78828a;">Kepala Sub Bagian Pengembang Kompetensi</span>
                                        @else
                                        <span style="color: #78828a;">Binbangkum</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/dataUser/edit/{{ $dok->id }}" class="btn btn-outline-warning" style="border-radius: 0px;border-width: 1.5px;"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="/dataUser/delete/{{ $dok->id }}" class="btn btn-outline-danger" style="border-radius: 0px;border-width: 1.5px;"><i class="fas fa-trash-alt"></i></a>
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