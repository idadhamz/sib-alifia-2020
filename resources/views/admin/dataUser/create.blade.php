@extends('layouts.master')

        @section('content')
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        @if(session()->has('message_delete'))
        <div class="alert alert-danger">
            {{ session()->get('message_delete') }}
        </div>
        @endif

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-whitesmoke">
                                <h4>Tambah User</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <form action="/dataUser/store" method="post" role="form" autocomplete="off">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                              <label>Role</label>
                                              <select class="form-control" name="id_role">
                                                <option value="1">Admin</option>
                                                <option value="2">Pemohon</option>
                                                <option value="3">Staff Pengembang Kompetensi</option>
                                                <option value="4">Kepala Sub Bagian Pengembang Kompetensi</option>
                                                <option value="5">Binbangkum</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label>Email</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                    <i class="fas fa-user-alt"></i>
                                                  </div>
                                                </div>
                                                <input type="email" class="form-control" name="email" autocomplete="off">
                                              </div>
                                              @if($errors->has('email'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('email')}}
                                                </div>
                                              @endif
                                            </div>
                                            <!-- <div class="form-group">
                                              <label>Nama</label>
                                              <input type="text" class="form-control" name="nama" autocomplete="off">
                                              @if($errors->has('nama'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('nama')}}
                                                </div>
                                              @endif
                                            </div> -->
                                            <div class="row">
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label>Nama Depan</label>
                                                  <input type="text" class="form-control" name="nama_depan" autocomplete="off">
                                                </div>
                                                @if($errors->has('nama_depan'))
                                                  <div class="text-danger" style="padding: 5px;">
                                                      {{ $errors->first('nama_depan')}}
                                                  </div>
                                                @endif
                                              </div>
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label>Nama Belakang</label>
                                                  <input type="text" class="form-control" name="nama_belakang" autocomplete="off">
                                                </div>
                                                @if($errors->has('nama_belakang'))
                                                  <div class="text-danger" style="padding: 5px;">
                                                      {{ $errors->first('nama_belakang')}}
                                                  </div>
                                                @endif
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke">
                                    <hr/>
                                    <div style="float: left;">
                                        <a href="{{url('/dataUser/index')}}" class="btn btn-warning">Kembali</a>
                                    </div>
                                    <div style="float: right;">
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
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