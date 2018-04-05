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
    <link rel="stylesheet" href="{{ asset('assets/stylecss/fontastic-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylecss/style-default-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylecss/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}"> -->
        <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
</head>
<body>
@yield('body')
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/front.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/@fancyapps/fancybox/jquery.fancybox.min.js') }}"></script>
</body>
</html>
@stack('pageRelatedJs')
