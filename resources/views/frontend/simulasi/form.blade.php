@extends('layouts.frontend.strukturblog')

@section('title', '| Post')
@section('body')
@include('includes.frontend.blogpage.navbar')
<body class= "tampil-bg">
  <div class="container ">
  <div class="row ">
    <!-- Latest Posts -->
    <main class="post blog-post col-lg-8">
      <h1>Simulasi Kredit</h1>
      <form method="POST" action="{{ route('simulasi.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
    <label for="jenis_bunga">Jenis Bunga</label>
    <select  name="jenis_bunga" class="form-control" id="jenis_bunga">
      <option>Flat In Area</option>
      <option>Flat In Advanced</option>
    </select>
  </div>
  <div class="form-group">
    <label for="plafond_kredit">Plafond Kredit</label>
    <input type="number" class="form-control" id="number"  name="plafond_kredit" aria-describedby="plafond_kredit" placeholder="Plafond Kredit">
    <small id="plafond_kredit" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="jangka_waktu">Jangka Waktu</label>
    <input type="number" class="form-control" id="jangka_waktu" name="jangka_waktu" aria-describedby="jangka_waktu" placeholder="Jangka Waktu">
    <small id="jangka_waktu" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="suku_bunga">Suku Bunga</label>
    <input type="text" class="form-control" name="suku_bunga" id="suku_bunga" placeholder="suku bunga">
  </div>
  <div class="form-group">
    <label for="tglcair">Tanggal Cair</label>
    <input type="date" class="form-control" id="tglcair" name="tglcair" aria-describedby="tgl_cair" placeholder="Tanggal Cair">
    <small id="tglcair" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Hitung </button>
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
                  @foreach($simulasi as $simulasidata)
                  <div class="item d-flex justify-content-between"><a href="#">{!! $simulasidata->category !!}</a></div>
                  @endforeach
                </div>
              </aside>
              </div>
              </div>
    </div>
    </div>
</body>

  @include('includes.frontend.blogpage.footer')
  @push('pageRelatedJs')
<script src="{{ asset('assets/js/rumus.js') }}"></script>

  </script>
@endsection
