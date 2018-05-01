@extends('layouts.frontend.strukturblog')

@section('title', '| News & Promo')
@section('body')
<body id="page-top" class="tampil-bg">
  @include('includes.frontend.blogpage.navbar')

    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
          <div class="container">
            <div class="row">
            @foreach ($products as $produk)
              <!-- post -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href=""><img src="{{ asset('img/produk/' . $produk->cover)}}" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{ $produk->created_at }}</div>
                    <div class="category"><a href="#">{{ $produk->tipe_product }}</a></div>
                  </div><a href="{{ route('produk.post', $produk->slug) }}">
                    <h3 class="h4">{{ $produk->nama_product }}</h3></a>
                  <p class="text-muted">{!! strip_tags(substr($produk->description, 0, 100)) !!}{{ strlen($produk->description) > 100 ? '...' : "" }}</p>
                  <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">

                      <div class="title"><span>{{ $produk->author }}</span></div></a>
                    <div class="date"><i class="icon-clock"></i>Published: {{ date('M j, Y', strtotime($produk->created_at)) }}</div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
              {!! $products->links() !!}
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
            <form action="{{url('/product/search')}}" class="search-form" method="POST">
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
            @foreach($products as $category)
            <div class="item d-flex justify-content-between"><a href="#">{{ $category->category }}</a></div>
            @endforeach
          </div>
        </aside>
        </div>
        </div>

    @include('includes.frontend.blogpage.footer')
@endsection
