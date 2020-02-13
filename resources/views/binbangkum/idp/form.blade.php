@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/idp/index')}}">Data Izin Dinas Perpanjangan</a></div>
                  </div>
              </div>

              <div class="section-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Data Pemohonan Surat Izin Belajar</h4>
                      </div>
                      <div class="card-body">
                        <!-- isi form -->
                        <div class="row">
                          <div class="col-8">
                            @foreach($data_idp_create as $row)
                            <form action="/idp/store" method="post" role="form" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="form-group">
                                <label>Tanggal Pembuatan</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-calendar"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" name="id" id="id" style="display: none;" value="{{ $row->id }}" autocomplete="off">
                                  <input type="text" class="form-control" name="id_berkas" id="id_berkas" style="display: none;" value="{{ $row->id_berkas }}" autocomplete="off">
                                  <input type="text" class="form-control" name="nip" id="nip" style="display: none;" value="{{ $row->nip }}" autocomplete="off">
                                  <input type="text" class="form-control" name="tanggal" id="tanggal" autocomplete="off" readonly>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Nama Pembuat</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-user-alt"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" name="nm_pembuat" id="nm_pembuat" autocomplete="off" value="{{ $name }}" readonly>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Upload Izin Dinas Perpanjangan</label>
                                <input type="file" class="form-control" name="izin_dinas_perpanjangan" style="height: auto;">
                                <p>*Ukuran Maksimal Berkas 2MB</p>
                              </div>
                              <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control" id="keterangan" rows="3" autocomplete="off"></textarea>
                                @if($errors->has('keterangan'))
                                <div class="text-danger" style="padding: 5px;border: 1px solid #eee;">
                                  {{ $errors->first('keterangan')}}
                                </div>
                                @endif
                              </div>
                            </div>
                          </div>  
                          <div class="card-footer" style="padding: 20px 0px;">
                            <hr/>
                            <div style="float: left;">
                              <a href="{{url('/idp/index')}}" class="btn btn-warning">Kembali</a>
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
              </div>
            </section>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection