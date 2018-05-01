@extends('layouts.backend.struktur')
@section('body')
<body>
  <div class="page login-page">
    <div class="container d-flex align-items-center">
      <div class="form-holder has-shadow">
        <div class="row">
          <!-- Logo & Information Panel-->
          <div class="col-lg-6">
            <div class="info d-flex align-items-center">
              <div class="content">
                <div class="logo">
                  <h1>Login Here</h1>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <!-- Form Panel    -->
          <div class="col-lg-6 bg-white">
            <div class="form d-flex align-items-center">
              <div class="content">
                @if($errors->any())
                  @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                  @endforeach
                @endif
                <form  class="form-validate" method="POST" action="{{ route('login.submit') }}">
                   {{ csrf_field() }}
                  <div class="form-group">
                    <input id="email" type="text" name="email" required data-msg="Please enter your username"  value="{{ old('email') }}" class="input-material">
                    <label for="email" class="label-material">email</label>
                  </div>
                  <div class="form-group">
                    <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material" {{ $errors->has('password') ? $errors->first('password') : '' }}>
                    <label for="password" class="label-material">Password</label>
                  </div>
                  <div class="form-group terms-conditions">
                    <input id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}  class="checkbox-template">
                    <label for="remember-me">Remember Me</label>
                  </div>
                  <button class="btn btn-warning btn-block" type="submit" name="login" style="color:white;">{{ __('Login') }}</button>
                </form>
                <a href="{{ route('password.request') }}" class="forgot-pass">{{ __('Forgot Your Password?') }}</a><br><small>Do not have an account? </small><a href="{{ route('register') }}" class="signup">{{ __('Register Here !') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
