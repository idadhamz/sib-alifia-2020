
<!DOCTYPE html>
<html>

<!-- Mirrored from moltran.coderthemes.com/menu_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:18:42 GMT -->
<head>
  <meta charset="utf-8" />
  <title>Aplikasi Perpanjangan Surat Izin Belajar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="shortcut icon" href="{{ asset('assets/img/bpk-logo.png') }}">

  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets/library/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/library/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/library/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('assets/library/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/library/sweetalert/sweetalert.css')}}">
  <!-- <link rel="stylesheet" href="{{asset('assets/css/all.css')}}"> -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> -->

  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <style>
    .ubahFont{
      font-size:13px;
    }
  </style>

</head>


<body>
  <div id="app">
    <div class="main-wrapper">

      @include('layouts.includes._navbar')

      @include('layouts.includes._sidebar')

      @yield('content')

      @include('layouts.includes._footer')

      <!-- Footer -->
                <!-- <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2016 © Moltran.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </footer> -->
                  <!-- End Footer -->

                </div>
                <!-- end container -->


              </div>



              <!-- jQuery  -->
              <!-- <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script> -->
              <!-- <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script> -->
        <!-- <script src="{{asset('admin/assets/js/detect.js')}}"></script>
        <script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/wow.min.js')}}"></script> -->
        <!-- <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script> -->
        <!-- <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script> -->

        <!-- General JS Scripts -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
        <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('assets/js/moment.min.js')}}"></script>
        <script src="{{asset('assets/js/stisla.js')}}"></script>

        <!-- Template JS File -->
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>

        <!-- JS Libraies -->
        <script src="{{asset('assets/library/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/library/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/library/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/library/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('assets/library/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/library/sweetalert/sweetalert.min.js')}}"></script>
        <!-- <script src="{{asset('assets/library/chartjs/Chart.min.js')}}"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>

        <!-- Page Specific JS File -->
        <!-- <script src="{{asset('assets/js/page/index-0.js')}}"></script> -->
        <script src="{{asset('assets/js/page/modules-datatables.js')}}"></script>
        <script src="{{asset('assets/js/page/bootstrap-modal.js')}}"></script>

        <script>
          $('#data-pemohon').dataTable();
          $('#data-user').dataTable();

          $('#nip').focus();

          var weekday = new Array(7);
          weekday[0] = "Minggu";
          weekday[1] = "Senin";
          weekday[2] = "Selasa";
          weekday[3] = "Rabu";
          weekday[4] = "Kamis";
          weekday[5] = "Jumat";
          weekday[6] = "Sabtu";

          var bulan = [
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];

            var d = new Date();

            var tanggal = d.getDate();
            var _bulan = d.getMonth();
            var _tahun = d.getYear();
            var hari = weekday[d.getDay()];

            var bulan = bulan[_bulan];
            var tahun = (_tahun < 1000) ? _tahun + 1900 : _tahun;
            var today = hari + ', ' + tanggal + ' ' + bulan + ' ' + tahun;

            // Set value tanggal
            // document.getElementById("tanggal").value = today;
          $("#tanggal").val(today);

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          $(document).on('click', '.btn-hapus-data-diri-pemohon', function (e) {
              e.preventDefault();
              var id = $(this).data('id');
              swal({
                title: "Anda yakin ingin menghapus Data Pemohon ini?",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ya",
                showCancelButton: true,
              },
              function() {
                $.ajax({
                  type: "POST",
                  url: "{{url('/dataDiriPemohon/delete')}}",
                  data: {id:id},
                  success: function (data) {
                    console.log(data);
                  }         
                });

                window.location.href='http://127.0.0.1:8000/dataDiriPemohon/index';
              });
            });

          $(document).on('click', '.btn-hapus-data-diri', function (e) {
              e.preventDefault();
              var id = $(this).data('id');
              swal({
                title: "Anda yakin ingin menghapus Data Pemohon ini?",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ya",
                showCancelButton: true,
              },
              function() {
                $.ajax({
                  type: "POST",
                  url: "{{url('/dataDiriPemohon/delete')}}",
                  data: {id:id},
                  success: function (data) {
                    console.log(data);
                  }         
                });

                window.location.href='http://127.0.0.1:8000/dataDiriPemohon/index';
              });
            });

          $(document).on('click', '.btn-verifikasi', function (e) {
              e.preventDefault();

              var data_verifikasi = $("#row-verifikasi").serializeArray();
              // console.log(data_verifikasi);

              swal({
                title: "Anda yakin ingin dengan verifikasi ini?",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ya",
                showCancelButton: true,
              },
              function() {
                $.ajax({
                  type: "POST",
                  url: "{{url('/verifikasi/store')}}",
                  data: {
                    id_berkas: data_verifikasi[1].value,
                    id_status: data_verifikasi[10].value, 
                    keterangan: data_verifikasi[11].value,
                  },
                  success: function (data) {
                    console.log(data);
                  }         
                });

                window.location.href='http://127.0.0.1:8000/verifikasi/index';
              });
            });

          $('.btn-cari-pemohon').on('click',function(e)
          {

            e.preventDefault();
            var nip = $("#nip").val();
            console.log(nip);

            //ajax
            $.get('/cariPemohon/' + nip, function (data)
            {
              // $(".row-verifikasi").css("display", "block");
              var hasil_pemohon = $.parseJSON(data);
              console.log(hasil_pemohon);

              $("#id_berkas").val(hasil_pemohon[0].id_berkas)

              url = "http://127.0.0.1:8000/";

              if(hasil_pemohon[0].surat_alasan_perpanjangan != null) {
                $("#surat_alasan_perpanjangan").val(hasil_pemohon[0].surat_alasan_perpanjangan)
                $('#frame_surat_alasan_perpanjangan').attr('src', url + hasil_pemohon[0].surat_alasan_perpanjangan)
                $("#frame_surat_alasan_perpanjangan").css("display", "block");
              }else {
                $("#surat_alasan_perpanjangan").val('-')
              }

              if(hasil_pemohon[0].surat_keterangan_sehat != null) {
                $("#surat_keterangan_sehat").val(hasil_pemohon[0].surat_keterangan_sehat)
                $('#frame_surat_keterangan_sehat').attr('src', url + hasil_pemohon[0].surat_keterangan_sehat)
                $("#frame_surat_keterangan_sehat").css("display", "block");
              }else {
                $("#surat_keterangan_sehat").val('-')
              }

              if(hasil_pemohon[0].sk_cpns_pns != null) {
                $("#sk_cpns_pns").val(hasil_pemohon[0].sk_cpns_pns)
              }else {
                $("#sk_cpns_pns").val('-')
              }

              if(hasil_pemohon[0].sk_jabatan_terakhir != null) {
                $("#sk_jabatan_terakhir").val(hasil_pemohon[0].sk_jabatan_terakhir)
              }else {
                $("#sk_jabatan_terakhir").val('-')
              }

              if(hasil_pemohon[0].sk_lulus != null) {
                $("#sk_lulus").val(hasil_pemohon[0].sk_lulus)
              }else {
                $("#sk_lulus").val('-')
              }

              if(hasil_pemohon[0].jam_pem_belajar != null) {
                $("#jam_pem_belajar").val(hasil_pemohon[0].jam_pem_belajar)
              }else {
                $("#jam_pem_belajar").val('-')
              }

              if(hasil_pemohon[0].rek_per_studi != null) {
                $("#rek_per_studi").val(hasil_pemohon[0].rek_per_studi)
              }else {
                $("#rek_per_studi").val('-')
              }

              if(hasil_pemohon[0].surat_set_per_pen_studi != null) {
                $("#surat_set_per_pen_studi").val(hasil_pemohon[0].surat_set_per_pen_studi)
              }else {
                $("#surat_set_per_pen_studi").val('-')
              }

              if(hasil_pemohon[0].id_status != null) {
                $('.id_status option[value='+hasil_pemohon[0].id_status+']').attr('selected','selected');
              }

              if(hasil_pemohon[0].keterangan != null) {
                $("#keterangan").val(hasil_pemohon[0].keterangan)
              }else {
                $("#keterangan").val(null)
              }

            });

          });
        </script>

        </body>

        <!-- Mirrored from moltran.coderthemes.com/menu_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:19:20 GMT -->
        </html>