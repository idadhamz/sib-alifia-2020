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
              <h4>Lihat Berkas Pendukung</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  @foreach($berkas_pemohon_view as $dob)
                  <form method="post" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div style="padding: 0px 30px;">
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Surat Alasan Perpanjangan dari Pemohon (tertanda dari Atasan Pemohon)</label>
                        @if($dob->surat_alasan_perpanjangan != null)
                        <iframe src="<?php echo asset("$dob->surat_alasan_perpanjangan")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Surat Alasan Perpanjangan dari Pemohon (tertanda dari Atasan Pemohon) Belum, segera lengkapi berkasnya</p>
                        @endif
                        <!-- <input type="file" class="form-control" name="surat_alasan_perpanjangan" style="height: auto;"> -->
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Surat Keterangan Sehat Jasmani dari Dokter</label>
                        @if($dob->surat_keterangan_sehat != null)
                        <iframe src="<?php echo asset("$dob->surat_keterangan_sehat")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Surat Keterangan Sehat Jasmani dari Dokter Belum, segera lengkapi berkasnya</p>
                        @endif
                        <!-- <input type="file" class="form-control" name="surat_keterangan_sehat" style="height: auto;"> -->
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;width: 100%;">Fotokopi SK CPNS/PNS</label>
                        @if($dob->sk_cpns_pns != null)
                        <iframe src="<?php echo asset("$dob->sk_cpns_pns")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Fotokopi SK CPNS/PNS Belum, segera lengkapi berkasnya</p>
                        @endif
                        <!-- <input type="file" class="form-control" name="surat_keterangan_sehat" style="height: auto;"> -->
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi SK Jabatan Terakhir (Saat Studi)</label>
                        @if($dob->sk_jabatan_terakhir != null)
                        <iframe src="<?php echo asset("$dob->sk_jabatan_terakhir")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Fotokopi SK Jabatan Terakhir (Saat Studi) Belum, segera lengkapi berkasnya</p>
                        @endif
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi Surat Keterangan / Rekomendasi / Pengumuman Resmi Lulus Diterima dari Tempat Studi</label>
                        @if($dob->sk_lulus != null)
                        <iframe src="<?php echo asset("$dob->sk_lulus")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Fotokopi Surat Keterangan / Rekomendasi / Pengumuman Resmi Lulus Diterima dari Tempat Studi Belum, segera lengkapi berkasnya</p>
                        @endif
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi Jaminan Pembiayaan Tugas Belajar</label>
                        @if($dob->jam_pem_belajar != null)
                        <iframe src="<?php echo asset("$dob->jam_pem_belajar")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Fotokopi Jaminan Pembiayaan Tugas Belajar Belum, segera lengkapi berkasnya</p>
                        @endif
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Surat Rekomendasi Perpanjangan Studi dari Tempat Studi</label>
                        @if($dob->rek_per_studi != null)
                        <iframe src="<?php echo asset("$dob->rek_per_studi")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Surat Rekomendasi Perpanjangan Studi dari Tempat Studi Belum, segera lengkapi berkasnya</p>
                        @endif
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi Surat Persetujuan Perpanjangan Penugasan Studi dari Sekretariat Negara (SETNEG) jika studi ke LUAR NEGERI</label>
                        @if($dob->surat_set_per_pen_studi != null)
                        <iframe src="<?php echo asset("$dob->surat_set_per_pen_studi")?>" frameborder="0" style="width:80%;min-height:300px;"></iframe>
                        @else
                          <p style="color: red; padding: 5px 0px;">Berkas Fotokopi Surat Persetujuan Perpanjangan Penugasan Studi dari Sekretariat Negara (SETNEG) jika studi ke LUAR NEGERI Belum, segera lengkapi berkasnya</p>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-whitesmoke">
                <hr/>
                <div style="float: left;">
                  <a href="{{url('/InputBerkas/index')}}" class="btn btn-warning" style="border-radius: 0px;">Kembali</a>
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