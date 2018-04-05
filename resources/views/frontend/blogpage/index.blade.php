@extends('layouts.frontend.strukturblog')

@section('title', '| News & Promo')
@section('body')
<body id="page-top">
  @include('includes.frontend.blogpage.navbar')

    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
          <div class="container">
            <div class="row">
            @foreach ($posts as $post)
              <!-- post -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href=""><img src="{{url('$post->cover') }}" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{ $post->created_at }}</div>
                    <div class="category"><a href="#">{{ $post->category }}</a></div>
                  </div><a href="{{ route('blog.post', $post->slug) }}">
                    <h3 class="h4">{{ $post->title }}</h3></a>
                  <p class="text-muted">{{ substr($post->content, 0, 250) }}{{ strlen($post->content) > 250 ? '...' : "" }}</p>
                  <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">

                      <div class="title"><span>John Doe</span></div></a>
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
        @include('includes.frontend.blogpage.aside')
    @include('includes.frontend.blogpage.footer')
@endsection
