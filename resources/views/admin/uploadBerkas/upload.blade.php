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
              <h4>Upload Berkas Pendukung</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  @foreach($data_diri_pemohon_upload as $dob)
                  <form action="/uploadBerkas/save" method="post" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div style="padding: 0px 30px;">
                      <div class="form-group">
                        <input type="text" class="form-control" name="id_user" value="{{$dob->id}}" autocomplete="off" style="display: none;">
                        <input type="text" class="form-control" name="nip" value="{{$dob->nip}}" autocomplete="off" style="display: none;">
                        <!-- <input type="text" class="form-control" name="surat_alasan_perpanjangan" value="{{$dob->surat_alasan_perpanjangan}}" autocomplete="off" style="display: none;">
                        <input type="text" class="form-control" name="surat_keterangan_sehat" value="{{$dob->surat_keterangan_sehat}}" autocomplete="off" style="display: none;"> -->
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Surat Alasan Perpanjangan dari Pemohon (tertanda dari Atasan Pemohon)</label>
                        <input type="file" class="form-control" name="surat_alasan_perpanjangan" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Surat Keterangan Sehat Jasmani dari Dokter</label>
                        <input type="file" class="form-control" name="surat_keterangan_sehat" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi SK CPNS/PNS *)</label>
                        <input type="file" class="form-control" name="sk_cpns_pns" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi SK Jabatan Terakhir (Saat Studi) *)</label>
                        <input type="file" class="form-control" name="sk_jabatan_terakhir" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi Surat Keterangan / Rekomendasi / Pengumuman Resmi Lulus Diterima dari Tempat Studi *)</label>
                        <input type="file" class="form-control" name="sk_lulus" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi Jaminan Pembiayaan Tugas Belajar *)</label>
                        <input type="file" class="form-control" name="jam_pem_belajar" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Surat Rekomendasi Perpanjangan Studi dari Tempat Studi</label>
                        <input type="file" class="form-control" name="rek_per_studi" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                      <div class="form-group">
                        <label style="font-weight: bold;font-size: 14px;letter-spacing: 0.5px;">Fotokopi Surat Persetujuan Perpanjangan Penugasan Studi dari Sekretariat Negara (SETNEG) jika studi ke LUAR NEGERI *)</label>
                        <input type="file" class="form-control" name="surat_set_per_pen_studi" style="height: auto;">
                        <p>*Berkas pendukung harus memiliki format pdf. <br>*Ukuran Maksimal Berkas 2MB</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-whitesmoke">
                <hr/>
                <div style="float: left;">
                  <a href="{{url('/uploadBerkas/index')}}" class="btn btn-warning" style="border-radius: 0px;">Kembali</a>
                </div>
                <div style="float: right;">
                  <button type="submit" class="btn btn-success" style="border-radius: 0px;">Simpan Data</button>
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