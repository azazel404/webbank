@extends('layouts.backend.struktur')

@section('body')
<div class="page login-page">
  <div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
      <div class="row">
        <!-- Logo & Information Panel-->
        <div class="col-lg-6">
          <div class="info d-flex align-items-center">
            <div class="content">
              <div class="logo">
                <h1>Register Here</h1>
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
              <form class="form-validate" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <input id="name" type="text" name="name" required data-msg="Please enter your username" class="input-material " {{ $errors->has('name') ? $errors->first('name') : '' }}>
                  <label for="name" class="label-material">User Name</label>
                </div>
                <div class="form-group">
                  <input id="email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material" {{ $errors->has('email') ? $errors->first('email') : '' }}>
                  <label for="email" class="label-material">Email Address</label>
                </div>
                <div class="form-group">
                  <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material" {{ $errors->has('password') ? $errors->first('password') : '' }}>
                  <label for="password" class="label-material">password</label>
                </div>
                <div class="form-group">
                  <input id="password-confirm" type="password" class="input-material" required data-msg="Please enter your password"  name="password_confirmation" required>
                  <label for="password-confirm" class="label-material">Confirm Password</label>
                </div>
                <div class="form-group terms-conditions">
                  <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                  <label for="register-agree">Agree the terms and policy</label>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                      Register
                  </button>
                </div>
              </form><small>Already have an account? </small><a href="{{ route('login') }}" class="signup">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection
