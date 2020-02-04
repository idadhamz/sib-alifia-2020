@extends('layouts.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total User</h4>
            </div>
            <div class="card-body">
              5
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Transaksi</h4>
            </div>
            <div class="card-body">
              5
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Akun</h4>
            </div>
            <div class="card-body">
              5
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Golongan Akun</h4>
            </div>
            <div class="card-body">
              5
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
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
                        @else
                        <i class="fas fa-spinner" style="font-size: 19px; margin: 10px 15px; color: purple;"></i>
                        @endif
                    <div class="media-body">
                      <!-- <div class="float-right text-primary">Now</div> -->
                      <div class="float-right text-primary">{{ Carbon\Carbon::parse($data->created_at)->diffForHumans()}} </div>
                      <div class="media-title">
                        @if( $data->id_status == 1 )
                        <a href="{{url('/trackingVerifikasi/index')}}"><span style="font-size: 16px;font-weight: bold;color: blue;">Permohonan Disetujui</span></a>
                        @elseif( $data->id_status == 2 )
                        <a href="{{url('/trackingVerifikasi/index')}}"><span style="font-size: 16px;font-weight: bold; color: red;">Permohonan Ditolak</span></a>
                        @else
                        <a href="{{url('/trackingVerifikasi/index')}}"><span style="font-size: 16px;font-weight: bold; color: purple;">Permohonan Belum Diproses</span></a>
                        @endif
                      </div>
                      <span class="text-small text-muted" style="font-size: 13px;">
                        @if( $data->id_status == 1 )
                        Tunggu hingga IDP telah diterbitkan, terima kasih.
                        @elseif( $data->id_status == 2 )
                        Periksa kembali data diri dan berkas permohonan.
                        @else
                        Sedang diproses, tunggu hinga 2 - 4 Hari Kerja.
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