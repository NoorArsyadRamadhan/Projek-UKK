@extends('style.style')

@section('judul')
  Login &mdash; Peduli Diri
@endsection

@section('title', 'Login')

{{-- <div class="body-bg"> --}}
  <div id="app">
    <div class="col-lg-40 col-12 order-lg-10 order-1 min-vh-100 background-walk-y position-relative" data-background="../assets/img/unsplash/login2.jpg" style="margin-top: -50px">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="../assets/img/logopd/pedulidiri-2.jpg" alt="logo" width="110" class="shadow-light rounded-circle">
            </div>


            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="/postLogin" class="needs-validation" novalidate="">
                  {{ csrf_field() }}
                  @if (session()->has('alert'))
                  {{-- <div class="rounded p-3 mb-5 bg-success text-white text-center"> --}}
                    <strong style="color: rgb(255, 27, 27)">{{ session('alert') }}</strong>
                @endif
                  <div class="form-group">
                    <label for="email">NIK</label>
                    <input id="email" type="number" class="form-control" name="nik" tabindex="1" required autofocus>
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
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>

                  <div class="mt-5 text-muted text-center">
                    Belum punya akun? <a href="/register">Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>


  <script>
      window.onload = function(){

          var src = document.getElementById("email"),
          dst = document.getElementById("password");
          src.addEventListener('input',function() {
              dst.value = src.value;
          });
      };
  </script>
