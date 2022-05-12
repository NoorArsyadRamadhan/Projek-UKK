@extends('style.style')

@section('title', 'Login')
    
      <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="../assets/img/logopd/pedulidiri-2.jpg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Login</h4>
            <form method="POST" action="/postLogin" class="needs-validation" novalidate="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">NIK</label>
                    <input id="email" type="text" class="form-control" name="nik" tabindex="1" required autofocus>
                    <input id="password" type="hidden" class="form-control" name="password" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      NIK wajib diisi
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input id="name" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Nama Lengkap wajib diisi
                    </div>
                  </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>

              <div class="form-group text-right">
                <a href="auth-forgot-password.html" class="float-left mt-3">
                  Forgot Password?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>
              <div class="mt-5 text-center">
                Don't have an account? <a href="auth-register.html">Create new one</a>
              </div>
              
            </form>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/img/unsplash/login2.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Welcome, to Peduli Diri</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>