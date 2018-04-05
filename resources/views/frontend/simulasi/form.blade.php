@extends('layouts.frontend.strukturblog')

@section('title', '| Post')
@section('body')
@include('includes.frontend.blogpage.navbar')
<div class="container">
  <div class="row">
    <!-- Latest Posts -->
    <main class="post blog-post col-lg-8">
      <form>
        <div class="form-group">
    <label for="jenis_bunga">Jenis Bunga</label>
    <select  name="jenis_bunga" class="form-control" id="jenis_bunga">
      <option>Flat In Area</option>
      <option>Flat In Advanced</option>
      <option>Flat In Menurun</option>
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
    <label for="tgl_cair">Tanggal Cair</label>
    <input type="date" class="form-control" id="tgl_cair" aria-describedby="tgl_cair" placeholder="Tanggal Cair">
    <small id="tgl_cair" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Hitung </button>
</form>
    </main>
      @include('includes.frontend.blogpage.aside')
  @include('includes.frontend.blogpage.footer')
@endsection
