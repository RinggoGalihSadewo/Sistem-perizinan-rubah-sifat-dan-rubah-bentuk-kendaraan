<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Data Rubah Bentuk</title>
  <link href="/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="/img/logo/dishub.png">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Perizinan</div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
        <!-- Topbar -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/dashboard')}}">
          <i class="fas fa-users"></i>
          <span>Data Pengguna</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fas fa-file-alt"></i>
          <span>Data Jenis Surat</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @canany(['superadmin','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item active" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['rs-admin','rs-staff','rs-kasi','rs-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            @elsecanany(['superadmin','rb-admin','rb-kasi','rb-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item active" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
            @endcanany
          </div>
        </div>
      </li>
      @canany(['superadmin','rs-admin','rb-admin','sekretaris','kepala-dinas'])
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-file-signature"></i>
          <span>Data QR-Code</span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @canany(['superadmin','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['superadmin','rs-admin','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-sifat')}}">Rubah Sifat</a>
            @elsecanany(['superadmin','rb-admin','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-bentuk')}}">Rubah Bentuk</a>
            @endcanany
          </div>
        </div>
      </li>
      @endcan
      @canany(['superadmin','rs-admin','rb-admin'])
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGeQR" aria-expanded="true"
          aria-controls="collapseGeQR">
          <i class="fas fa-qrcode"></i>
          <span>Generate QR-Code</span>
        </a>
        <div id="collapseGeQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @canany(['superadmin'])
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['superadmin','rs-admin'])
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-sifat')}}">Rubah Sifat</a>
            @elsecanany(['superadmin','rb-admin'])
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-bentuk')}}">Rubah Bentuk</a>
            @endcanany
          </div>
        </div>
      </li>
      @endcanany
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVaQR" aria-expanded="true"
          aria-controls="collapseVaQR">
          <i class="fas fa-check-square"></i>
          <span>Validasi QR-Code</span>
        </a>
        <div id="collapseVaQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @canany(['superadmin','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['rs-admin','rs-staff','rs-kasi','rs-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-sifat')}}">Rubah Sifat</a>
            @elsecanany(['rb-admin','rb-kasi','rb-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-bentuk')}}">Rubah Bentuk</a>
            @endcanany
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/laporan')}}">
          <i class="fas fa-file"></i>
          <span>Laporan</span>
        </a>
      </li>
      @canany(['superadmin','rs-admin','rb-admin','sekretaris','kepala-dinas'])
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/pengumuman')}}">
          <i class="fas fa-bell"></i>
          <span>Pengumuman</span>
        </a>
      </li>
      @endcanany
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{auth()->user()->username}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout-admin">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Rubah Bentuk</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              
            <div class="card mb-4">
            <div class="card-body">

                <form action="/admin/data-rubah-bentuk/edit/{{$formBentuk->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <input type="text" class="form-control" id="exampleInputEmail1" name="id" value="{{$formBentuk->id}}" hidden>
                <div class="form-group">
                    <label for="exampleInputEmail1">No. Kendaraan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="noKendaraan" value="{{$formBentuk->nomor_kendaraan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Nama Pemilik Lama</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" name="namaPemilikLama" value="{{$formBentuk->nama_pemilik_lama}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Nama Pemilik Baru</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" name="namaPemilikBaru" value="{{$formBentuk->nama_pemilik_baru}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail4">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail4" name="alamat" value="{{$formBentuk->alamat}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail5">Merk</label>
                    <input type="text" class="form-control" id="exampleInputEmail5" name="merk" value="{{$formBentuk->merk}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail6">Jenis</label>
                    <input type="text" class="form-control" id="exampleInputEmail6" name="jenis" value="{{$formBentuk->jenis}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail7">Warna</label>
                    <input type="text" class="form-control" id="exampleInputEmail7" name="warna" value="{{$formBentuk->warna}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail8">Tahun</label>
                    <input type="text" class="form-control" id="exampleInputEmail8" name="tahun" value="{{$formBentuk->tahun}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail9">Volume Silinder</label>
                    <input type="text" class="form-control" id="exampleInputEmail9" name="volumeSilinder" value="{{$formBentuk->volume_silinder}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail10">No. Landasan</label>
                    <input type="text" class="form-control" id="exampleInputEmail10" name="noLandasan" value="{{$formBentuk->no_landasan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail11">No. Mesin</label>
                    <input type="text" class="form-control" id="exampleInputEmail11" name="noMesin" value="{{$formBentuk->no_mesin}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail12">No. BPKB</label>
                    <input type="text" class="form-control" id="exampleInputEmail12" name="noBpkb" value="{{$formBentuk->no_bpkb}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail13">No. Uji</label>
                    <input type="text" class="form-control" id="exampleInputEmail13" name="noUji" value="{{$formBentuk->no_uji}}">
                </div>
                <div class="row">
                    <div class="col-12">
                        Foto Sesudah Dibentuk 4 sisi
                        <label>Sisi depan</label>
                        <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="depan" placeholder="Sisi depan">
                        <br>
                        <label>Sisi kiri</label>
                        <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="kiri" placeholder="Sisi kiri">
                        <br>
                        <label>Sisi kanan</label>
                        <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="kanan" placeholder="Sisi kanan">
                        <br>
                        <label>Sisi belakang</label>
                        <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="belakang" placeholder="Sisi belakang">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
             
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b>Ringgo & Vina | IF ITERA</b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="/vendors/jquery/jquery.min.js"></script>
  <script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
  <script src="/js/ruang-admin.min.js"></script>
  <script src="/vendors/chart.js/Chart.min.js"></script>
  <script src="/js/demo/chart-area-demo.js"></script> 

</body>

</html>