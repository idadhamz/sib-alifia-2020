<!DOCTYPE html>
<html class="fullscreen-bg">

<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:29:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{{ asset('assets/img/bpk-logo.png') }}">
    <!-- <link rel="shortcut icon" href="{{ asset('admin/assets/images/RMPTransparent.png') }}"> -->

    <title>Register | Aplikasi Perpanjangan Surat Izin Belajar</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->


</head>

<body>

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
    
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{{asset('assets/img/bpk-logo.jpg')}}" alt="BPK RI Logo" style="width: 100px;"></div>
                            </div>
                            <form action="/register" method="post" role="form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" autocomplete="off" required>
                                    <div class="invalid-feedback">
                                        Email tidak boleh kosong
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label sr-only">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Password tidak boleh kosong
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label sr-only">Nama</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Nama" required>
                                    <div class="invalid-feedback">
                                        Nama tidak boleh kosong
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" style="padding-right: 5px;">
                                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 5px;">Daftar</button>
                                    </div>
                                    <div class="col-6" style="padding-left: 5px;">
                                        <a href="/login" class="btn btn-outline-primary btn-block" style="font-size: 15px;margin-top: 5px;">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Aplikasi Perpanjangan Surat Izin Belajar</h1>
                            <p>Oleh Alifia A.Z</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="footer-login">
        <div class="text-center">
            Sistem Informasi Akuntansi Laundry Al-Banna - Sistem Informasi 5B
        </div>
    </footer> -->

    <!-- General JS Scripts -->
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/stisla.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script>
        $('#email').focus();
    </script>
</body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:29:07 GMT -->

</html>
