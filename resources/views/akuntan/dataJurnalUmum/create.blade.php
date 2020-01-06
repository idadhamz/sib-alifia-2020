@extends('layouts.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
                    <!-- <div class="card">
                      <div class="card-header">
                            <div style="width:100%;">
                                <td>
                                    <a href="/dataJurnalUmum" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                                </td>
                            </div>
                            <div style="width:100%;">
                                <h4>Tambah Jurnal Penyesuaian</h4>
                            </div>
                      </div>
                      <div class="card-body">
                        <form action="/dataJurnalPenyesuaian/cari" method="get" role="form" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Pembuatan</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="tanggal" id="tanggal_pembuatan" autocomplete="off">
                                    </div>
                                    @if($errors->has('tanggal'))
                                        <div class="text-danger" style="padding: 5px;">
                                            {{ $errors->first('tanggal')}}
                                        </div>
                                    @endif
                                </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                      <div class="form-group">
                                        <label>No Jurnal Umum</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="sampai-tanggal" name="no_jurnal_umum" autocomplete="off">
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            Contoh: JU-DEC19
                                        </small>
                                        @if($errors->has('no_jurnal_umum'))
                                            <div class="text-danger" style="padding: 5px;">
                                                {{ $errors->first('no_jurnal_umum')}}
                                            </div>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <div class="form-group">
                                            <label>Nama Jurnal Umum</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nm_jurnal_umum" autocomplete="off">
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Contoh: Jurnal Umum Desember 2019
                                            </small>
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
                    </div> -->
                    <div class="card">
                      <div class="card-header">
                        <div style="width:100%;">
                          <div style="width:100%;">
                            <td>
                              <a href="/dataJurnalUmum" class="btn btn-warning"><i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
                            </td>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <!-- <td>
                            <a href="javascript::void(0)" onclick="tambah_akun();" class="btn btn-success"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Akun</a>
                          </td> -->
                          <!-- <hr /> -->
                          <!-- <p>Form Jurnal Umum</p> -->
                          <!-- <hr /> -->
                          <p style="margin-top:10px;font-weight: bold;">Input Jurnal Umum</p>
                          <hr />
                          <div class="row">
                            <div class="col-sm-12 col-md-4">
                              <div class="form-group">
                                <label>Tanggal Pembuatan</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="tanggal" id="tanggal_pembuatan" autocomplete="off">
                                </div>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  Contoh: 2020-01-04 atau 4 Jan 2020
                                </small>
                                @if($errors->has('tanggal'))
                                <div class="text-danger" style="padding: 5px;">
                                  {{ $errors->first('tanggal')}}
                                </div>
                                @endif
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                              <div class="form-group">
                                <label>No Jurnal Umum</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" id="no_jurnal_umum" name="no_jurnal_umum" autocomplete="off">
                                </div>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  Contoh: JU-DEC19
                                </small>
                                @if($errors->has('no_jurnal_umum'))
                                <div class="text-danger" style="padding: 5px;">
                                  {{ $errors->first('no_jurnal_umum')}}
                                </div>
                                @endif
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-5">
                              <div class="form-group">
                                <label>Nama Jurnal Umum</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" id="nm_jurnal_umum" name="nm_jurnal_umum" autocomplete="off">
                                </div>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  Contoh: Jurnal Umum Desember 2019
                                </small>
                                @if($errors->has('nm_jurnal_umum'))
                                <div class="text-danger" style="padding: 5px;">
                                  {{ $errors->first('nm_jurnal_umum')}}
                                </div>
                                @endif
                              </div>
                            </div>
                          </div>
                          <hr />
                          <form id="form-tambah-akun" style="width: 80%;margin: 0 auto;">
                            <div class="row">
                              <div class="col-sm-12 col-md-2">
                                <div class="form-group">
                                  <label>Pilih Bulan</label>
                                  <select class="form-control" name="nama_bulan" id="nama_bulan" class="nama_bulan">
                                    <option value="0"></option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                  <label>Transaksi</label>
                                  <select class="form-control" name="id_transaksi" id="id_transaksi" class="id_transaksi" style="font-size: 10px;"></select>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label>Nominal</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        Rp.
                                      </div>
                                    </div>
                                    <input type="number" class="form-control" id="nominal" min="0" autocomplete="off">
                                  </div>
                                  <small id="passwordHelpBlock" class="form-text text-muted">
                                    *) Perhatikan Nominalnya
                                  </small>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label>Akun</label>
                                  <!-- <input type="text" class="form-control" name="nm_akun" autocomplete="off"> -->
                                  <select class="form-control" name="no_akun" id="no_akun">
                                    <option value="0">--Pilih Akun--</option>
                                    @foreach($DataAkun as $dpo)
                                    <option value="{{$dpo->no_akun}}">No. {{$dpo->no_akun}} ({{$dpo->nm_akun}})</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label>Nama Akun</label>
                                  <input type="text" class="form-control" name="nm_akun" id="nm_akun" autocomplete="off" readonly="readonly">
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label>Jenis</label>
                                  <select class="form-control" name="pilihan_akun" id="pilihan_akun">
                                    <option value="0">--Pilih Jenis--</option>
                                    <option value="1">Bertambah</option>
                                    <option value="2">Berkurang</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                  <label>Nominal Debit</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        Rp.
                                      </div>
                                    </div>
                                    <input type="number" class="form-control" name="nominal_debit" id="nominal_debit" min="0" autocomplete="off" readonly="readonly">
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                  <label>Nominal Kredit</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        Rp.
                                      </div>
                                    </div>
                                    <input type="number" class="form-control" name="nominal_kredit" id="nominal_kredit" min="0" autocomplete="off" readonly="readonly">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 col-md-12">
                                <button href="javascript::void(0)" id="tambah-akun" class="btn btn-info" type="submit" style="width: 100%;">Tambah Data</button>
                              </div>
                            </div>
                          </form>
                          <hr />
                          <div class="table-responsive">
                            <table class="table table-md">
                                <!-- <thead>
                                    <tr>
                                        <th>No. Akun</th>
                                        <th>Akun</th>
                                        <th>Nominal Debit</th>
                                        <th>Nominal Kredit</th>
                                        <th>Aksi</th>
                                    </tr>
                                  </thead> -->
                                </table>
                              </div>
                              <p style="margin-top:10px;font-weight: bold;">Data Jurnal Umum</p>
                              <hr />
                              <div class="table-responsive" style="overflow-x: hidden;">
                                <table id="data-jurnal-umum" class="table table-striped table-md" style="text-align: center;">
                                  <thead>
                                    <tr>
                                      <th style="display: none;">Nama Bulan</th>
                                      <th style="display: none;">Id Transaksi</th>
                                      <th>No. Akun</th>
                                      <th>Akun</th>
                                      <th>Nominal Debit</th>
                                      <th>Nominal Kredit</th>
                                      <th>Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody id="data-jurnal-umum">
                                    <!-- <tr>

                                    </tr> -->
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <td style="display: none;"></td>
                                      <td style="display: none;"></td>
                                      <td></td>
                                      <td></td>
                                      <td><p style="font-weight: bold;">Selisih</p></td>
                                      <td width="200px;">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              Rp.
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" name="selisih" id="selisih" autocomplete="off" value="0" readonly="readonly">
                                        </div>
                                      </td>
                                      <td></td>
                                    </tr>
                                    <tr style="background-color: #F5F5F5">
                                      <td style="display: none;"></td>
                                      <td style="display: none;"></td>
                                      <td></td>
                                      <td></td>
                                      <td width="200px;">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              Rp.
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" name="total_debit" id="total_debit" autocomplete="off" value="0" readonly="readonly">
                                        </div>
                                      </td>
                                      <td width="200px;">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              Rp.
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" name="total_kredit" id="total_kredit" autocomplete="off" value="0" readonly="readonly">
                                        </div>
                                      </td>
                                      <td>
                                        <span id="text-balance" style="color: green;visibility: hidden;font-weight: bold;"><i class="fa fa-check-circle mr-2"></i>Balance</span><br>
                                        <span id="text-belum-balance" style="color: red;visibility: hidden;font-weight: bold;"><i class="fa fa-times-circle mr-2"></i>Balance</span>
                                      </td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                              <button href="javascript::void(0)" id="simpan-jurnal" class="btn btn-info" type="submit" style="width: 100%;margin-top: 10px;">Simpan</button>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header">
                              <h4>Data Transaksi</h4>
                            </div>
                            <div class="card-body">
                              <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Pemasukan</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Pengeluaran</a>
                                </li>
                              </ul>
                              <br>
                              <div class="tab-content" id="myTab3Content">
                                <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                                  <div class="table-responsive">
                                    <table class="table table-striped" id="data-pemasukan">
                                      <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Tanggal Transaksi</th>
                                          <th style="width: 550px;">Transaksi</th>
                                          <th>Jenis Pembayaran</th>
                                          <!-- <th>Nominal</th> -->
                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($transaksiPemasukan as $index => $dok)
                                        <tr>
                                          <td>{{$index +1}}</td>
                                          <td style="color: #000000;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
                                          <td><span style="color: #000000;">{{$dok->deskripsi}} </span><br>
                                              <!-- <span style="color: #333;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span> -->
                                          </td>
                                          <td><span style="color: #000000;">{{$dok->jenis}} </span></td>
                                          <!-- <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td> -->
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                                  <div class="table-responsive">
                                    <table class="table table-striped" id="data-pengeluaran">
                                      <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Tanggal Transaksi</th>
                                          <th style="width: 550px;">Transaksi</th>
                                          <th>Jenis Pembayaran</th>
                                          <!-- <th>Nominal</th> -->
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($transaksiPengeluaran as $index => $dok)
                                        <tr>
                                          <td>{{$index +1}}</td>
                                          <td style="color: #000000;">{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d/%m/%Y') }}</td>
                                          <td><span style="color: #000000;">{{$dok->deskripsi}} </span><br>
                                              <!-- <span style="color: #333;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span> -->
                                          </td>
                                          <td><span style="color: #000000;">{{$dok->jenis}} </span></td>
                                          <!-- <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td> -->
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
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
            <script>
    // var i = 1;
    // function tambah_akun() {   
    //     i++; 
    //     document.getElementById("input-jurnal-umum").insertRow(0).innerHTML = '<tr id="baris-akun"><td width="135px;"><div class="form-group"><select class="form-control" name="no_akun" id="no_akun">@foreach($DataAkun as $dpo)<option value="{{$dpo->no_akun}} selected">No. {{$dpo->no_akun}}</option>@endforeach</select></div></td><td width="210px;"><div class="input-group"><input type="text" class="form-control" name="nm_akun" id="nm_akun" autocomplete="off" readonly="readonly"></div></td><td width="200px;"><input id="nominal_debit" class="form-control" name="nominal_debit" type="number" autocomplete="off"></td><td width="200px;"><input id="nominal_kredit" class="form-control" name="nominal_kredit" type="number" autocomplete="off"></td><td><a href="javascript::void(0)" onclick="hapus_akun(this)" class="btn btn-danger hapus-akun">Hapus</a></td></tr>';
    // }

    // console.log(i);

    // function hapus_akun(o) {
    //     //no clue what to put here?
    //     var p=o.parentNode.parentNode;
    //     p.parentNode.removeChild(p);
    // }
  </script>
  @endsection