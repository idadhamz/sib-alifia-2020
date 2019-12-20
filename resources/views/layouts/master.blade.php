
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
        <link rel="stylesheet" href="{{asset('assets/css/all.css')}}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

          <!-- CSS Libraries -->
          <link rel="stylesheet" href="{{asset('assets/library/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
          <link rel="stylesheet" href="{{asset('assets/library/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('assets/css/all.css')}}"> -->

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">

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

        <!-- Page Specific JS File -->
        <script src="{{asset('assets/js/page/index-0.js')}}"></script>
        <script src="{{asset('assets/js/page/modules-datatables.js')}}"></script>
        <script src="{{asset('assets/js/page/bootstrap-modal.js')}}"></script>

        <script>
            $('#data-user').dataTable();
            $('#data-pemasukan').dataTable();
            $('#data-pengeluaran').dataTable();

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