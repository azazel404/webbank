

    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg main-nav " id="mainNav" >
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="{{route('tampil.index')}}"><img src="{{asset('img/logos/logoagradana.png')}}" alt="Logo" style="width:200px;"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <!-- Navbar Menu -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown ">
                <a href="#" class="nav-link dropdown-toggle" id="navbartentang" data-toggle="dropdown">Tentang Kami</a>
                <ul class="dropdown-menu dropdown-content" id="navbartentang">
                  <li><a class="dropdown-item" href="#">Profile Perusahaan</a></li>
                  <li><a class="dropdown-item" href="#">Karir</a></li>
                  <li><a class="dropdown-item" href="#">Lokasi</a></li>
                  <li><a class="dropdown-item" href="{{route('publikasi.create')}}">Laporan Publikasi</a></li>
                  <li><a class="dropdown-item" href="{{route('kelola.create')}}">Laporan Kelola</a></li>
                  <li><a class="dropdown-item" href="{{route('award.page')}}">Penghargaan</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="{{ route('promo.page') }}" class="nav-link  ">News & Promo</a>
              </li>
              <li class="nav-item dropdown ">
                <a href="{{ route('produk.page') }}" class="nav-link dropdown-toggle" id="navbardropproduk" data-toggle="dropdown">Produk</a>
                <ul class="dropdown-menu dropdown-content" id="navbardropproduk">
                  <li><a class="dropdown-item" href="#">Tabungan</a></li>
                  <li><a class="dropdown-item" href="#">Deposito</a></li>
                  <li><a class="dropdown-item" href="#">Kredit</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown ">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Simulasi</a>
                <ul class="dropdown-menu dropdown-content" id="navbardrop">
                  <li><a class="dropdown-item" href="#">Deposito</a></li>
                  <li><a class="dropdown-item" href="{{ route('simulasi.create') }}">Kredit</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="{{route('contact.create')}}" class="nav-link  ">Hubungi Kami</a>
              </li>
            </li>
        </div>
      </nav>
      <div class="search-data">
        </div>
      </div>
  </header>
