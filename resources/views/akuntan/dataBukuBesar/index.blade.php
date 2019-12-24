@extends('layouts.master')

        @section('content')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                    <!-- <h1>Data Akun</h1> -->
                    <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="{{url('/dataBukuBesar')}}">Data Buku Besar</a></div>
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
              @if(session()->has('message_delete'))
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                    </button>
                    {{ session()->get('message_delete') }}
                  </div>
                </div>
              @endif

              <div class="section-body">
                <div class="row">
                  <div class="card" style="width: 100%">
                    <div class="card-header">
                      <h4>Data Buku Besar</h4>
                    </div>
                    <div class="card-body">
                      <div id="accordion">
                        <div class="row">
                          @foreach($DataAkun as $index => $dok)
                          <div class="col-sm-12 col-md-6">
                            <small id="passwordHelpBlock" class="form-text text-muted" style="padding: 0px 15px;">
                              Klik untuk melihat data buku besar akun <span style="font-weight: bold;">{{$dok->nm_akun}}</span>
                            </small>
                            <div class="accordion">
                              <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-{{$dok->id}}" aria-expanded="true">
                                <h4>Akun {{$dok->nm_akun}}</h4>
                              </div>
                              <div class="accordion-body collapse show" id="panel-body-{{$dok->id}}" data-parent="#accordion">
                                <div class="table-responsive">
                                  <table class="table table-striped" style="font-size: 11px;">
                                      <thead>
                                          <tr>
                                              <th>Tanggal</th>
                                              <th>Keterangan</th>
                                              <th>Debet</th>
                                              <th>Kredit</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>24/12/2019</td>
                                              <td><span>Setoran Modal</span></td>
                                              <td><span>Rp. 35.000.000 </span></td>
                                              <td><span> - </span></td>
                                          </tr>
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <td style="color: #000000;"></td>
                                              <td style="color: #000000;">Total Saldo</td>
                                              <td style="color: #000000;">Rp.35.000.000</td>
                                              <td style="color: #000000;"> - </td>
                                          </tr>
                                      </tfoot>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    <!-- @foreach($DataAkun as $index => $dok)
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapse-{{$dok->id}}" role="button" aria-expanded="false" aria-controls="collapse-{{$dok->id}}">
                      Akun {{$dok->nm_akun}}
                    </a>
                    <div class="collapse" id="collapse-{{$dok->id}}">
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Keterangan</th>
                              <th>Debet</th>
                              <th>Kredit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>24/12/2019</td>
                              <td><span>Setoran Modal</span></td>
                              <td><span>Rp. 35.000.000 </span></td>
                              <td><span> - </span></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td style="color: #000000;"></td>
                              <td style="color: #000000;">Total Saldo</td>
                              <td style="color: #000000;">Rp.35.000.000</td>
                              <td style="color: #000000;"> - </td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                    @endforeach -->
                  </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection