<div class="main-sidebar">
  <aside id="sidebar-wrapper" style="margin-bottom: 30px;">
    <div class="sidebar-brand">
      <a href="index.html">Laundy Al - Banna</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">AB</a>
    </div>
    <ul class="sidebar-menu">
      <!-- <li class="nav-item dropdown active">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href="index-0.html">General Dashboard</a></li>
          <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
        </ul>
      </li> -->
      
      <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dashboard')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
      
      @if(auth()->user()->id_role == '1')
      <li class="menu-header">Admin</li>
      <li><a class="nav-link active" href="blank.html"><i class="fas fa-chart-pie"></i> <span>Laporan Keuangan</span></a></li>
      <li class="nav-item dropdown {{ (request()->is('dataUser')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user-alt"></i> <span>Master Data</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataUser')}}">Kelola Data User</a></li>
          <!-- <li><a class="nav-link" href="bootstrap-badge.html">Input Data User</a></li> -->
        </ul>
      </li>
      @endif
      
      @if(auth()->user()->id_role == '2')
      <li class="menu-header">Keuangan</li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i> <span>Laporan Keuangan</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="bootstrap-alert.html">2019</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">2018</a></li>
          <li><a class="nav-link" href="bootstrap-alert.html">2017</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">2016</a></li>
        </ul>
      </li>
      @endif
      
      @if(auth()->user()->id_role == '3')
      <li class="menu-header">Transaksi</li>
      <li class="nav-item dropdown {{ (request()->is('dataAkun')) ? 'active' : '' }} || {{ (request()->is('dataGolAkun')) ? 'active' : '' }}">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-pause"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/dataAkun')}}"><span>Kelola Akun</span></a></li>
          <li><a class="nav-link" href="{{url('/dataGolAkun')}}"><span>Kelola Golongan Akun</span></a></li>
          <!-- <li><a class="nav-link" href="bootstrap-badge.html">Input Data User</a></li> -->
        </ul>
      </li>
      <li class="{{ (request()->is('dataTransaksi')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataTransaksi')}}"><i class="fas fa-calculator"></i> <span>Data Transaksi</span></a></li>
      <li class="{{ (request()->is('dataJurnalUmum')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataJurnalUmum')}}"><i class="fas fa-book"></i> <span>Jurnal Umum</span></a></li>
      <li class="{{ (request()->is('dataJurnalPenyesuaian')) ? 'active' : '' }}"><a class="nav-link" href="{{url('/dataJurnalPenyesuaian')}}"><i class="fas fa-book"></i> <span>Jurnal Penyesuaian</span></a></li>
      <li><a class="nav-link" href="blank.html"><i class="fas fa-book-open"></i> <span>Buku Besar</span></a></li>
      <li><a class="nav-link" href="blank.html"><i class="fas fa-balance-scale"></i> <span>Neraca Saldo</span></a></li>
      <li><a class="nav-link" href="blank.html"><i class="fas fa-chart-pie"></i> <span>Laporan Keuangan</span></a></li>
      @endif
      
      @if(auth()->user()->id_role == '4')
      <li class="menu-header">Keuangan</li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i> <span>Laporan Keuangan</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="bootstrap-alert.html">2019</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">2018</a></li>
          <li><a class="nav-link" href="bootstrap-alert.html">2017</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">2016</a></li>
        </ul>
      </li>
      <li><a class="nav-link" href="blank.html"><i class="fas fa-chart-pie"></i> <span>Laporan Arus Kas</span></a></li>
      <li><a class="nav-link" href="blank.html"><i class="fas fa-calculator"></i> <span>Data Transaksi</span></a></li>
      @endif
      
  </aside>
</div>