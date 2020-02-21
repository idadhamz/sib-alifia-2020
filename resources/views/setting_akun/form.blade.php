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
                                <h4>Edit Akun</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                      @foreach($data_akun_edit as $row)
                                        <form action="/setting-akun/update/{{$row->id}}" method="post" role="form">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                              <label>Email</label>
                                              <input type="text" class="form-control" name="id" value="{{$row->id}}" autocomplete="off" style="display: none;">
                                              <input type="email" class="form-control" name="email" value="{{$row->email}}" autocomplete="off">
                                              @if($errors->has('email'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('email')}}
                                                </div>
                                              @endif
                                            </div>
                                            <div class="form-group">
                                              <label>Password Baru</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                  </div>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="password" autocomplete="off">
                                              </div>
                                              @if($errors->has('password'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('password')}}
                                                </div>
                                              @endif
                                            </div>
                                            <div class="form-group">
                                              <label>Konfirmasi Password Baru</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                  </div>
                                                </div>
                                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" autocomplete="off">
                                              </div>
                                            </div>

                                            @if($id_role != 2)
                                            <span style="font-weight: bold;font-size: 16px;font-size: 16px;">Data Diri</span>
                                            <hr/>
                                            @forelse ($data_petugas as $petugas)
                                            <div class="form-group">
                                              <label>NIP</label>
                                              <input type="text" class="form-control" name="id_petugas" value="{{$petugas->id_petugas}}" style="display: none;" autocomplete="off">
                                              <input type="text" class="form-control" name="nip" value="{{$petugas->nip}}" autocomplete="off">
                                              @if($errors->has('nip'))
                                              <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                                                {{ $errors->first('nip')}}
                                              </div>
                                              @endif
                                            </div>
                                            <div class="form-group">
                                              <label>Nama</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                    <i class="fas fa-user-alt"></i>
                                                  </div>
                                                </div>
                                                <input type="name" class="form-control" name="name" value="{{$row->name}}" autocomplete="off">
                                              </div>
                                              @if($errors->has('name'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('name')}}
                                                </div>
                                              @endif
                                            </div>
                                            <div class="row">
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label>Jenis Kelamin</label>
                                                  <select class="form-control" name="jk" value="{{$petugas->jk}}">
                                                    <option value="L">Pria</option>
                                                    <option value="P">Wanita</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label>No Telp</label>
                                                  <input type="number" class="form-control" name="no_telp" value="{{$petugas->no_telp}}"autocomplete="off">
                                                  @if($errors->has('no_telp'))
                                                  <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                                                    {{ $errors->first('no_telp')}}
                                                  </div>
                                                  @endif
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label>Jabatan</label>
                                              <input type="text" class="form-control" name="jabatan" value="{{$petugas->jabatan}}" autocomplete="off">
                                              @if($errors->has('jabatan'))
                                              <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                                                {{ $errors->first('jabatan')}}
                                              </div>
                                              @endif
                                            </div>
                                            @empty
                                            <div class="form-group">
                                              <label>NIP</label>
                                              <input type="text" class="form-control" name="id_petugas" style="display: none;" autocomplete="off">
                                              <input type="text" class="form-control" name="nip" autocomplete="off">
                                              @if($errors->has('nip'))
                                              <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                                                {{ $errors->first('nip')}}
                                              </div>
                                              @endif
                                            </div>
                                            <div class="form-group">
                                              <label>Nama</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                    <i class="fas fa-user-alt"></i>
                                                  </div>
                                                </div>
                                                <input type="name" class="form-control" name="name" value="{{$row->name}}" autocomplete="off">
                                              </div>
                                              @if($errors->has('name'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('name')}}
                                                </div>
                                              @endif
                                            </div>
                                            <div class="row">
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label>Jenis Kelamin</label>
                                                  <select class="form-control" name="jk">
                                                    <option value="L">Pria</option>
                                                    <option value="P">Wanita</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label>No Telp</label>
                                                  <input type="number" class="form-control" name="no_telp"autocomplete="off">
                                                  @if($errors->has('no_telp'))
                                                  <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                                                    {{ $errors->first('no_telp')}}
                                                  </div>
                                                  @endif
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label>Jabatan</label>
                                              <input type="text" class="form-control" name="jabatan" autocomplete="off">
                                              @if($errors->has('jabatan'))
                                              <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                                                {{ $errors->first('jabatan')}}
                                              </div>
                                              @endif
                                            </div>
                                            @endforelse
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke">
                                    <hr/>
                                    <div style="float: left;">
                                        <a href="{{url('/setting-akun/index')}}" class="btn btn-warning">Kembali</a>
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