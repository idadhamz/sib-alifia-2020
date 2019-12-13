@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                            <div style="width:100%;">
                                <td>
                                    <a href="/dataJurnalPenyesuaian" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                                </td>
                                <hr />
                                <!-- <br> -->
                                <h4 style="margin-top:10px;">Tambah Jurnal Penyesuaian</h4>
                            </div>
                            <!-- <div style="width:100%;">
                                <h4>Tambah Jurnal Penyesuaian</h4>
                            </div> -->
                      </div>
                      <div class="card-body">
                        <form action="/dataJurnalPenyesuaian/cari" method="get" role="form" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Pembuatan</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="tanggal" autocomplete="off">
                                    </div>
                                    @if($errors->has('tanggal'))
                                        <div class="text-danger" style="padding: 5px;">
                                            {{ $errors->first('tanggal')}}
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>No Jurnal Penyesuaian</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="no_jurnal_umum" autocomplete="off">
                                        </div>
                                        @if($errors->has('no_jurnal_umum'))
                                            <div class="text-danger" style="padding: 5px;">
                                                {{ $errors->first('no_jurnal_umum')}}
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label>Nama Jurnal Penyesuaian</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nm_jurnal_umum" autocomplete="off">
                                            </div>
                                            @if($errors->has('nm_jurnal_umum'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('nm_jurnal_umum')}}
                                                </div>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <td>
                            <a href="javascript::void(0)" class="btn btn-success"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Akun</a>
                        </td>
                        <hr />
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No. Akun</th>
                                        <th>Nama Akun</th>
                                        <th>Nominal Debit</th>
                                        <th>Nominal Kredit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="no_akun" autocomplete="off">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nm_akun" autocomplete="off">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="nominal_debit" autocomplete="off">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="nominal_kredit" autocomplete="off">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="/dataJurnalPenyesuaian/delete" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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