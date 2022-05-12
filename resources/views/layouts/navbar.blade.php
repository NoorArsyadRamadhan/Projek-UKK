<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto" method="GET" action="/search">
    @csrf
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
    <div class="col-auto">
    <select onchange="yesnocheck(this);" class="form-control form-select" type="search">
      <option value="tanggal">Tanggal</option>
      <option value="jam">Jam</option>
      <option value="lokasi">Lokasi</option>
      <option value="suhu">Suhu</option>
    </select>
  </div>


    <div class="col">
      <div class="form-group">
        <input required name="tanggal" id="iftanggal" class="form-control" type="date" placeholder="Tanggal" aria-label="Search" data-width="250">
        <button id="iftanggalBtn" class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
      </div>
      <div class="form-group">
        <input name="jam" id="ifjam" style="display: none;" class="form-control" type="time" placeholder="Jam" aria-label="Search" data-width="250">
        <button id="ifjamBtn" style="display: none;" class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
      </div>
      <div class="form-group">
        <input name="lokasi" id="iflokasi" style="display: none;" class="form-control" type="text" placeholder="Lokasi" aria-label="Search" data-width="250">
        <button id="iflokasiBtn" style="display: none;" class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
      </div>
      <div class="form-group">
        <input name="suhu" id="ifsuhu" style="display: none;" class="form-control" type="number" placeholder="Suhu" aria-label="Search" data-width="250">
        <button  id="ifsuhuBtn" style="display: none;" class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
      </div>
    </div>
    </form>
  <ul class="navbar-nav navbar-right">

    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="../assets/img/avatar/arsyad2.jpg" class="rounded-circle mr-1"
      style="width: 35px; height: 35px">
      <div class="d-sm-none d-lg-inline-block">Hai, 
        @if (!empty(auth()->user()->name))
          {{ auth()->user()->name }}
        @else
          user
        @endif
      </div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href="/logout" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
      <!-- Dropdown - User Information -->
      {{-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
          Logout
        </a>
      </div> --}}
    </li>
  </ul>
</nav>

<script>
  function yesnocheck(that) {
    if (that.value == "tanggal") {
      document.getElementById("iftanggal").style.display = "block";
      document.getElementById("iftanggalBtn").style.display = "block";

      document.getElementById("ifjam").style.display = "none";
      document.getElementById("ifjamBtn").style.display = "none";

      document.getElementById("iflokasi").style.display = "none";
      document.getElementById("iflokasiBtn").style.display = "none";

      document.getElementById("ifsuhu").style.display = "none";
      document.getElementById("ifsuhuBtn").style.display = "none";

      document.getElementById("ifjam").value = "";
      document.getElementById("iflokasi").value = "";
      document.getElementById("ifsuhu").value = "";

      document.getElementById("iftanggal").required = true;
      document.getElementById("ifjam").required = false;
      document.getElementById("iflokasi").required = false;
      document.getElementById("ifsuhu").required = false;
    
    }else if(that.value == "jam") {
      document.getElementById("iftanggal").style.display = "none";
      document.getElementById("iftanggalBtn").style.display = "none";

      document.getElementById("ifjam").style.display = "block";
      document.getElementById("ifjamBtn").style.display = "block";

      document.getElementById("iflokasi").style.display = "none";
      document.getElementById("iflokasiBtn").style.display = "none";

      document.getElementById("ifsuhu").style.display = "none";
      document.getElementById("ifsuhuBtn").style.display = "none";

      document.getElementById("iftanggal").value = "";
      document.getElementById("iflokasi").value = "";
      document.getElementById("ifsuhu").value = "";

      document.getElementById("iftanggal").required = false;
      document.getElementById("ifjam").required = true;
      document.getElementById("iflokasi").required = false;
      document.getElementById("ifsuhu").required = false;
    
    }else if(that.value == "lokasi") {
      document.getElementById("iftanggal").style.display = "none";
      document.getElementById("iftanggalBtn").style.display = "none";

      document.getElementById("ifjam").style.display = "none";
      document.getElementById("ifjamBtn").style.display = "none";

      document.getElementById("iflokasi").style.display = "block";
      document.getElementById("iflokasiBtn").style.display = "block";

      document.getElementById("ifsuhu").style.display = "none";
      document.getElementById("ifsuhuBtn").style.display = "none";

      document.getElementById("iftanggal").value = "";
      document.getElementById("ifjam").value = "";
      document.getElementById("ifsuhu").value = "";

      document.getElementById("iftanggal").required = false;
      document.getElementById("ifjam").required = false;
      document.getElementById("iflokasi").required = true;
      document.getElementById("ifsuhu").required = false;
    
    }else{
      document.getElementById("iftanggal").style.display = "none";
      document.getElementById("iftanggalBtn").style.display = "none";

      document.getElementById("ifjam").style.display = "none";
      document.getElementById("ifjamBtn").style.display = "none";

      document.getElementById("iflokasi").style.display = "none";
      document.getElementById("iflokasiBtn").style.display = "none";

      document.getElementById("ifsuhu").style.display = "block";
      document.getElementById("ifsuhuBtn").style.display = "block";

      document.getElementById("iftanggal").value = "";
      document.getElementById("ifjam").value = "";
      document.getElementById("iflokasi").value = "";

      document.getElementById("iftanggal").required = false;
      document.getElementById("ifjam").required = false;
      document.getElementById("iflokasi").required = false;
      document.getElementById("ifsuhu").required = true;
    }     
  }
</script>