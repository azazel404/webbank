<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google-site-verification" content="Y2tfukwv9bBQvPfLjsH66Ro5fIgPuhFf68NhUc7Jos8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bank @yield('title')</title>
      <link rel="shortcut icon" href="https://bprad.com/favicon.ico" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/stylecss/fontastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylecss/style.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylecss/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/pnotify.custom.min.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-icons/fontawesome-free-5.0.7/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}"> -->
    <script defer src="{{ asset('assets/js/fontawesome-all.min.js') }}"></script>
        <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    @stack('pageRelatedCss')
</head>
<body>
@yield('body')

<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<!-- <script src="{{ asset('assets/js/charts-home.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script> -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- <script src="{{ asset('assets/js/Chart.min.js') }}"></script> -->
<script src="{{ asset('assets/js/front.js') }}"></script>
<script src="{{ asset('assets/js/pnotify.custom.min.js') }}"></script>
<script src="{{ asset('assets/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@stack('pageRelatedJs')
</body>
</html>
