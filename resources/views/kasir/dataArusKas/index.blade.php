@extends('layouts.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <!-- <h1>Data Akun</h1> -->
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{url('/dataTransaksi')}}">Data Transaksi</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Laporan Arus Kas</h4>
            </div>
            <div class="card-body">
              <!-- <form action="/dataJurnalUmum/cari" method="get" role="form" autocomplete="off"> -->
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <label>Dari Tanggal</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="dari_tanggal"
                        id="dari_tanggal" autocomplete="off">
                      </div>
                      @if($errors->has('dari_tanggal'))
                      <div class="text-danger" style="padding: 5px;">
                        {{ $errors->first('dari_tanggal')}}
                      </div>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <label>Sampai Tanggal</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="sampai_tanggal"
                        id="sampai_tanggal" autocomplete="off">
                      </div>
                      @if($errors->has('sampai_tanggal'))
                      <div class="text-danger" style="padding: 5px;">
                        {{ $errors->first('sampai_tanggal')}}
                      </div>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                    <button type="submit" class="btn btn-success btn-cari" style="margin-top:29px"><i
                      class="fa fa-search" style="margin-right: 5px;"></i>Cari Data</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="col-sm-10 col-sm-4"></h4>
                          <div>
                            <a href="" class="pr-4"><i class="fas fa-sync-alt pr-2"></i>  Refresh</a>
                            <a href=""><i class="fa fa-print pr-2"></i>  Print</a>   
                          </div>
                        </div>
                        <div class="card-body">
                          <table class="table table-sm">
                            <thead>
                              <tr style="font-size: 24px;" class="text-center text-bold">
                                <th scope="col" colspan="6">Laporan Arus Kas Al-Banna Laundry</th>
                              </tr>                   
                              <!-- <tr >
                                <th scope="row" colspan="6"></th>
                              </tr> -->
                            </thead>
                            <tbody>
                              <tr style="background-color: #F5F5F5;">
                                <th scope="row" colspan="6" >Arus Kas Masuk : </th>
                              </tr>
                              @foreach($transaksiArusPemasukan as $index => $dok)
                              <tr>
                                <td>{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d %B %Y') }}</td>
                                <td><span style="color: #000000;">{{$dok->deskripsi}} </span></td>
                                <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td>
                              </tr>
                              @endforeach
                              <tr style="font-weight: bold;">
                                <th></th>
                                <td>Total</td>
                                <td>Rp. {{ number_format($totalPemasukan, 0, ',', '.') }}</td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr style="background-color: #F5F5F5;">
                                <th scope="row" colspan="6">Arus Kas Keluar : </th>
                              </tr>
                              <tr>
                                @foreach($transaksiArusPengeluaran as $index => $dok)
                                <tr>
                                  <td>{{ Carbon\Carbon::parse($dok->tgl_transaksi)->formatLocalized('%d %B %Y') }}</td>
                                  <td><span style="color: #000000;">{{$dok->deskripsi}} </span></td>
                                  <td><span style="color: #000000;">Rp. {{ number_format($dok->nominal_transaksi, 0, ',', '.') }} </span></td>
                                </tr>
                                @endforeach
                              </tr>
                              <tr style="font-weight: bold;">
                                <th></th>
                                <td>Total</td>
                                <td>Rp. {{ number_format($totalPengeluaran, 0, ',', '.') }}</td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- </form> -->
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
