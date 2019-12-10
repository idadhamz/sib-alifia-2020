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
                                <h4>Tambah Akun</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <form action="/dataAkun/create" method="post" role="form" autocomplete="off">
                                            {{csrf_field()}}
                                            <div class="row">
                                              <div class="col-md-3">
                                                <div class="form-group">
                                                  <label>No Akun</label>
                                                  <div class="input-group">
                                                    <input type="number" class="form-control" name="no_akun" autocomplete="off">
                                                  </div>
                                                  @if($errors->has('no_akun'))
                                                    <div class="text-danger" style="padding: 5px;">
                                                        {{ $errors->first('no_akun')}}
                                                    </div>
                                                  @endif
                                                </div>
                                              </div>
                                              <div class="col-md-9">
                                                <div class="form-group">
                                                  <label>Nama Akun</label>
                                                  <input type="text" class="form-control" name="nm_akun" autocomplete="off">
                                                  @if($errors->has('nm_akun'))
                                                    <div class="text-danger" style="padding: 5px;">
                                                        {{ $errors->first('nm_akun')}}
                                                    </div>
                                                  @endif
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label>Tipe Akun</label>
                                              <select class="form-control" name="kode_golongan">
                                                <option value="1">Aset</option>
                                                <option value="2">Kewajiban</option>
                                                <option value="3">Modal</option>
                                                <option value="4">Pendapatan</option>
                                                <option value="5">Beban</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label>Saldo Normal</label>
                                              <select class="form-control" name="saldo_normal">
                                                <option value="1">Debit</option>
                                                <option value="2">Kredit</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke">
                                    <div style="float: left;">
                                        <a href="{{url('/dataAkun')}}" class="btn btn-warning">Kembali</a>
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