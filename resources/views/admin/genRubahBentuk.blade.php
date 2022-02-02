<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Generate Qr Code Rubah Sifat</title>
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/dashboard')}}">
          <i class="fas fa-users"></i>
          <span>Data Pengguna</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm"> 
          <i class="fas fa-file-alt"></i>
          <span>Data Jenis Surat</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-user-tie"></i>
          <span>Data Pejabat</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/data-qr-code')}}">
          <i class="fas fa-file-signature"></i>
          <span>Data QR-Code</span>
        </a>
        <div id="collapseQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="simple-tables.html">QR Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGeQR" aria-expanded="true"
          aria-controls="collapseGeQR">
          <i class="fas fa-qrcode"></i>
          <span>Generate QR-Code</span>
        </a>
        <div id="collapseGeQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item active" href="{{url('/admin/generate-qrcode-rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVaQR" aria-expanded="true"
          aria-controls="collapseVaQR">
          <i class="fas fa-check-square"></i>
          <span>Validasi QR-Code</span>
        </a>
        <div id="collapseVaQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="simple-tables.html">QR Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>

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
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Generate QR Code Rubah Bentuk</h1>
          </div>

            <!-- Horizontal Form -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">No. Surat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="No. Surat">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">No. Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="No. Kendaraan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword4" class="col-sm-3 col-form-label">Nama Pemilik</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Nama Pemilik">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-f orm-label">Jenis Surat</label>
                      <div class="col-sm-9">
                        <select type="text" class="form-control">
                        <option value="Rubah Sifat">Rubah Sifat</option>
                        <option value="Rubah Bentuk">Rubah Bentuk</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword5" class="col-sm-3 col-form-label">MD5 Hash</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword5" placeholder="MD5 Hash">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Generate</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            

 

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