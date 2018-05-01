<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google-site-verification" content="Y2tfukwv9bBQvPfLjsH66Ro5fIgPuhFf68NhUc7Jos8"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank @yield('title')</title>
    <link rel="shortcut icon" href="https://bprad.com/favicon.ico" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom fonts for this template -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    @yield('styles')
    @stack('pageRelatedCss')
  </head>
  <body>
  @yield('body')

  <!-- Jquery core JavaScript -->
  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/jquery/jquery.slim.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->

    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


    <!-- Plugin JavaScript -->
    <script src="{{ asset('assets/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Contact form JavaScript -->
    <script src="{{ asset('assets/js/jqBootstrapValidation.min.js')}}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('assets/js/agency.js') }}"></script>
  </body>
@stack('PageRelatedJs')
</html>
