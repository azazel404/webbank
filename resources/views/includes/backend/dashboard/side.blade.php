<!-- Left Panel -->
<div class="page">
  <!-- Main Navbar-->
  <header class="header">
    <nav class="navbar">
      <!-- Search Box-->
      <div class="search-box">
        <button class="dismiss"><i class="icon-close"></i></button>
        <form id="searchForm" action="#" role="search">
          <input type="search" placeholder="What are you looking for..." class="form-control">
        </form>
      </div>
      <div class="container-fluid">
        <div class="navbar-holder d-flex align-items-center justify-content-between">
          <!-- Navbar Header-->
          <div class="navbar-header">
            <!-- Navbar Brand -->
            <a href="{{url('admin')}}" class="navbar-brand">
              <div class="brand-text brand-big"><span>Bank &nbsp</span><strong>Agra Dhana</strong></div>
              <div class="brand-text brand-small"><strong>AD</strong></div></a>
            <!-- Toggle Button-->
            <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
          </div>
          <!-- Navbar Menu -->
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
            <!-- Search-->
            <!-- <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li> -->
            <!-- Logout    -->
            <li class="nav-item"><a href="{{route('adminlogout.submit') }}" class="nav-link logout">Logout &nbsp<i class="fas fa-sign-out-alt"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="page-content d-flex align-items-stretch">
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('img/logos/logoagradana.png')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Bank Agra Dhana</h1>
          <p>Welcome Back</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
                <li><a href="{{url('admin')}}"> <i class="fas fa-home"></i>&nbsp Home </a></li>
                <li><a href="{{route('adminpost.index')}}"> <i class="fas fa-file"></i>&nbsp Article</a></li>
                <li><a href="{{route('adminproduct.index')}}"> <i class="fas fa-folder-open"></i>&nbsp Product</a></li>
                <li><a href="{{route('admintarif.index')}}"> <i class="fas fa-balance-scale"></i>&nbsp Tarif Suku Bunga</a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Arsip File Manager </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{route('adminpenghargaan.index')}}"> <i class="fas fa-trophy"></i>&nbsp Penghargaan</a></li>
                    <li><a href="{{route('adminreport.index')}}"> <i class="fas fa-trophy"></i>&nbsp Laporan</a></li>
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
      </ul>
      <span class="heading">Extras</span>
      <ul class="list-unstyled">
      <li><a href="{{route('adminbiodata.index')}}"> <i class="fas fa-users"></i>&nbsp Biodata Karyawan</a></li>
    </ul>
    </nav>
