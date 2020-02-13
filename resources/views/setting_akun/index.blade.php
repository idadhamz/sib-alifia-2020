@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/setting-akun/index')}}">Setting Akun</a></div>
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
                        <h4>Setting Akun</h4>
                      </div>
                      <div class="card-body">
                          <div class="row">
                            <div class="col-12" style="padding: 50px;text-align: center;">
                              @foreach($data_akun as $akun)
                                <span style="font-weight: bold;font-size: 18px;">{{ $akun->name }}</span>
                                <p style="margin-bottom: 5px;">@if($akun->id_role == 1)
                                  <span style="color: #78828a;font-style: italic;font-weight: bold">Admin</span>
                                  @elseif($akun->id_role == 2)
                                  <span style="color: #78828a;font-style: italic;font-weight: bold">Pemohon</span>
                                  @elseif($akun->id_role == 3)
                                  <span style="color: #78828a;font-style: italic;font-weight: bold">Staff Pengembang Kompetensi</span>
                                  @elseif($akun->id_role == 4)
                                  <span style="color: #78828a;font-style: italic;font-weight: bold">Kepala Sub Bagian Pengembang Kompetensi</span>
                                  @else
                                  <span style="color: #78828a;font-style: italic;font-weight: bold">Binbangkum</span>
                                  @endif
                                </p>
                                <a href="/setting-akun/edit/{{ $akun->id }}"class="btn btn-outline-primary" style="font-weight: bold;font-size: 13px;border-radius: 0px;border-width: 1.5px;"><i class="fas fa-edit" style="margin-right: 5px;"></i>Edit Akun</a>
                                <hr style="margin: 2rem 0px" />
                                <div class="row" style="text-align: center;">
                                  @if($akun->kd_user != null)
                                  <div class="col-4">
                                      <span style="font-weight: bold;font-size: 16px;">Kode User</span>
                                      <p style="text-decoration: underline;">{{ $akun->kd_user }}</p>
                                  </div>
                                  <div class="col-4">
                                      <span style="font-weight: bold;font-size: 16px;">Nama</span>
                                      <p style="text-decoration: underline;">{{ $akun->name }}</p>
                                  </div>
                                  <div class="col-4">
                                      <span style="font-weight: bold;font-size: 16px;">Email</span>
                                      <p style="text-decoration: underline;">{{ $akun->email }}</p>
                                  </div>
                                  @else
                                  <div class="col-6">
                                      <span style="font-weight: bold;font-size: 16px;">Nama</span>
                                      <p style="text-decoration: underline;">{{ $akun->name }}</p>
                                  </div>
                                  <div class="col-6">
                                      <span style="font-weight: bold;font-size: 16px;">Email</span>
                                      <p style="text-decoration: underline;">{{ $akun->email }}</p>
                                  </div>
                                  @endif
                                </div>
                              @endforeach
                            </div>
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