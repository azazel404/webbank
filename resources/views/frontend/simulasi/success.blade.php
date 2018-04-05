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
    <label for="exampleFormControlSelect1">Jenis Bunga</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Flat In Area</option>
      <option>Flat In Advanced</option>
      <option>Flat In Menurun</option>
    </select>
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
  <div class="form-group">
    <label for="total_cicilan">Total Cicilan</label>
    <input type="text" class="form-control" id="total_cicilan" aria-describedby="tgl_cair" placeholder="total Cicilan">
    <small id="total_cicilan" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
      <th>cicilan ke</th>
      <th>tanggal cicilan</th>
      <th>sisa pinjaman</th>
      <th>cicilan pokok</th>
      <th>cicilan bunga</th>
      <th>total cicilan</th>
      </tr>
    </thead>
    <tbody>
      {!! $output !!}
    </tbody>
</form>
    </main>
    @include('includes.frontend.blogpage.aside')
  @include('includes.frontend.blogpage.footer')
@endsection
