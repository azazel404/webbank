@extends('layouts.frontend.strukturblog')

@section('title', '| News & Promo')
@section('body')
<body class='top'>
  @include('includes.frontend.blogpage.navbar')

<header class="container" >
    <div class="owl-carousel owl-theme body-carousel">
      <div class="item body-carousel">  <img  src="{{ asset('img/logos/slider.jpg')}}" alt="Second slide"></div>
      <div class="item body-carousel">  <img  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"></div>
      <div class="item body-carousel">  <img  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"></div>
      <div class="item body-carousel">  <img  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"></div>
  </div>
</header>
<!-- <section class="latest-posts">
  <div class="container">
    <header>
      <h2>Latest from the blog</h2>
    </header>
    <div class="row">
      <div class="post col-md-4">
        <div class="post-thumbnail"><a href="post.html"><img src="img/blog-1.jpg" alt="..." class="img-fluid"></a>
          <a href="#">
              <h3 class="h4 hid-box">Ways to remember your important ideas</h3></a>
        </div>
      </div>
      <div class="post col-md-4">
        <div class="post-thumbnail"><a href="post.html"><img src="img/blog-1.jpg" alt="..." class="img-fluid"></a>
          <a href="#">
              <h3 class="h4 hid-box">Ways to remember your important ideas</h3></a>
        </div>
      </div>
      <div class="post col-md-4">
        <div class="post-thumbnail"><a href="post.html"><img src="img/blog-1.jpg" alt="..." class="img-fluid"></a>
          <a href="#">
              <h3 class="h4 hid-box">Ways to remember your important ideas</h3></a>
        </div>
      </div>
    </div>
  </div>
</section> -->

  <!-- Latest Posts -->
         <section style="background : white;">
            <div class="container">
            <div class="row">

                  <div class="col-md-6">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">News & Promo</a>
                        </li>
                    </ul>

                     @foreach($posts as $post)
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p><a href='#'><i class="fa fa-angle-double-right"></i> <strong>{{ $post->category }}</strong></a><br>
                            <small><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp &nbsp{{ date('M j, Y', strtotime($post->created_at)) }}</small>
                            <a href="{{ route('blog.post', $post->slug) }}"><h4 class="h4">{{ $post->title }}</h4></a>
                              <p class="text-muted openword">{!! strip_tags(substr($post->content, 0, 70)) !!}{{ strlen($post->content) > 100 ? '...' : "" }}</p>
                          </div>
                        </div>
                        @endforeach
                  </div>
                  <div class="col-md-6">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dokumentasi</a>
                          </li>
                      </ul>
                      @foreach($dokumen as $post)
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p><img src="img/blog-1.jpg" class="img-size-left" alt="Undian Hoki 3" />
                             <a href="#" target="_blank"><strong>{{ $post->title }}</strong></a><br>
                               <font color="#666"><small>{{ date('M j, Y', strtotime($post->created_at)) }}</small></font><br>Upper Room City Walk Nagoya – Batam
                            </p>
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
            </section>}




     <section class="py-5" style="background : white;">
    <div class="container">
      <p class="lead mb-5" style="color:black">
        BPRAD terdaftar dan diawasi oleh:
      </p>
      <div class="row">
        <div class="col-md-3 col-5 brand-responsive">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/lobo-bi-baru.png" alt="">
          </a>
        </div>
        <div class="col-md-3 col-5 brand-responsive">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/LPS-logo-baru.png" alt="">
          </a>
        </div>
        <div class="col-md-3 col-5 brand-responsive">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/OJK-logo-baru.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-5 brand-responsive">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/logo-ayo-ke-bank.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
    @include('includes.frontend.blogpage.footer')
@endsection
@push('pageRelatedJs')
<script type="text/javascript">

  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  pagination:false,
  autoplay:1000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})
  });

</script>
@endpush
