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
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user-alt"></i> <span>Data Pemohon</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataDiriPemohon/index')}}">Data Diri</a></li>
          <li><a class="nav-link" href="{{url('/uploadBerkas/index')}}">Upload Berkas</a></li>
        </ul>
      </li>
      <li class="{{ (request()->is('laporanKeuangan')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/laporanKeuangan')}}"><i class="fas fa-user-alt"></i> <span>Verifikasi Data</span></a></li>
      <li class="nav-item dropdown {{ (request()->is('dataUser')) || (request()->is('tambahDataUser')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user-alt"></i> <span>Surat Izin Belajar</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataUser')}}">Buat Surat Izin</a></li>
          <li><a class="nav-link" href="{{url('/dataUser')}}">Validasi Surat Izin</a></li>
        </ul>
      </li>
      <li class="{{ (request()->is('laporanKeuangan')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/laporanKeuangan')}}"><i class="fas fa-user-alt"></i> <span>Cetak IDP</span></a></li>
      <li class="nav-item dropdown {{ (request()->is('dataUser/index')) || (request()->is('/dataUser/create')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user-alt"></i> <span>Manajemen User</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataUser/index')}}">Kelola Data User</a></li>
          <!-- <li><a class="nav-link" href="bootstrap-badge.html">Input Data User</a></li> -->
        </ul>
      </li>
      @endif
      
      @if(auth()->user()->id_role == '2')
      <li class="menu-header">Keuangan</li>
      <li class="{{ (request()->is('laporanKeuangan')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/laporanKeuangan')}}"><i class="fas fa-chart-pie"></i> <span>Laporan Keuangan</span></a></li>
      @endif
      
      @if(auth()->user()->id_role == '3')
      <li class="menu-header">Transaksi</li>
      <li class="nav-item dropdown {{ (request()->is('dataAkun')) ? 'active' : '' }} || {{ (request()->is('dataGolAkun')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-pause"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{ (request()->is('dataGolAkun')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataGolAkun')}}"><span>Kelola Golongan Akun</span></a></li>
          <li class="{ (request()->is('dataAkun')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataAkun')}}"><span>Kelola Akun</span></a></li>
          <!-- <li><a class="nav-link" href="bootstrap-badge.html">Input Data User</a></li> -->
        </ul>
      </li>
      <li class="{{ (request()->is('dataTransaksi')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataTransaksi')}}"><i class="fas fa-calculator"></i> <span>Data Transaksi</span></a></li>
      <li class="{{ (request()->is('dataJurnalUmum')) || (request()->is('tambahJurnalUmum')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataJurnalUmum')}}"><i class="fas fa-book"></i> <span>Jurnal Umum</span></a></li>
      <li class="{{ (request()->is('dataJurnalPenyesuaian')) || (request()->is('tambahJurnalPenyesuaian')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataJurnalPenyesuaian')}}"><i class="fas fa-book"></i> <span>Jurnal Penyesuaian</span></a></li>
      <li class="{{ (request()->is('dataBukuBesar')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataBukuBesar')}}"><i class="fas fa-book-open"></i> <span>Buku Besar</span></a></li>
      <li class="{{ (request()->is('dataNeracaSaldo')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataNeracaSaldo')}}"><i class="fas fa-balance-scale"></i> <span>Neraca Saldo</span></a></li>
      <li class="{{ (request()->is('laporanKeuangan')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/laporanKeuangan')}}"><i class="fas fa-chart-pie"></i> <span>Laporan Keuangan</span></a></li>
      @endif
      
      @if(auth()->user()->id_role == '4')
      <li class="menu-header">Keuangan</li>
      <li class="{{ (request()->is('dataTransaksiKasir')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataTransaksiKasir')}}"><i class="fas fa-calculator"></i> <span>Data Transaksi</span></a></li>
      <li class="{{ (request()->is('laporanKeuangan')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/laporanKeuangan')}}"><i class="fas fa-chart-pie"></i> <span>Laporan Keuangan</span></a></li>
      <li class="{{ (request()->is('dataArusKas')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataArusKas')}}"><i class="fas fa-exchange-alt"></i> <span>Laporan Arus Kas</span></a></li>
      @endif
      
  </aside>
</div>