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
                                        @foreach($DataAkunEdit as $dob)
                                        <form action="/dataAkun/update/{{$dob->id}}" method="post" role="form" autocomplete="off">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                              <label>Tipe Akun</label>
                                              <select class="form-control" name="kode_golongan">
                                                @foreach($DataGolAkun as $index => $dpo)
                                                    <option value="{{$dpo->kode_golongan}}" {{ $dob->kode_golongan == $dpo->kode_golongan ? 'selected' : '' }}>({{$index +1}}) {{$dpo->nm_golongan}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="row">
                                              <div class="col-3">
                                                <div class="form-group">
                                                  <label>No Akun</label>
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" name="no_akun" value="{{$dob->no_akun}}" autocomplete="off">
                                                  </div>
                                                  @if($errors->has('no_akun'))
                                                    <div class="text-danger" style="padding: 5px;">
                                                        {{ $errors->first('no_akun')}}
                                                    </div>
                                                  @endif
                                                </div>
                                              </div>
                                              <div class="col-9">
                                                <div class="form-group">
                                                  <label>Nama Akun</label>
                                                  <input type="text" class="form-control" name="id" value="{{$dob->id}}" autocomplete="off" style="display: none;">
                                                  <input type="text" class="form-control" name="nm_akun" value="{{$dob->nm_akun}}" autocomplete="off">
                                                  @if($errors->has('nm_akun'))
                                                    <div class="text-danger" style="padding: 5px;">
                                                        {{ $errors->first('nm_akun')}}
                                                    </div>
                                                  @endif
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label>Saldo Normal</label>
                                              <select class="form-control" name="saldo_normal">
                                                <option value="1" {{ $dob->saldo_normal == '1' ? 'selected' : '' }}>Debit</option>
                                                <option value="2" {{ $dob->saldo_normal == '2' ? 'selected' : '' }}>Kredit</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke">
                                    <div style="float: right;">
                                        <a href="{{url('/dataAkun')}}" class="btn btn-warning">Kembali</a>
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