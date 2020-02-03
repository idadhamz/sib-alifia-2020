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
              <h4>Edit Data Pemohon</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                @foreach($DataPemohonEdit as $dob)
                  <form action="/InputDataDiri/update/{{$dob->id_pemohon}}" method="post" role="form">
                    {{csrf_field()}}
                    <span style="font-weight: bold;font-size: 16px;font-size: 16px;">Identitas Pemohon</span>
                    <hr/>
                    <div style="padding: 0px 30px;">
                      <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" name="nip" value="{{$dob->nip}}" autocomplete="off">
                        @if($errors->has('nip'))
                        <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                          {{ $errors->first('nip')}}
                        </div>
                        @endif
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$dob->nama}}" autocomplete="off">
                            @if($errors->has('nama'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('nama')}}
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jk">
                              <option value="L" {{ $dob->jk == 'L' ? 'selected' : '' }}>Pria</option>
                              <option value="P" {{ $dob->jk == 'P' ? 'selected' : '' }}>Wanita</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$dob->tempat_lahir}}" autocomplete="off">
                            @if($errors->has('tempat_lahir'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('tempat_lahir')}}
                            </div>
                            @endif
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-calendar-alt"></i>
                                </div>
                              </div>
                              <input type="date" class="form-control" name="tgl_lahir" value="{{$dob->tgl_lahir}}" autocomplete="off">
                            </div>
                            @if($errors->has('tgl_lahir'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('tgl_lahir')}}
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama">
                              <option value="1" {{ $dob->agama == '1' ? 'selected' : '' }}>Islam</option>
                              <option value="2" {{ $dob->agama == '2' ? 'selected' : '' }}>Kristen</option>
                              <option value="3" {{ $dob->agama == '3' ? 'selected' : '' }}>Katholik</option>
                              <option value="4" {{ $dob->agama == '4' ? 'selected' : '' }}>Buddha</option>
                              <option value="5" {{ $dob->agama == '5' ? 'selected' : '' }}>Hindu</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                              <option value="M" {{ $dob->status == 'M' ? 'selected' : '' }}>Menikah</option>
                              <option value="BM" {{ $dob->status == 'BM' ? 'selected' : '' }}>Belum Menikah</option>
                              <option value="JD" {{ $dob->status == 'JD' ? 'selected' : '' }}>Janda / Duda</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3" autocomplete="off">{{$dob->alamat}}</textarea>
                            @if($errors->has('alamat'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('alamat')}}
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <span style="font-weight: bold;font-size: 16px;">Pekerjaan Pemohon</span>
                    <hr/>
                    <div style="padding: 0px 30px;">
                      <div class="form-group">
                        <label>Unit Kerja</label>
                        <select name="unit_kerja" class="form-control" id="unit_kerja">
                          <option>Sekretariat Jenderal</option>
                          <option>Biro Sekretariat Pimpinan</option>
                          <option>Biro Hubungan Masyarakat dan Kerja Sama Internasional</option>
                          <option>Biro Sumber Daya Manusia</option>
                          <option>Biro Keuangan</option>
                          <option>Biro Teknologi Informasi</option>
                          <option>Biro Umum</option>
                          <option>Pusat Pendidikan dan Pelatihan </option>
                          <option>Inspektorat Utama</option>
                          <option>Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan</option>
                          <option>Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan</option>
                          <option>Inspektorat Penegakan Integritas</option>
                          <option>Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara</option>
                          <option>Direktorat Perencanaan Strategis dan Manajemen Kinerja</option>
                          <option>Direktorat Evaluasi dan Pelaporan Pemeriksaan</option>
                          <option>Direktorat Penelitian dan Pengembangan</option>
                          <option>Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara</option>
                          <option>Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah</option>
                          <option>Direktorat Legislasi, Pengembangan, dan Bantuan Hukum</option>
                          <option>Auditorat Utama Keuangan Negara I</option>
                          <option>Auditorat Utama Keuangan Negara II</option>
                          <option>Auditorat Utama Keuangan Negara III</option>
                          <option>Auditorat Utama Keuangan Negara IV</option>
                          <option>Auditorat Utama Keuangan Negara V</option>
                          <option>Auditorat Utama Keuangan Negara VI</option>
                          <option>Auditorat Utama Keuangan Negara VII</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="{{$dob->jabatan}}" autocomplete="off">
                            @if($errors->has('jabatan'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('jabatan')}}
                            </div>
                            @endif
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" name="pangkat" value="{{$dob->pangkat}}" autocomplete="off">
                            @if($errors->has('pangkat'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('pangkat')}}
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <span style="font-weight: bold;font-size: 16px;">Pendidikan Pemohon</span>
                    <hr/>
                    <div style="padding: 0px 30px;">
                      <div class="form-group">
                        <label>Jenjang Pendidikan</label>
                        <select name="jenjang_pend" class="form-control" id="jenjang_pend">
                          <option>D3</option>
                          <option>D4</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{$dob->jurusan}}" autocomplete="off">
                            @if($errors->has('jurusan'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('jurusan')}}
                            </div>
                            @endif
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Universitas</label>
                            <input type="text" class="form-control" name="univ" value="{{$dob->univ}}" autocomplete="off">
                            @if($errors->has('univ'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('univ')}}
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label>Tanggal Mulai Masa Studi</label>
                            <input type="date" class="form-control" name="tgl_mulai_studi" value="{{$dob->tgl_mulai}}" autocomplete="off">
                            @if($errors->has('tgl_mulai_studi'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('tgl_mulai_studi')}}
                            </div>
                            @endif
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Tanggal Berakhir Masa Studi</label>
                            <input type="date" class="form-control" name="tgl_berakhir_studi" value="{{$dob->tgl_akhir}}" autocomplete="off">
                            @if($errors->has('tgl_berakhir_studi'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('tgl_berakhir_studi')}}
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <div class="form-group">
                            <label>Beasiswa</label>
                            <input type="text" class="form-control" name="beasiswa" value="{{$dob->beasiswa}}" autocomplete="off">
                            @if($errors->has('beasiswa'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('beasiswa')}}
                            </div>
                            @endif
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Alasan Perpanjangan</label>
                            <textarea name="alasan_perp" class="form-control" id="alasan_perp" rows="3" autocomplete="off">{{$dob->alasan_perp}}</textarea>
                            @if($errors->has('alasan_perp'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('alasan_perp')}}
                            </div>
                            @endif
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Durasi Perpanjangan</label>
                            <input type="text" class="form-control" name="jml_wkt_perp" value="{{$dob->jml_wkt_perp}}" autocomplete="off">
                            @if($errors->has('jml_wkt_perp'))
                            <div class="text-danger" style="padding: 5px;border: 1px solid #eee;margin-top: 3px;">
                              {{ $errors->first('jml_wkt_perp')}}
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-whitesmoke">
                <hr/>
                <div style="float: left;">
                  <a href="{{url('/InputDataDiri/index')}}" class="btn btn-warning" style="border-radius: 0px;">Kembali</a>
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