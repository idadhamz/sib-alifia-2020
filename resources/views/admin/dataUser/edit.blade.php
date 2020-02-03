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
                                <h4>Ubah User</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        @foreach($data_user_edit as $dob)
                                        <form action="/dataUser/update/{{$dob->id}}" method="post" role="form" autocomplete="off">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                              <label>Role</label>
                                              <select class="form-control" name="id_role">
                                                <option value="1" {{ $dob->id_role == '1' ? 'selected' : '' }}>Admin</option>
                                                <option value="2" {{ $dob->id_role == '2' ? 'selected' : '' }}>Pemohon</option>
                                                <option value="3" {{ $dob->id_role == '3' ? 'selected' : '' }}>Staff Pengembang Kompetensi</option>
                                                <option value="4" {{ $dob->id_role == '4' ? 'selected' : '' }}>Kepala Sub Bagian Pengembang Kompetensi</option>
                                                <option value="5" {{ $dob->id_role == '5' ? 'selected' : '' }}>Binbangkum</option>
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
                                                <input type="text" class="form-control" name="id" value="{{$dob->id}}" autocomplete="off" style="display: none;">
                                                <input type="email" class="form-control" name="email" value="{{$dob->email}}" autocomplete="off">
                                              </div>
                                              @if($errors->has('email'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('email')}}
                                                </div>
                                              @endif
                                            </div>
                                            <div class="form-group">
                                              <label>Nama</label>
                                              <input type="text" class="form-control" name="name" value="{{$dob->name}}" autocomplete="off">
                                              @if($errors->has('name'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('name')}}
                                                </div>
                                              @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke">
                                    <div style="float: left;">
                                        <a href="{{url('/dataUser/index')}}" class="btn btn-warning">Kembali</a>
                                    </div>
                                    <div style="float: right;">
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
                            @endforeach
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