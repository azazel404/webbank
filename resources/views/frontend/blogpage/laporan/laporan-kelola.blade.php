@extends('layouts.frontend.strukturblog')

@section('title', '| News & Promo')
@section('body')
<body id="page-top" class="tampil-bg">
  @include('includes.frontend.blogpage.navbar')

    <div class="container ">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
          <h1>Tata Kelola</h1>
          <br>
          <div class="container">
            <div class="form-group">
              @foreach($kelolas as $data)
              <div class="card-header flip">
                <h5 class="mb-0">
                    <i class="fa fa-angle-down"></i>
                    {{date('F  Y', strtotime($data->tanggal))}}
                </h5>
              </div>
              <div class="panel"><a href="{{ asset('img/laporan/kelola/' . $data->laporan)}}">{{ $data->nama_laporan }}</a></div>
              @endforeach
              </div>
        </main>
        <aside class="col-lg-4">
          <!-- Widget [Search Bar Widget]-->
          <div class="widget search">
            <header>
              <h3 class="h6">Search the blog</h3>
            </header>
            <form action="{{url('/blog/search')}}" class="search-form" method="POST">
            {{csrf_field()}}
              <div class="form-group">
                <input type="search"  name="search"  placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            @foreach($post as $posts)
            <div class="item d-flex justify-content-between"><a href="#">{{ $posts->category }}</a></div>
            @endforeach
          </div>
        </aside>
        </div>
        </div>

    @include('includes.frontend.blogpage.footer')
    @push('pageRelatedJs')
    <script type="text/javascript">
    $(document).ready(function(){
       $('.flip').on('click', function() {
        $(this).next().slideToggle('fast')
      });
    });
  </script>
    @endpush
@endsection
