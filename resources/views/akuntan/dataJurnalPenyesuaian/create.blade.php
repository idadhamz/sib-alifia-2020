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
                                        <input type="date" class="form-control" name="tanggal" id="tanggal-jurnal-penyesuaian" autocomplete="off">
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
                                            <input type="text" class="form-control" name="no_jurnal_penyesuaian" autocomplete="off">
                                        </div>
                                        @if($errors->has('no_jurnal_penyesuaian'))
                                            <div class="text-danger" style="padding: 5px;">
                                                {{ $errors->first('no_jurnal_penyesuaian')}}
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label>Nama Jurnal Penyesuaian</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nm_jurnal_penyesuaian" autocomplete="off">
                                            </div>
                                            @if($errors->has('nm_jurnal_penyesuaian'))
                                                <div class="text-danger" style="padding: 5px;">
                                                    {{ $errors->first('nm_jurnal_penyesuaian')}}
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
                            <a href="javascript::void(0)" onclick="tambah_akun();" class="btn btn-success"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Akun</a>
                        </td>
                        <hr />
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Akun</th>
                                        <th>No. Akun</th>
                                        <th>Nominal Debit</th>
                                        <th>Nominal Kredit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="input-jurnal-penyesuaian">
                                    <tr id="baris-akun">
                                        <td>
                                            <div class="input-group">
                                                <!-- <input type="text" class="form-control" name="nm_akun" autocomplete="off"> -->
                                                <select class="form-control" name="nm_akun">
                                                    @foreach($DataAkun as $dpo)
                                                        <option value="{{$dpo->nm_akun}}">{{$dpo->nm_akun}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td width="125px;">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="no_akun" autocomplete="off" readonly="readonly">
                                            </div>
                                        </td>
                                        <td width="200px;">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="nominal_debit" autocomplete="off">
                                            </div>
                                        </td>
                                        <td width="200px;">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="nominal_kredit" autocomplete="off">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript::void(0)" onclick="hapus_akun(this)" class="btn btn-danger hapus-akun">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td style="text-align: right;font-weight: bold;">Total</td>
                                        <td width="200px;">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="total_debit" autocomplete="off" readonly="readonly">
                                            </div>
                                        </td>
                                        <td width="200px;">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="total_kredit" autocomplete="off" readonly="readonly">
                                            </div>
                                        </td>
                                        <td>
                                            <span style="color: green;">Balance</span><br>
                                            <span style="color: red;">Belum Balance</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="javascript::void(0)" class="btn btn-success" style="width: 100%;">Simpan</a>
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

<script>
    var i = 1;
    function tambah_akun() {   
        i++; 
        document.getElementById("input-jurnal-penyesuaian").insertRow(0).innerHTML = '<tr id="baris-akun"><td><select class="form-control" name="nm_akun">@foreach($DataAkun as $dpo)<option value="{{$dpo->nm_akun}}">{{$dpo->nm_akun}}</option>@endforeach</select></td><td width="125px;"><input id="no_akun'+i+'" class="form-control" name="no_akun" type="number" autocomplete="off" readonly="readonly"></td><td width="200px;"><input id="nominal_debit'+i+'" class="form-control" name="nominal_debit" type="number" autocomplete="off"></td><td width="200px;"><input id="nominal_kredit'+i+'" class="form-control" name="nominal_kredit" type="number" autocomplete="off"></td><td><a href="javascript::void(0)" onclick="hapus_akun(this)" class="btn btn-danger hapus-akun">Hapus</a></td></tr>';
    }

    console.log(i);

    function hapus_akun(o) {
        //no clue what to put here?
        var p=o.parentNode.parentNode;
        p.parentNode.removeChild(p);
    }

    console.log(document.getElementById("input-jurnal-penyesuaian tr").length());
</script>
<!-- /.modal -->
<!-- End Row -->
@endsection