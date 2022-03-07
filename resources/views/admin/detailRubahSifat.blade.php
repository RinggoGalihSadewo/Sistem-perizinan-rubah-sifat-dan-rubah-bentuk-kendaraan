<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Detail Data Rubah Sifat</title>
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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fas fa-file-alt"></i>
          <span>Data Jenis Surat</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-file-signature"></i>
          <span>Data QR-Code</span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGeQR" aria-expanded="true"
          aria-controls="collapseGeQR">
          <i class="fas fa-qrcode"></i>
          <span>Generate QR-Code</span>
        </a>
        <div id="collapseGeQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-bentuk')}}">Rubah Bentuk</a>
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
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/laporan')}}">
          <i class="fas fa-file"></i>
          <span>Laporan</span>
        </a>
      </li>      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/pengumuman')}}">
          <i class="fas fa-bell"></i>
          <span>Pengumuman</span>
        </a>
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
            <h1 class="h3 mb-0 text-gray-800">Detail Data Rubah Sifat</h1>
          </div>

          <div class="row">
            <div class="col-lg-6 mb-4">
              <p>Nomor kendaraan : {{$formSifat->nomor_kendaraan}}</p>
              <p>Jenis perubahan sifat : {{$formSifat->jenis_perubahan}}</p>
              @if($formSifat->jenis_perubahan == "Perubahan Sifat (HITAM)")
              <p>Nama pemilik : {{$formSifat->nama_pemilik}}</p>
              @elseif($formSifat->jenis_perubahan == "Perubahan Sifat (HITAM) BBN" || $formSifat->jenis_perubahan == "Penetapan Sifat (KUNING)" || $formSifat->jenis_perubahan == "Perubahan Sifat (HITAM KE KUNING)")
              <p>Nama pemilik lama : {{$formSifat->nama_pemilik_lama}}</p>
              <p>Nama pemilik baru : {{$formSifat->nama_pemilik_baru}}</p>
              @endif
              <p>Alamat : {{$formSifat->alamat}}</p>
              <p>Merk : {{$formSifat->merk}}</p>
              <p>Jenis : {{$formSifat->jenis}}</p>
              <p>Model : {{$formSifat->model}}</p>
              <p>Warna : {{$formSifat->warna}}</p>
              <p>Tahun : {{$formSifat->tahun}}</p>
              <p>Isi Silinder : {{$formSifat->isi_silinder}}</p>
              <p>No Landasan : {{$formSifat->no_landasan}}</p>
              <p>No Mesin : {{$formSifat->no_mesin}}</p>
              <p>No BPKB : {{$formSifat->no_bpkb}}</p>
            </div>
            <div class="col-lg-6 mb-4">
              <p>Surat Permohonan : <a href="/download-berkas-surat-permohonan/{{$berkas[0]->surat_permohonan}}"><button class="btn btn-primary">Download</button></a></p>
              <p>Surat Pernyataan : <a href="/download-berkas-surat-pernyataan/{{$berkas[0]->surat_pernyataan}}"><button class="btn btn-primary">Download</button></a></p>
              <p>Foto FC. STNK : {{$berkas[0]->fc_stnk}} <br> <img src="/storage/{{$berkas[0]->fc_stnk}}" width="200px" height="200px"></p>
              @if($formSifat->jenis_perubahan == "Perubahan Sifat (HITAM) BBN")
                <p>Foto FC. KTP : {{$berkas[0]->fc_ktp}} <br> <img src="/storage/{{$berkas[0]->fc_ktp}}" width="200px" height="200px"></p>
              @endif
              <p>Foto FC. BPKB : {{$berkas[0]->fc_bpkb}} <br> <img src="/storage/{{$berkas[0]->fc_bpkb}}" width="200px" height="200px"></p>
              <p>Foto FC. Buku Uji : {{$berkas[0]->fc_buku_uji}} <br> <img src="/storage/{{$berkas[0]->fc_buku_uji}}" width="200px" height="200px"></p>
              <p>Foto Faktur Kendaraan : {{$berkas[0]->foto_faktur}} <br> <img src="/storage/{{$berkas[0]->foto_faktur}}" width="200px" height="200px"></p>
              <p>Foto SRUT (Sertifikasi Registrasi Uji Tipe) : {{$berkas[0]->foto_serut}} <br> <img src="/storage/{{$berkas[0]->foto_serut}}" width="200px" height="200px"></p>
              <p>Dokumen Perusahaan : {{$berkas[0]->doc_perusahaan}} <br> <img src="/storage/{{$berkas[0]->doc_perusahaan}}" width="200px" height="200px"></p>
              <p>Dimensi Kendaraan : {{$berkas[0]->dimensi_kendaraan}} <br> <img src="/storage/{{$berkas[0]->dimensi_kendaraan}}" width="200px" height="200px"></p>
              <p>Surat Keterangan Bengkel : {{$berkas[0]->surat_bengkel}} <br> <img src="/storage/{{$berkas[0]->surat_bengkel}}" width="200px" height="200px"></p>
              <div class="row">
                <div class="col-12">
                <p>Foto Kendaraan 4 sisi : </p>
                <p>Foto Depan : {{$berkas[0]->foto_depan}} <br> <img src="/storage/{{$berkas[0]->foto_depan}}" width="200px" height="200px"></p>
                <p>Foto Belakang : {{$berkas[0]->foto_belakang}} <br> <img src="/storage/{{$berkas[0]->foto_belakang}}" width="200px" height="200px"></p>
                <p>Foto Kanan : {{$berkas[0]->foto_kanan}} <br> <img src="/storage/{{$berkas[0]->foto_kanan}}" width="200px" height="200px"></p>
                <p>Foto Kiri : {{$berkas[0]->foto_kiri}} <br> <img src="/storage/{{$berkas[0]->foto_kiri}}" width="200px" height="200px"></p>
                </div>
              </div>
              @if($formSifat->jenis_perubahan == "Penetapan Sifat (KUNING)" || $formSifat->jenis_perubahan == "Perubahan Sifat (HITAM KE KUNING)")
              <p>Akte Notaris : {{$berkas[0]->akte_notaris}} <br> <img src="/storage/{{$berkas[0]->akte_notaris}}" width="200px" height="200px"></p>
              <p>KBLI : {{$berkas[0]->kbli}} <br> <img src="/storage/{{$berkas[0]->kbli}}" width="200px" height="200px"></p>
              @endif
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