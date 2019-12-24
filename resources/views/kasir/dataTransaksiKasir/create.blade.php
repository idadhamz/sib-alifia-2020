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
                                <h4>Tambah Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <form action="/dataTransaksiKasir/create" method="post" role="form" autocomplete="off">
                                            {{csrf_field()}}
                                            <div class="row">
                                              <div class="col-sm-12 col-md-5">
                                                <div class="form-group">
                                                  <label>Tanggal Transaksi</label>
                                                  <div class="input-group">
                                                    <input type="text" class="form-control tanggal-transaksi" autocomplete="off" readonly="readonly">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-12 col-md-5">
                                                <div class="form-group">
                                                  <label>Jenis Transaksi</label>
                                                  <select class="form-control" name="nm_transaksi">
                                                    <option value="1">Pemasukan</option>
                                                    <option value="2">Pengeluaran</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-sm-12 col-md-7">
                                                <div class="form-group">
                                                  <label>Nominal</label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">
                                                        Rp.
                                                      </div>
                                                    </div>
                                                    <input type="number" class="form-control nominal_transaksi" name="nominal_transaksi" autocomplete="off">
                                                    @if($errors->has('nominal_transaksi'))
                                                    <div class="text-danger" style="padding: 5px;">
                                                      {{ $errors->first('nominal_transaksi')}}
                                                    </div>
                                                    @endif
                                                  </div>
                                                </div>
                                              </div>
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
                                                <textarea class="form-control" cols="3" name="deskripsi" autocomplete="off"></textarea>
                                                @if($errors->has('deskripsi'))
                                                <div class="text-danger" style="padding: 5px;">
                                                  {{ $errors->first('deskripsi')}}
                                                </div>
                                                @endif
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-12 col-md-5">
                                                <div class="form-group">
                                                  <label>Jenis Pembayaran</label>
                                                  <select class="form-control" name="jenis">
                                                    <option value="Tunai">Tunai</option>
                                                    <option value="Hutang">Hutang</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
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