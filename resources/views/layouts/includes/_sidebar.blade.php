<div class="main-sidebar">
  <aside id="sidebar-wrapper" style="margin-bottom: 30px;">
        <div class="sidebar-brand mb-5 mt-3">
            <a href="{{url('/dashboard')}}">
                <img src="{{ asset('assets/img/bpk-logo.jpg') }}" alt="" style="width: 100px;height: 100px;">
                <p style="padding: 10px;text-transform: capitalize;color: #000;letter-spacing: 0.5px;">Aplikasi Perpanjangan <br>Surat Izin Belajar</p>
            </a>
        </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{url('/dashboard')}}">AB</a>
    </div>
    <ul class="sidebar-menu" style="padding-top: 20px;">
      <!-- <li class="nav-item dropdown active">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href="index-0.html">General Dashboard</a></li>
          <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
        </ul>
      </li> -->
      
      <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dashboard')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
      
      @if(auth()->user()->id_role == '1')
      <li class="nav-item dropdown {{ (request()->is('dataDiriPemohon/index')) || (request()->is('uploadBerkas/index')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Data Pemohon</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataDiriPemohon/index')}}">Data Diri</a></li>
          <li><a class="nav-link" href="{{url('/uploadBerkas/index')}}">Upload Berkas</a></li>
        </ul>
      </li>
      <li class="{{ (request()->is('verifikasi/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/verifikasi/index')}}"><i class="fas fa-user-check"></i> <span>Verifikasi Data</span></a></li>
      <li class="nav-item dropdown {{ (request()->is('suratIzinBelajar/index')) || (request()->is('validasi/index')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i> <span>Surat Izin Belajar</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('suratIzinBelajar/index')}}">Buat Surat Izin</a></li>
          <li><a class="nav-link" href="{{url('validasi/index')}}">Validasi Surat Izin</a></li>
        </ul>
      </li>
      <li class="{{ (request()->is('cetakIdpAdmin/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/cetakIdpAdmin/index')}}"><i class="fas fa-print"></i> <span>Cetak IDP</span></a></li>
      <li class="nav-item dropdown {{ (request()->is('dataUser/index')) || (request()->is('/dataUser/create')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i> <span>Manajemen User</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataUser/index')}}">Kelola Data User</a></li>
          <!-- <li><a class="nav-link" href="bootstrap-badge.html">Input Data User</a></li> -->
        </ul>
      </li>
      @endif
      
      @if(auth()->user()->id_role == '2')
      <li class="nav-item dropdown {{ (request()->is('inputDataDiri/index')) || (request()->is('inputBerkas/index')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Data Pemohon</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/inputDataDiri/index')}}">Data Diri</a></li>
          <li><a class="nav-link" href="{{url('/inputBerkas/index')}}">Upload Berkas</a></li>
        </ul>
      </li>
      <li class="{{ (request()->is('trackingVerifikasi/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/trackingVerifikasi/index')}}"><i class="fas fa-user-check"></i> <span>Tracking Verifikasi</span></a></li>
      <li class="{{ (request()->is('cetakIdp/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('cetakIdp/index')}}"><i class="fas fa-print"></i> <span>Cetak IDP</span></a></li>
      <li class="{{ (request()->is('setting-akun/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('setting-akun/index')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif
      
      @if(auth()->user()->id_role == '3')
      <li class="{{ (request()->is('dataDiriPemohonSpk/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataDiriPemohonSpk/index')}}"><i class="fas fa-user"></i> <span>Data Pemohon</span></a></li>
      <li class="{{ (request()->is('verifikasi/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/verifikasi/index')}}"><i class="fas fa-user-check"></i> <span>Verifikasi Pemohon</span></a></li>
      <li class="{{ (request()->is('suratIzinBelajar/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/suratIzinBelajar/index')}}"><i class="fas fa-file-alt"></i> <span>Buat Surat Izin Belajar</span></a></li>
      <li class="{{ (request()->is('setting-akun/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/setting-akun/index')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif
      
      @if(auth()->user()->id_role == '4')
      <li class="{{ (request()->is('validasi/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/validasi/index')}}"><i class="fas fa-file-alt"></i> <span>Validasi Surat Izin</span></a></li>
      <li class="{{ (request()->is('setting-akun/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/setting-akun/index')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif

      @if(auth()->user()->id_role == '5')
      <li class="{{ (request()->is('idp/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/idp/index')}}"><i class="fas fa-file-alt"></i> <span>Kelola IDP</span></a></li>
      <li class="{{ (request()->is('setting-akun/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/setting-akun/index')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif
      
  </aside>
</div>