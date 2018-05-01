@extends('layouts.frontend.strukturblog')

@section('title', '| Post')
@section('body')
@include('includes.frontend.blogpage.navbar')
<body class="tampil-bg">
  <div class="container">
  <div class=" tampil-bg">
    <!-- Latest Posts -->
    <main class="row">
      <div class=" col-md-5">
        <h1>Hasil SImulasi </h1>
        <br>
        <div class="form-group">
          <p>Jenis Bunga : {{ $jenis }} </p>
        </div>
        <div class="form-group">
          <p>Suku Bunga : {{ $bunga }}%</p>
        </div>
        <div class="form-group">
          <p>Tanggal Pencairan :{{ $tglcair }} </p>
        </div>
          <div class="form-group">
            <p>Total cicilan : {{ number_format($total_cicilan,2) }} </p>
          </div>
          <div class="form-group">
            <p>Total Bunga : {{ number_format($total_bunga,2) }}</p>
          </div>
          <div class="form-group">
            <p>cicilan Perbulan setahun : {{ number_format($cicilanbulan,2) }}</p>
          </div>
          <div class="form-group">
            <p>bunga per bulan setahun :{{ number_format($bungaperbulan,2) }} </p>
          </div>
      </div>
          <div class="col-md-7">
            <table class="table table-bordered">
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
            </table>
          </div>
          </div>
    </main>
    </div>
    </div>
</body>

  @include('includes.frontend.blogpage.footer')
@endsection
