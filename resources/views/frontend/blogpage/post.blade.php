@extends('layouts.frontend.strukturblog')

@section('title', '| Post')
@section('body')
@include('includes.frontend.blogpage.navbar')
<div class="container">
  <div class="row">
    <!-- Latest Posts -->
    <main class="post blog-post col-lg-8">
      <div class="container">
        <div class="post-single">
          <div class="post-thumbnail"><img src="img/blog-post-3.jpeg" alt="..." class="img-fluid"></div>
          <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
              <div class="category"><a href="#">{{ $data->category }}</a></div>
            </div>
            <h1>{{ $data->title }}</h1>
            <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                <div class="title"><span>John Doe</span></div></a>
              <div class="d-flex align-items-center flex-wrap">
                <div class="date"><i class="icon-clock"></i>{{ date('M j, Y h:ia', strtotime($data->created_at)) }} Ago</div>
              </div>
            </div>
            <div class="post-body">
              <h3>{{ $data->title }}</h3>
              <p>{{ $data->content }}</p>
            </div>
            <div class="post-tags"><a href="#" class="tag">{{ $data->category }}</a></div>
            <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
                <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                <div class="text"><strong class="text-primary">Previous Post </strong>
                  <h6>I Bought a Wedding Dress.</h6>
                </div></a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                <div class="text"><strong class="text-primary">Next Post </strong>
                  <h6>I Bought a Wedding Dress.</h6>
                </div>
                <div class="icon next"><i class="fa fa-angle-right">   </i></div></a></div>
          </div>
        </div>
      </div>
    </main>
    @include('includes.frontend.blogpage.aside')
  @include('includes.frontend.blogpage.footer')
@endsection
