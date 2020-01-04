
<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:18:42 GMT -->
<head>
        <meta charset="utf-8" />
        <title>AIS Laundry Al-Banna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('/assets/img/Logo-albanna.png') }}">

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

        <meta name="csrf-token" content="{{ csrf_token() }}" />

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
        <script src="{{asset('assets/library/chartjs/Chart.min.js')}}"></script>
        <script src="{{asset('assets/library/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('assets/library/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/library/sweetalert/sweetalert.min.js')}}"></script>

        <!-- Page Specific JS File -->
        <script src="{{asset('assets/js/page/index-0.js')}}"></script>
        <script src="{{asset('assets/js/page/modules-datatables.js')}}"></script>
        <script src="{{asset('assets/js/page/bootstrap-modal.js')}}"></script>

        <script>
            $('#data-user').dataTable();
            $('#data-pemasukan').dataTable();
            $('#data-pengeluaran').dataTable();
            // $('#id_transaksi').select2();

            $(document).ready(function () {
                $('#dari_tanggal').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });

                $('#sampai_tanggal').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });

                $('#tanggal_pembuatan').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });

                $('#dari_tanggal_neraca_saldo').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });

                $('#sampai_tanggal_neraca_saldo').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });

                $('#dari_tanggal_lap').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });

                $('#sampai_tanggal_lap').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });

                $('.tanggal-transaksi').daterangepicker({
                  locale: {format: 'YYYY-MM-DD'},
                  singleDatePicker: true,
                });
            });

            // Get current date in Transaksi
            const namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
              "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];

            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(namaBulan[today.getMonth()]);
            var yyyy = today.getFullYear();

            today = dd + ' ' + mm + ' ' + yyyy;

            // Set value tanggal
            // document.getElementById("tanggal").value = today;
            // $(".tanggal-transaksi").val(today);

            // Munculin Grafik
            // $('.lihat-grafik').click(function() {
            //     $('#card-grafik').css({
            //         'display': 'block'
            //     });
            // });

            // $('#home-tab2').click(function() {
            //     $('#card-grafik').css({
            //         'display': 'none'
            //     });
            // });

            // Jurnal Umum
            $('.btn-cari').on('click',function(e)
            {

            e.preventDefault();
            var dari = $("#dari_tanggal").val();
            var sampai = $("#sampai_tanggal").val();

            console.log(dari);
            console.log(sampai);

              // $.ajax({  
              //   url:'/dataJurnalUmum/cari/' + dari + '/' + sampai,  
              //   type:"POST",
              //   datatype: 'json',
              //   success:function(data){
              //     console.log(data);
              //     sendData: data;
              //   },
              //   error: function(error) {  
              //     alert('fail');
              //     console.log(error);
              //   }
              // });

              // $.ajax({
              //  url:'/dataJurnalUmum/filter',
              //  method:"POST",
              //  data:{dari:dari, sampai:sampai},
              //  dataType:"json",
              //  success: function(data){
              //   console.log(data);
              //  }
              // });

              // window.location.assign('/dataJurnalUmum/filter');
              var url = '{{ route("filter", [":dari", ":sampai"] ) }}';
              url = url.replace(':dari', dari);
              url = url.replace(':sampai', sampai);

              window.location.assign(url);

            });

            if($("#no_jurnal_umum").val(null) && $("#nm_jurnal_umum").val(null)){
              $("#simpan-jurnal").prop("disabled", true);
            } else {
              $("#simpan-jurnal").prop("disabled", false);
            }

            // $("#simpan-jurnal").prop("disabled", true);

            $("#tambah-akun").prop("disabled", true);
            $("#tambah-akun-penyesuaian").prop("disabled", true);

            $('#no_akun').on('change',function(e)
            {
              console.log(e);
              var no_akun = e.target.value;
              console.log(no_akun);

                //ajax
                $.get('/cariAkun/' + no_akun, function (data)
                {

                  var hasil = $.parseJSON(data);
                  console.log(hasil);

                  $('#nm_akun').val(hasil[0].nm_akun);
                  $('#pilihan_akun').focus();


                  $('#pilihan_akun').on('change',function(e)
                  {  

                    var isi_nominal = $('#nominal').val();
                    var pilihan_akun = e.target.value;

                    if(pilihan_akun == 1){

                      if(hasil[0].saldo_normal == 1){
                        $("#nominal_debit").val(isi_nominal);
                        $("#nominal_kredit").val("0");
                      } else {
                        $("#nominal_kredit").val(isi_nominal);
                        $("#nominal_debit").val("0");
                      }

                    }else{

                      if(hasil[0].saldo_normal == 1){
                        $("#nominal_kredit").val(isi_nominal);
                        $("#nominal_debit").val("0");
                      } else {
                        $("#nominal_debit").val(isi_nominal);
                        $("#nominal_kredit").val("0");
                      }

                    }

                  });

                  // if(hasil[0].saldo_normal == 1){
                  //   $("#nominal_kredit").prop("readonly", true);
                  //   $("#nominal_debit").prop("readonly", false);
                  //   $("#nominal_kredit").val("0");
                  //   $("#nominal_debit").val("");
                  //   $('#nominal_debit').focus();
                  // }else{
                  //   $("#nominal_kredit").prop("readonly", false);
                  //   $("#nominal_debit").prop("readonly", true);
                  //   $("#nominal_debit").val("0");
                  //   $("#nominal_kredit").val("");
                  //   $('#nominal_kredit').focus();
                  // }

                  $("#tambah-akun").prop("disabled", false);
                  $("#tambah-akun-penyesuaian").prop("disabled", false);

              });

            });

            var total_debit = 0;
            var total_kredit = 0;
            var selisih = 0;

            var tabel_jurnal = $('#data-jurnal-umum').DataTable({
                // tabData: {no_akun:"", akun:"", nominal_debit:"", nominal_kredit:""},
                "columns": [
                    { "data": "id_transaksi" },
                    { "data": "no_akun" },
                    { "data": "akun" },
                    { "data": "nominal_debit" },
                    { "data": "nominal_kredit" },
                    {
                        data: null,
                        defaultContent: '<button href="javascript::void(0)" class="btn btn-danger delete-data-jurnal">Hapus</button>'
                    }
                ],
                "columnDefs": [
                    {
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    },
                ],
                hasFirstRow: true
            });

            $('table#data-jurnal-umum tbody').on('click','.delete-data-jurnal', function(){

                // console.log($(this).closest('tr').data("nominal_debit"));
                var data = tabel_jurnal.row( $(this).parents('tr') ).data();

                total_debit -= parseInt(data.nominal_debit);
                total_kredit -= parseInt(data.nominal_kredit);

                if(data.nominal_debit != null){
                  if(total_debit == 0){
                    selisih = 0;
                  }else {
                    selisih = total_debit - data.nominal_debit;
                  }
                }else {
                  if(total_kredit == 0){
                    selisih = 0;
                  }else {
                    selisih = total_kredit - data.nominal_kredit;
                  }
                }

                $('#selisih').val(selisih);
                $('#total_debit').val(total_debit);
                $('#total_kredit').val(total_kredit);

                if(total_debit != total_kredit){

                  $("#simpan-jurnal").prop("disabled", true);

                  $("#text-belum-balance").css("visibility", "visible");
                  $("#text-balance").css("visibility", "hidden");

                }else {

                  if(total_debit == 0 && total_kredit == 0){
                    $("#simpan-jurnal").prop("disabled", true);
                    $("#text-balance").css("visibility", "hidden");
                    $("#text-belum-balance").css("visibility", "hidden");
                  }else {
                    $("#simpan-jurnal").prop("disabled", false);
                    $("#text-belum-balance").css("visibility", "hidden");
                    $("#text-balance").css("visibility", "visible");
                  }

                }

                tabel_jurnal.row( $(this).parents('tr') ).remove().draw( false );
                console.log(tabel_jurnal.rows().data().toArray());

            });

            $('#tambah-akun').on('click',function(e) {
              e.preventDefault();
              var masuk_data = $("#form-tambah-akun").serializeArray();
              console.log(masuk_data);

              total_debit += parseInt(
                masuk_data[4].value == "" ? 0 : masuk_data[4].value
              );

              total_kredit += parseInt(
                masuk_data[5].value == "" ? 0 : masuk_data[5].value
              );

              if(total_debit > total_kredit){
                selisih = total_debit - total_kredit;
              }else {
                selisih = total_kredit - total_debit;
              }

              console.log(total_debit);
              console.log(total_kredit);

              tabel_jurnal.row.add({
                "id_transaksi": masuk_data[0].value,
                "no_akun": masuk_data[1].value,
                "akun": masuk_data[2].value,
                "nominal_debit": masuk_data[4].value == "" ? 0 : masuk_data[4].value,
                "nominal_kredit": masuk_data[5].value == "" ? 0 : masuk_data[5].value,
              }, function(e) {
                console.log(e);
              }).draw();
              
              $('#id_transaksi, #no_akun, #pilihan_akun').val(0);
              $('#nominal, #nominal_debit, #nominal_kredit').val(0);
              $('#total_debit').val(total_debit);
              $('#total_kredit').val(total_kredit);
              $('#selisih').val(selisih);
              $("#tambah-akun").prop("disabled", true); 

              // total_debit != total_kredit ? $("#text-belum-balance").css("display", "block") 
              // : $("#text-balance").css("display", "block");

              // total_debit != total_kredit ? $("#text-balance").css("display", "none") 
              // : $("#text-belum-balance").css("display", "none");

              if(total_debit != total_kredit){

                $("#text-belum-balance").css("visibility", "visible");
                $("#text-balance").css("visibility", "hidden");
                $("#simpan-jurnal").prop("disabled", true);

              }else {

                $("#text-belum-balance").css("visibility", "hidden");
                $("#text-balance").css("visibility", "visible");
                $("#simpan-jurnal").prop("disabled", false);

              }

              // total_debit != total_kredit ? $("#simpan-jurnal").prop("disabled", true) 
              // : $("#simpan-jurnal").prop("disabled", false);

              console.log(tabel_jurnal.rows().data().toArray());
            
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#simpan-jurnal').on('click',function(e) {
              e.preventDefault();
                    swal({
                      title: "Anda yakin dengan isi dari jurnal umum ini?",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: "#DD6B55",
                      confirmButtonText: "Ya",
                      cancelButtonText: "Tidak",
                      closeOnConfirm: false ,
                      closeOnCancel: false
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        //swal("Terhapus", "Data berhasil dihapus.", "success");
                        swal({
                            title: "Berhasil",
                            text: "Pesanan berhasil diinput.",
                            type: "success"
                        },
                        function(ok) {
                            if(ok){
                                console.log($('#no_jurnal_umum').val());
                                $.post('/simpanJurnal/save', {sendData: JSON.stringify(tabel_jurnal.rows().data().toArray()), no_jurnal_umum: $('#no_jurnal_umum').val(), nm_jurnal_umum: $('#nm_jurnal_umum').val(), nilai: $('#total_debit').val()}, function(res) {
                                    console.log(res);
                                }, "json");
                                tabel_jurnal.clear().draw();
                                total_debit = 0;
                                total_kredit = 0;

                                window.location.href='http://127.0.0.1:8000/dataJurnalUmum';
                            }
                        });
                      } else {
                        swal("Batal", "Pesanan dibatalkan", "error");
                      }
                    });
              //console.log(dTable.getData());
              //alert(JSON.stringify(dTable.getData()));
            });

            $(document).on('click', '.btn-hapus', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                swal({
                        title: "Anda yakin ingin menghapus Jurnal Umum ini?",
                        type: "warning",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yakin",
                        showCancelButton: true,
                    },
                    function() {
                        $.ajax({
                            type: "POST",
                            url: "{{url('/hapusJurnal')}}",
                            data: {id:id},
                            success: function (data) {
                              console.log(data);
                            }         
                        });

                        window.location.href='http://127.0.0.1:8000/dataJurnalUmum';
                });
            });

            // Jurnal Penyesuaian

            if($("#no_jurnal_penyesuaian").val(null) && $("#nm_jurnal_penyesuaian").val(null)){
              $("#simpan-jurnal-penyesuaian").prop("disabled", true);
            } else {
              $("#simpan-jurnal-penyesuaian").prop("disabled", false);
            }

            var tabel_jurnal_penyesuaian = $('#data-jurnal-penyesuaian').DataTable({
                // tabData: {no_akun:"", akun:"", nominal_debit:"", nominal_kredit:""},
                "columns": [
                    { "data": "id_transaksi" },
                    { "data": "no_akun" },
                    { "data": "akun" },
                    { "data": "nominal_debit" },
                    { "data": "nominal_kredit" },
                    {
                        data: null,
                        defaultContent: '<button href="javascript::void(0)" class="btn btn-danger delete-data-jurnal-penyesuaian">Hapus</button>'
                    }
                ],
                "columnDefs": [
                    {
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    },
                ],
                hasFirstRow: true
            });

            $('table#data-jurnal-penyesuaian tbody').on('click','.delete-data-jurnal-penyesuaian', function(){

                // console.log($(this).closest('tr').data("nominal_debit"));
                var data = tabel_jurnal_penyesuaian.row( $(this).parents('tr') ).data();

                tabel_jurnal_penyesuaian.row( $(this).parents('tr') ).remove().draw( false );
                console.log(tabel_jurnal_penyesuaian.rows().data().toArray());

            });

            $('#tambah-akun-penyesuaian').on('click',function(e) {
              e.preventDefault();
              var masuk_data = $("#form-tambah-akun-penyesuaian").serializeArray();
              console.log(masuk_data);

              tabel_jurnal_penyesuaian.row.add({
                "id_transaksi": masuk_data[0].value,
                "no_akun": masuk_data[1].value,
                "akun": masuk_data[2].value,
                "nominal_debit": masuk_data[4].value == "" ? 0 : masuk_data[4].value,
                "nominal_kredit": masuk_data[5].value == "" ? 0 : masuk_data[5].value,
              }, function(e) {
                console.log(e);
              }).draw();

              $('#id_transaksi, #no_akun, #pilihan_akun').val(0);
              $('#nominal, #nominal_debit, #nominal_kredit').val(0);
              $("#tambah-akun-penyesuaian").prop("disabled", true); 
              $("#simpan-jurnal-penyesuaian").prop("disabled", false);

              // total_debit != total_kredit ? $("#text-belum-balance").css("display", "block") 
              // : $("#text-balance").css("display", "block");

              // total_debit != total_kredit ? $("#text-balance").css("display", "none") 
              // : $("#text-belum-balance").css("display", "none");

              // total_debit != total_kredit ? $("#simpan-jurnal").prop("disabled", true) 
              // : $("#simpan-jurnal").prop("disabled", false);

              console.log(tabel_jurnal.rows().data().toArray());
            
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#simpan-jurnal-penyesuaian').on('click',function(e) {
              e.preventDefault();
                    swal({
                      title: "Anda yakin dengan isi dari jurnal penyesuaian ini?",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: "#DD6B55",
                      confirmButtonText: "Ya",
                      cancelButtonText: "Tidak",
                      closeOnConfirm: false ,
                      closeOnCancel: false
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        //swal("Terhapus", "Data berhasil dihapus.", "success");
                        swal({
                            title: "Berhasil",
                            text: "Pesanan berhasil diinput.",
                            type: "success"
                        },
                        function(ok) {
                            if(ok){
                                console.log($('#no_jurnal_umum').val());
                                $.post('/simpanJurnalPenyesuaian/save', {sendData: JSON.stringify(tabel_jurnal_penyesuaian.rows().data().toArray()), no_jurnal_penyesuaian: $('#no_jurnal_penyesuaian').val(), nm_jurnal_penyesuaian: $('#nm_jurnal_penyesuaian').val()}, function(res) {
                                    console.log(res);
                                }, "json");
                                tabel_jurnal_penyesuaian.clear().draw();

                                window.location.href='http://127.0.0.1:8000/dataJurnalPenyesuaian';
                            }
                        });
                      } else {
                        swal("Batal", "Pesanan dibatalkan", "error");
                      }
                    });
              //console.log(dTable.getData());
              //alert(JSON.stringify(dTable.getData()));
            });

            $(document).on('click', '.btn-hapus-penyesuaian', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                swal({
                        title: "Anda yakin ingin menghapus Jurnal Penyesuaian ini?",
                        type: "warning",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yakin",
                        showCancelButton: true,
                    },
                    function() {
                        $.ajax({
                            type: "POST",
                            url: "{{url('/hapusJurnalPenyesuaian')}}",
                            data: {id:id},
                            success: function (data) {
                              console.log(data);
                            }         
                        });

                        window.location.href='http://127.0.0.1:8000/dataJurnalPenyesuaian';
                });
            });

            $('.btn-cari-neraca-saldo').on('click',function(e)
            {

              e.preventDefault();
              var dari = $("#dari_tanggal_neraca_saldo").val();
              var sampai = $("#sampai_tanggal_neraca_saldo").val();

              console.log(dari);
              console.log(sampai);

                // window.location.assign('/dataJurnalUmum/filter');
                var url = '{{ route("hasil", [":dari", ":sampai"] ) }}';
                url = url.replace(':dari', dari);
                url = url.replace(':sampai', sampai);

                window.location.assign(url);

            });

            $('.btn-all-neraca-saldo').on('click',function(e)
            {

              e.preventDefault();

                // window.location.assign('/dataJurnalUmum/filter');
                var url = '{{ route("hasil_all") }}';

                window.location.assign(url);

            });

            // Grafik Laporan Keuangan
            var ctx = document.getElementById("grafikLaporanKeuangan").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ["Minggu 1", "Minggu 2", "Minggu 3", "Minggu 4"],
                datasets: [{
                  label: 'Statistics',
                  data: [350, 458, 330, 502],
                  borderWidth: 2,
                  backgroundColor: '#6777ef',
                  borderColor: '#6777ef',
                  borderWidth: 2.5,
                  pointBackgroundColor: '#ffffff',
                  pointRadius: 4
                }]
              },
              options: {
                legend: {
                  display: false
                },
                scales: {
                  yAxes: [{
                    gridLines: {
                      drawBorder: false,
                      color: '#f2f2f2',
                    },
                    ticks: {
                      beginAtZero: true,
                      stepSize: 150
                    }
                  }],
                  xAxes: [{
                    ticks: {
                      display: false
                    },
                    gridLines: {
                      display: false
                    }
                  }]
                },
              }
            });

        </script>

    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:19:20 GMT -->
</html>