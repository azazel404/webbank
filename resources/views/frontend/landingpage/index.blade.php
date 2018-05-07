@extends('layouts.frontend.struktur')


@section('styles')
<link rel="stylesheet" href="{{ asset('assets/stylecss/agency.css') }}">
@endsection
@section('title', '| Index')
@section('body')
<body id="page-top">

@include('includes.frontend.landingpage.navbar')
  <!-- Header -->
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"></div>
        <div class="intro-heading text-uppercase"></div>

      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Pelayanan Kami</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-4">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Kredit</h4>
                <div class="icon">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-credit-card fa-stack-1x fa-inverse"></i>
                  </span>
                </div>
                <p>
                Kami menghadirkan Produk Jasa Kredit / Pembiayaan untuk segala kebutuhan anda.<br><br></p>

              </div>
              <div class="box-bottom">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Klik untuk informasi lebih lanjut">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Deposito</h4>
                <div class="icon">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                  </span>
                </div>
                <p>
                  Produk jasa Deposito, memberikan keuntungan aman karena Simpanan anda di BPR Agra Dhana</p>
              </div>
              <div class="box-bottom" >
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Klik untuk informasi lebih lanjut">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Tabungan</h4>
                <div class="icon">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-university fa-stack-1x fa-inverse"></i>
                  </span>
                </div>
                <p>
                  Kami juga menghadirkan berbagai variasi Tabungan dengan bunga yang sangat menguntungkan.</p>

              </div>
              <div class="box-bottom">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Klik untuk informasi lebih lanjut">Learn more</a>
              </div>
            </div>
          </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tentang Kami</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Threads</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Explore</h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Finish</h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
  </section>
  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <p class="lead mb-5" style="color:black">
        BPRAD terdaftar dan diawasi oleh:
      </p>
      <div class="row">
        <div class="col-md-3 col-5">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/lobo-bi-baru.png" alt="">
          </a>
        </div>
        <div class="col-md-3 col-5">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/LPS-logo-baru.png" alt="">
          </a>
        </div>
        <div class="col-md-3 col-5">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/OJK-logo-baru.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-5">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/logo-ayo-ke-bank.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="footer bg-danger" >
    <div class="container">
       <div class="row">
         <div class="col-md-4 mb-2 mb-lg-0 py-3">
           <h4 class="text-uppercase mb-4" style="color:white">Contact</h4>
           <p class="lead mb-3" style="color:white">
             Alamat: Komp. Nagoya City Centre blok E No.12, Lubuk Baja,<br />Kota Batam, Kep. Riau
             <br />
             Telp: (0778) 429199
           </p>
         </div>
         <div class="col-12 col-md-8" id="map" style="height:400px;"></div>
       </div>
     </div>
  </section>
  @include('includes.frontend.landingpage.modal')
  @include('includes.frontend.landingpage.footer')
  @push('pageRelatedJs')
  <script type="text/javascript">
  function initMap() {
         var bprad = {lat: 1.146399, lng: 104.006868};
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 20,
           center: bprad
           });
           var marker = new google.maps.Marker({
             position: bprad,
             map: map
             });
           }
  </script>
  <script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIix_nulnH0_vvcij-328M5wUGtMuu1Ow&callback=initMap">
   </script>
   @push('pageRelatedJs')
   <script type="text/javascript">
   $(document).ready(function() {
       sr.reveal('#pelayanan', {
           origin: 'left',
       }, 50);
       sr.reveal('#portfolio', {
           origin: 'top',
       }, 50);
       sr.reveal('#team', {
           origin: 'bottom',
       }, 50);
   });
   </script>
   @endpush
   @endpush
  @endsection
