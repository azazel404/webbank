@extends('layouts.frontend.strukturblog')

@section('title', '| News & Promo')
@section('body')
<body id="page-top" class="tampil-bg">
  @include('includes.frontend.blogpage.navbar')

    <div class="container ">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
          <h1>Penghargaan</h1>
          <br><br>
          <div class="container">
            <div class="row">
            @foreach ($awards as $award)
              <!-- post -->
              <div class="post col-md-4">
                <div class="post-thumbnail"><a   data-fancybox="gallery" href="{{ asset('img/penghargaan/' . $award->cover)}}"><img src="{{ asset('img/penghargaan/' . $award->cover)}}" alt="..." class="img-fluid " style="height:150px"></a></div>
                <div class="post-details">
                <center><h6 class="penghargaan">{{ $award->description }}</h6></center>
                </div>
              </div>
              @endforeach
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
              {!! $awards->links() !!}
              </ul>
            </nav>
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

    });
    </script>
    @endpush
@endsection
