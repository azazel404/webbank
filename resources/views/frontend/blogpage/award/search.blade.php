@extends('layouts.frontend.strukturblog')

@section('title', '| Post')
@section('body')
@include('includes.frontend.blogpage.navbar')
<div class="container">
  <div class="row tampil-bg">
    <!-- Latest Posts -->
    @if($searchdata)
    <main class="post blog-post col-lg-8">
      <div class="container">
        <div class="post-single">
          <div class="post-thumbnail"><img src="{{ asset('img/blog/' . $searchdata->cover)}}" alt="..." class="img-fluid"></div>
          <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
              <div class="category"><a href="#">{{ $searchdata->category }}</a></div>
            </div>
            <h1>{{ $searchdata->title }}</h1>
            <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                <div class="title"><span>John Doe</span></div></a>
              <div class="d-flex align-items-center flex-wrap">
                <div class="date"><i class="icon-clock"></i>{{ date('M j, Y h:ia', strtotime($searchdata->created_at)) }} Ago</div>
              </div>
            </div>
            <div class="post-body openword">
              <h3>{{ $searchdata->title }}</h3>
              <p style="text-align:justify;">{!! strip_tags($searchdata->content) !!}</p>
            </div>

            <!-- <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
                <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                <div class="text"><strong class="text-primary">Previous Post </strong>
                  <h6>I Bought a Wedding Dress.</h6>
                </div></a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                <div class="text"><strong class="text-primary">Next Post </strong>
                  <h6>I Bought a Wedding Dress.</h6>
                </div>
                <div class="icon next"><i class="fa fa-angle-right">   </i></div></a></div>
          </div> -->
        </div>
      </div>
    </main>
    @else
    <main class="post blog-post col-lg-8">
    <div class="container">
    <h1>No post match on your term <strong>search</strong></h1>
    </div>
    </main>
    @endif
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
        @if($searchdata)
        <div class="item d-flex justify-content-between"><a href="#">{{$searchdata->category}}</a></div>
        @endif
      </div>
    </aside>
    </div>
    </div>
  @include('includes.frontend.blogpage.footer')
@endsection
