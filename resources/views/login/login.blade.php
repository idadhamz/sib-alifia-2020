
<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:29:06 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- <link rel="shortcut icon" href="{{ asset('admin/assets/images/RMPTransparent.png') }}"> -->

        <title>Login | Laundry Al - Banna</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>
          <div id="app">
            <section class="section">
              <div class="container mt-5">
                <div class="row">
                  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <!-- <div class="login-brand">
                      <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div> -->

                    <div class="card card-primary">
                      <div class="card-header"><h4>Login</h4></div>

                      <div class="card-body">
                        <form method="POST" action="#" class="needs-validation" novalidate="">
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                              Please fill in your email
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                              please fill in your password
                            </div>
                          </div>

                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                              Login
                            </button>
                          </div>
                          <!-- <hr /> -->
                          <div class="mt-5 text-muted text-center">
                            Hubungi Admin untuk pendaftaran akun pegawai <span style="font-weight: bold;">Laundry Al - Banna</span>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

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
    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:29:07 GMT -->
</html>