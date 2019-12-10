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
                                <h4>Tambah Golongan Akun</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <form action="/dataGolAkun/create" method="post" role="form" autocomplete="off">
                                            {{csrf_field()}}
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <label>Nama Golongan Akun</label>
                                                  <input type="text" class="form-control" name="nm_golongan" autocomplete="off">
                                                  @if($errors->has('nm_golongan'))
                                                    <div class="text-danger" style="padding: 5px;">
                                                        {{ $errors->first('nm_golongan')}}
                                                    </div>
                                                  @endif
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke">
                                    <div style="float: right;">
                                        <a href="{{url('/dataGolAkun')}}" class="btn btn-warning">Kembali</a>
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