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
      <li class="{{ (request()->is('laporanKeuangan')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/laporanKeuangan')}}"><i class="fas fa-user-check"></i> <span>Verifikasi Data</span></a></li>
      <li class="nav-item dropdown {{ (request()->is('dataUser')) || (request()->is('tambahDataUser')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i> <span>Surat Izin Belajar</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataUser')}}">Buat Surat Izin</a></li>
          <li><a class="nav-link" href="{{url('/dataUser')}}">Validasi Surat Izin</a></li>
        </ul>
      </li>
      <li class="{{ (request()->is('laporanKeuangan')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/laporanKeuangan')}}"><i class="fas fa-print"></i> <span>Cetak IDP</span></a></li>
      <li class="nav-item dropdown {{ (request()->is('dataUser/index')) || (request()->is('/dataUser/create')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i> <span>Manajemen User</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataUser/index')}}">Kelola Data User</a></li>
          <!-- <li><a class="nav-link" href="bootstrap-badge.html">Input Data User</a></li> -->
        </ul>
      </li>
      @endif
      
      @if(auth()->user()->id_role == '2')
      <li class="{{ (request()->is('dataDiriPemohon/create')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataDiriPemohon/create')}}"><i class="fas fa-user-alt"></i> <span>Input Data Diri</span></a></li>
      <li class="{{ (request()->is('uploadBerkas/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/uploadBerkas/index')}}"><i class="fas fa-user-alt"></i> <span>Upload Berkas</span></a></li>
      <li class="{{ (request()->is('uploadBerkas/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/uploadBerkas/index')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif
      
      @if(auth()->user()->id_role == '3')
      <li class="{{ (request()->is('dataDiriPemohon/create')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataDiriPemohon/create')}}"><i class="fas fa-user-alt"></i> <span>Verifikasi Pemohon</span></a></li>
      <li class="{{ (request()->is('uploadBerkas/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/uploadBerkas/index')}}"><i class="fas fa-user-alt"></i> <span>Buat Surat Izin Belajar</span></a></li>
      <li class="{{ (request()->is('settingAkun/form')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/settingAkun/form')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif
      
      @if(auth()->user()->id_role == '4')
      <li class="{{ (request()->is('dataDiriPemohon/create')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataDiriPemohon/create')}}"><i class="fas fa-user-alt"></i> <span>Verifikasi Pemohon</span></a></li>
      <li class="{{ (request()->is('uploadBerkas/index')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/uploadBerkas/index')}}"><i class="fas fa-user-alt"></i> <span>Buat Surat Izin Belajar</span></a></li>
      <li class="{{ (request()->is('settingAkun/form')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/settingAkun/form')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif

      @if(auth()->user()->id_role == '5')
      <li class="nav-item dropdown {{ (request()->is('dataUser')) || (request()->is('tambahDataUser')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user-alt"></i> <span>IDP</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataUser')}}">Buat IDP</a></li>
          <li><a class="nav-link" href="{{url('/dataUser')}}">Cetak IDP</a></li>
        </ul>
      </li>
      <li class="{{ (request()->is('settingAkun/form')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/settingAkun/form')}}"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
      @endif
      
  </aside>
</div>