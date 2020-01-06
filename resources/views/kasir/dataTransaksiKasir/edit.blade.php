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
                                <h4>Ubah Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                      @foreach($DataTransaksiEdit as $dob)
                                        <form action="/dataTransaksiKasir/update/{{$dob->id_transaksi}}" method="post" role="form" autocomplete="off">
                                            {{csrf_field()}}
                                            <div class="row">
                                              <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                  <label>Jenis Transaksi</label>
                                                  <select class="form-control" name="nm_transaksi">
                                                    <option value="1" {{ $dob->nm_transaksi == '1' ? 'selected' : '' }}>Pemasukan</option>
                                                    <option value="2" {{ $dob->nm_transaksi == '2' ? 'selected' : '' }}>Pengeluaran</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <!-- <div class="col-sm-12 col-md-7">
                                                <div class="form-group">
                                                  <label>Nominal</label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">
                                                        Rp.
                                                      </div>
                                                    </div>
                                                    <input type="number" class="form-control nominal_transaksi" name="nominal_transaksi" value="{{$dob->nominal_transaksi}}" autocomplete="off">
                                                    @if($errors->has('nominal_transaksi'))
                                                    <div class="text-danger" style="padding: 5px;">
                                                      {{ $errors->first('nominal_transaksi')}}
                                                    </div>
                                                    @endif
                                                  </div>
                                                </div>
                                              </div> -->
                                            </div>
                                            <!-- <div class="form-group">
                                              <label>Nominal</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                    Rp.
                                                  </div>
                                                </div>
                                                <input type="number" class="form-control nominal" name="nominal" autocomplete="off">
                                                @if($errors->has('nominal'))
                                                <div class="text-danger" style="padding: 5px;">
                                                  {{ $errors->first('nominal')}}
                                                </div>
                                                @endif
                                              </div>
                                            </div> -->
                                            <div class="form-group">
                                              <label>Deskripsi</label>
                                              <div class="input-group">
                                                <!-- <input type="text" class="form-control" name="deskripsi" autocomplete="off"> -->
                                                <textarea class="form-control" cols="3" name="deskripsi" autocomplete="off">{{$dob->deskripsi}}</textarea>
                                                @if($errors->has('deskripsi'))
                                                <div class="text-danger" style="padding: 5px;">
                                                  {{ $errors->first('deskripsi')}}
                                                </div>
                                                @endif
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                  <label>Jenis Pembayaran</label>
                                                  <select class="form-control" name="jenis">
                                                    <option value="Tunai" {{ $dob->jenis == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                                                    <option value="Hutang" {{ $dob->jenis == 'Hutang' ? 'selected' : '' }}>Hutang</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke">
                                    <div style="float: right;">
                                        <a href="{{url('/dataTransaksiKasir')}}" class="btn btn-warning">Kembali</a>
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