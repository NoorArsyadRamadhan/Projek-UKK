<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('judul')</title>

  @include('style.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('layouts.navbar')
      
      @include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Design By Noor Mochamad Arsyad Ramadhan
        </div>
      </footer>
    </div>
  </div>
  <!-- Logout Modal-->
  {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda harus memasukkan kembali data akun anda pada halaman Login apabila anda memutuskan untuk Logout. </div>
        <div class="modal-footer">
          <button class="btn btn-success" type="button" data-dismiss="modal">Kembali</button>
          <a class="btn btn-danger" href="/logout">Logout</a>
        </div>
      </div>
    </div>
  </div> --}}
</body>
</html>
