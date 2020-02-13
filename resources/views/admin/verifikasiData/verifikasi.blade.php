@extends('layouts.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <!-- <h1>Data Akun</h1> -->
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{url('/verifikasi/index')}}">Verifikasi Berkas</a></div>
      </div>
    </div>

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        {{ session()->get('message') }}
      </div>
    </div>
    @endif

    @if(session()->has('message_edit'))
    <div class="alert alert-warning alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        {{ session()->get('message_edit') }}
      </div>
    </div>
    @endif

    <div class="alert alert-primary alert-has-icon mt-4">
      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
      <div class="alert-body">
        <div class="alert-title">Informasi Verifikasi</div>
        <p>Cari data pemohon yang ingin <strong>diverifikasi melalui Nomor Induk Pegawai Pemohon!</strong></p>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Cari Pemohon</h4>
            </div>
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <label>Nomor Induk Pegawai</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="nip" id="nip" autocomplete="off" required>
                      </div>
                      <small id="passwordHelpBlock" class="form-text text-muted">
                        Contoh: 11170930000055
                      </small>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2">
                    <button type="submit" class="btn btn-icon icon-left btn-primary btn-cari-pemohon" style="margin-top:29px;width: 100%;"><i class="fa fa-search" style="margin-right: 5px;"></i>Cari Pemohon</button>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-10">
                  <form action="" method="post" role="form" autocomplete="off" class="row-verifikasi" id="row-verifikasi">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="id_berkas" id="id_berkas" style="display: none;">
                    <p style="font-weight: bold;">Surat Alasan Perpanjangan dari Pemohon (tertanda dari Atasan Pemohon) : <input type="text" class="form-control" name="surat_alasan_perpanjangan" id="surat_alasan_perpanjangan" readonly></p>
                    <iframe id="frame_surat_alasan_perpanjangan" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Surat Keterangan Sehat Jasmani dari Dokter : <input type="text" class="form-control" name="surat_keterangan_sehat" id="surat_keterangan_sehat" readonly></p>
                    <iframe id="frame_surat_keterangan_sehat" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Fotokopi SK CPNS/PNS : <input type="text" class="form-control" name="sk_cpns_pns" id="sk_cpns_pns" readonly></p>
                    <iframe id="frame_sk_cpns_pns" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Fotokopi SK Jabatan Terakhir (Saat Studi) : <input type="text" class="form-control" name="sk_jabatan_terakhir" id="sk_jabatan_terakhir" readonly></p>
                    <iframe id="frame_sk_jabatan_terakhir" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Fotokopi Surat Keterangan / Rekomendasi / Pengumuman Resmi Lulus Diterima dari Tempat Studi : <input type="text" class="form-control" name="sk_lulus" id="sk_lulus" readonly></p>
                    <iframe id="frame_sk_lulus" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Fotokopi Jaminan Pembiayaan Tugas Belajar : <input type="text" class="form-control" name="jam_pem_belajar" id="jam_pem_belajar" readonly></p>
                    <iframe id="frame_jam_pem_belajar" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Surat Rekomendasi Perpanjangan Studi dari Tempat Studi : <input type="text" class="form-control" name="rek_per_studi" id="rek_per_studi" readonly></p>
                    <iframe id="frame_rek_per_studi" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Fotokopi Surat Persetujuan Perpanjangan Penugasan Studi dari Sekretariat Negara (SETNEG) jika studi ke LUAR NEGERI : <input type="text" class="form-control" name="surat_set_per_pen_studi" id="surat_set_per_pen_studi" readonly></p>
                    <iframe id="frame_surat_set_per_pen_studi" frameborder="0" style="width:80%;min-height:300px;display: none;"></iframe>
                    <hr/>
                    <p style="font-weight: bold;">Verifikasi Pemohon : 
                      <div class="id_status">
                        <select class="form-control" name="id_status">
                          <option value="1">Disetujui</option>
                          <option value="2">Ditolak</option>
                        </select>
                      </div>
                    </p>
                    <hr/>
                    <p style="font-weight: bold;">
                      Keterangan :
                      <textarea name="keterangan" class="form-control" id="keterangan" rows="3" autocomplete="off"></textarea>
                      @if($errors->has('keterangan'))
                      <div class="text-danger" style="padding: 5px;border: 1px solid #eee;">
                        {{ $errors->first('keterangan')}}
                      </div>
                      @endif
                    </p>
                    <hr/>
                    <div style="float: left;">
                      <button type="submit" class="btn btn-success btn-verifikasi" style="border-radius: 0px;">Simpan Data Verifikasi</button>
                    </div>
                  </form>
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
@endsection