@extends('layouts.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Jumlah Pemohon</h4>
            </div>
            <div class="card-body">
              {{ $jmlPemohon }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Permohonan Berhasil</h4>
            </div>
            <div class="card-body">
              {{ $jmlPemohonanBerhasil }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Jumlah User</h4>
            </div>
            <div class="card-body">
              {{ $jmlUser }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-7 col-12" style="display: {{ @(Auth::user()->id_role == 1 ? 'block' : 'none')}}">
        <div class="card">
          <div class="card-header">
            <h4>Status Pelayanan</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-md" id="data-user">
                <thead style="background-color: #95b9c7;">
                  <tr>
                    <th style="color: white;">No</th>
                    <th style="color: white;">Pemohon</th>
                    <th style="color: white;">Status Pelayanan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_pelayanan as $index => $dok)
                  <tr>
                    <td style="color: #000000;">{{$index +1}}</td>
                    <td style="color: #000000;">{{$dok->nip}} <br> {{$dok->nama}}</td>
                    <td> 
                      @if($dok->id_status == 1)
                      <span style="color: blue;">Pelayanan Disetujui</span><br>
                      @elseif($dok->id_status == 2)
                      <span style="color: red;">Pelayanan Ditolak</span><br>
                      @elseif($dok->id_status == 3)
                      <span style="color: darkblue;">Izin Dinas Pelayanan Berhasil Dibuat</span><br>
                      @endif
                      <span style="color: #78828a;">Oleh {{$dok->name}} </span>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5 col-12" style="display: {{ @(Auth::user()->id_role == 1 ? 'block' : 'none')}}">
        <div class="card">
          <div class="card-header">
            <h4>Data Riwayat Pelayanan Terakhir</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
              @if(!$riwayat_pelayanan->isEmpty())
              @foreach($riwayat_pelayanan as $index => $data)
              <li class="media">
                <!-- <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar"> -->
                <div class="media-body">
                  <!-- <div class="float-right text-primary">Now</div> -->
                  <div class="float-right text-primary">{{ Carbon\Carbon::parse($data->created_at)->diffForHumans()}} </div>
                  <div class="media-title">
                    @if( $data->id_status == 1 )
                    <a><span style="font-weight: bold;color: blue;">Permohonan Disetujui</span></a>
                    @elseif( $data->id_status == 2 )
                    <a><span style="font-weight: bold; color: red;">Permohonan Ditolak</span></a>
                    @elseif( $data->id_status == 3 )
                    <a><span style="font-weight: bold; color: purple;">Permohonan Sedang Diproses</span></a>
                    @elseif( $data->id_status == 4 )
                    <a><span style="font-weight: bold; color: darkblue;">IDP Berhasil Dibuat</span></a>
                    @endif
                  </div>
                  <span class="text-small" style="font-size: 13px;">
                    <b>{{ $data->nama }} - {{ $data->nip }}</b>
                  </span>
                </div>
              </li>
              @endforeach
              @elseif($riwayat_pelayanan->isEmpty())
              <li class="media">
                <!-- <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar"> -->
                <i class="fas fa-times-circle" style="font-size: 22px; margin: 20px 15px; color: red;"></i>

                <div class="media-body">
                  <!-- <div class="float-right text-primary">Now</div> -->
                  <div class="media-title">
                    <span style="font-size: 16px;font-weight: bold;color: black;">Belum ada pelayanan</span>
                  </div>
                </div>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-12" style="display: {{ @(Auth::user()->id_role == 2 ? 'block' : 'none')}}">
        <div class="card">
          <div class="card-header">
            <h4>Info Permohonan Terkini</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
              @if(!$data_tracking->isEmpty())
              @foreach($data_tracking as $index => $data)
              <li class="media">
                <!-- <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar"> -->
                @if( $data->id_status == 1 )
                <i class="fas fa-check-circle" style="font-size: 19px; margin: 10px 15px; color: blue;"></i>
                @elseif( $data->id_status == 2 )
                <i class="fas fa-times-circle" style="font-size: 19px; margin: 10px 15px; color: red;"></i>
                @elseif( $data->id_status == 3 )
                <i class="fas fa-spinner fa-pulse" style="font-size: 19px; margin: 10px 15px; color: purple;"></i>
                @elseif( $data->id_status == 4 )
                <i class="fas fa-print" style="font-size: 19px; margin: 10px 15px; color: darkblue;"></i>
                @endif
                <div class="media-body">
                  <!-- <div class="float-right text-primary">Now</div> -->
                  <div class="float-right text-primary">{{ Carbon\Carbon::parse($data->created_at)->diffForHumans()}} </div>
                  <div class="media-title">
                    @if( $data->id_status == 1 )
                    <a href="{{url('/trackingVerifikasi/index')}}"><span style="font-size: 16px;font-weight: bold;color: blue;">Permohonan Disetujui</span></a>
                    @elseif( $data->id_status == 2 )
                    <a href="{{url('/trackingVerifikasi/index')}}"><span style="font-size: 16px;font-weight: bold; color: red;">Permohonan Ditolak</span></a>
                    @elseif( $data->id_status == 3 )
                    <a href="{{url('/trackingVerifikasi/index')}}"><span style="font-size: 16px;font-weight: bold; color: purple;">Permohonan Sedang Diproses</span></a>
                    @elseif( $data->id_status == 4 )
                    <a href="{{url('/cetakIdp/index')}}"><span style="font-size: 16px;font-weight: bold; color: darkblue;">IDP Berhasil Dibuat</span></a>
                    @endif
                  </div>
                  <span class="text-small text-muted" style="font-size: 13px;">
                    @if( $data->id_status == 1 )
                    Tunggu hingga IDP telah diterbitkan, terima kasih.
                    @elseif( $data->id_status == 2 )
                    Periksa kembali data diri dan berkas permohonan.
                    @elseif ($data->id_status == 3)
                    Sedang diproses, tunggu hinga 2 - 4 hari kerja <br>untuk menjadi surat permohonan surat belajar.
                    @elseif ($data->id_status == 4)
                    Silahkan cetak IDP melalui menu cetak IDP.
                    @endif
                  </span>
                </div>
              </li>
              <hr/>
              @endforeach
              @elseif($data_tracking->isEmpty())
              <li class="media">
                <!-- <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar"> -->
                <i class="fas fa-times-circle" style="font-size: 22px; margin: 20px 15px; color: red;"></i>

                <div class="media-body">
                  <!-- <div class="float-right text-primary">Now</div> -->
                  <div class="media-title">
                    <span style="font-size: 16px;font-weight: bold;color: black;">Belum ada permohonan</span>
                  </div>
                  <span class="text-small text-muted" style="font-size: 13px;">
                    Belum ada permohonan yang diproses / ditolak / disetujui oleh Badan Pengembangan Kompetensi (BPK).
                  </span>
                </div>
              </li>
              @endif
            </ul>
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