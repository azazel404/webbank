@extends('layouts.frontend.strukturblog')

@section('title', '| News & Promo')
@section('body')
<body id="page-top" class="tampil-bg">
  @include('includes.frontend.blogpage.navbar')

    <div class="container ">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
          <div class="container">
            <div class="row">
            @foreach ($posts as $post)
              <!-- post -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href=""><img src="{{ asset('img/blog/' . $post->cover)}}" alt="..." class="img-fluid" style="height:200px"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{ $post->created_at }}</div>
                  </div><a href="{{ route('blog.post', $post->slug) }}">
                    <h3 class="h4">{{ $post->title }}</h3></a>
                  <!-- <p class="text-muted">{!! strip_tags(substr($post->content, 0, 100)) !!}{{ strlen($post->content) > 100 ? '...' : "" }}</p> -->
                  <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">

                      <div class="title"><span>{{$post->author}}</span></div></a>
                    <div class="date"><i class="icon-clock"></i>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
              {!! $posts->links() !!}
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
              @include('includes.frontend.blogpage.sidebar')
        </aside>
        </div>
        </div>

    @include('includes.frontend.blogpage.footer')
@endsection
