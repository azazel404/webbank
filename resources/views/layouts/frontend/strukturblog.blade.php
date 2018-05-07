<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google-site-verification" content="Y2tfukwv9bBQvPfLjsH66Ro5fIgPuhFf68NhUc7Jos8"/>
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bank @yield('title')</title>
    <link rel="shortcut icon" href="https://bprad.com/favicon.ico" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/stylecss/fontastic-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylecss/style-default-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/@fancyapps/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylecss/custom-frontend.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}"> -->
        <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
</head>
<body>
@yield('body')
<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script> -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/front.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/@fancyapps/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
</body>
</html>
@stack('pageRelatedJs')
