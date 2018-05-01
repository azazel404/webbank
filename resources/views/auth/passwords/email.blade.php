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
                  <h1>Dashboard</h1>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <!-- Form Panel    -->
          <div class="col-lg-6 bg-white">
            <div class="form d-flex align-items-center">
              <div class="content">
                <form method="post" class="form-validate">
                  <div class="form-group">
                    <input id="login-username" type="text" name="loginUsername" required data-msg="Please enter your username" class="input-material">
                    <label for="login-username" class="label-material">email</label>
                  </div>
                  <a id="login" href="index.html" class="btn btn-primary">Reset Password</a>
                </form>
                <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="{{ route('register') }}" class="signup">Signup</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
