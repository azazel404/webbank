@extends('layouts.frontend.strukturblog')

@section('title', '| Post')
@section('body')
@include('includes.frontend.blogpage.navbar')
<body class= "tampil-bg">
  <div class="container ">
  <div class="row ">
    <!-- Latest Posts -->
    <main class="post blog-post col-lg-8">
      <h1>Hubungi Kami</h1>
      @if(Session::has('flash_message'))
        <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
        @endif
      <form method="POST" action="{{ route('contact.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
    <label for="perihal">Perihal</label>
    <select  name="perihal" class="form-control" id="perihal">
      <option>Keluhan</option>
      <option>Pertanyaan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="Nama">
    @if($errors->has('nama'))
      <small class="from-text invalid-feedback">{{$errors->first('nama')}}</small>
      @endif
      </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email">
    @if($errors->has('email'))
      <small class="from-text invalid-feedback">{{$errors->first('email')}}</small>
      @endif
    </div>
  <div class="form-group">
    <label for="no_hp">No handphone</label>
    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Handphone">
    @if($errors->has('no_hp'))
      <small class="from-text invalid-feedback">{{$errors->first('no_hp')}}</small>
      @endif
  </div>
  <div class="form-group">
    <label for="pesan">Pesan </label>
  <textarea name="pesan" class="form-control" rows="8" cols="80"></textarea>
  @if($errors->has('pesan'))
    <small class="from-text invalid-feedback">{{$errors->first('pesan')}}</small>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Kirim </button>
</form>
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
                  @foreach($contact as $contactdata)
                  <div class="item d-flex justify-content-between"><a href="#">{!! $contactdata->category !!}</a></div>
                  @endforeach
                </div>
              </aside>
              </div>
              </div>
    </div>
    </div>
</body>

  @include('includes.frontend.blogpage.footer')
@endsection
