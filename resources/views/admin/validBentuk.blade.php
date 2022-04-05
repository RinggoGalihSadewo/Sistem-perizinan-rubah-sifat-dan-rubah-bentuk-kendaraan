<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Validasi Data Rubah Bentuk</title>
  <link href="/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
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
            @canany(['superadmin','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['rs-admin','rs-staff','rs-kasi','rs-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            @elsecanany(['superadmin','rb-admin','rb-kasi','rb-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVaQR" aria-expanded="true"
          aria-controls="collapseVaQR">
          <i class="fas fa-check-square"></i>
          <span>Validasi QR-Code</span>
        </a>
        <div id="collapseVaQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @canany(['superadmin','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item active" href="{{url('/admin/validasi/rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['rs-admin','rs-staff','rs-kasi','rs-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-sifat')}}">Rubah Sifat</a>
            @elsecanany(['rb-admin','rb-kasi','rb-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item active" href="{{url('/admin/validasi/rubah-bentuk')}}">Rubah Bentuk</a>
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
      @canany(['superadmin','rs-admin','rb-admin'])
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/tambah-admin')}}">
          <i class="fas fa-users"></i>
          <span>Tambah Admin</span>
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
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Validasi Data Rubah Bentuk</h1>
          </div> -->

          <div class="row">
            <div class="col-lg-12 mb-4">

            <form action="/admin/validasi/rubah-bentuk/cari" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6"><h1 class="h3 mb-0 text-gray-800">Validasi Data Rubah Bentuk</h1></div>
                    <div class="col-sm-6 d-inline">
                        <input name="key" type="text" class="form-control" placeholder="Cari nomor kendaraan">
                        <button class="btn btn-primary d-none">Cari</button>
                    </div>
                </div>
                </form>

                <br>

          <!-- Simple Tables -->
          <div class="card">

            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nomor Kendaraan</th>
                    <th>Kasi</th>
                    <th>Kabid</th>
                    <th>Sekretaris</th>
                    <th>Kepala Dinas</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="/admin/data-rubah-bentuk/detail/{{$d->id}}">{{$d->nomor_kendaraan}}</a></td>
                    <td>
                      @if($d->trackSuratBentuk['kasi'] == "Belum Validasi")
                      @canany(['rb-kasi','superadmin','rb-admin'])
                      <a href="/admin/validasi/rubah-bentuk/kasi/{{$d->id}}" class="btn btn-sm btn-danger">{{$d->trackSuratBentuk['kasi']}}</a>
                      @elsecanany(['rb-kabid','sekretaris','kepala-dinas'])
                      <a href="#" class="btn btn-sm btn-danger" onclick="alert('Anda bukan Kasi')">{{$d->trackSuratBentuk['kasi']}}</a>
                      @endcanany
                      @elseif($d->trackSuratBentuk['kasi'] == "Sudah Validasi")
                      <!-- <a href="#" class="btn btn-sm btn-success">{{$d->trackSuratBentuk['kasi']}}</a> -->
                      <div class="badge bg-success text-white">{{$d->trackSuratBentuk->tgl_kasi}}</div>
                      <br>
                      <div class="">{{Str::limit($d->trackSuratBentuk->nama_kasi,25)}}</div>
                      @endif
                    </td>
                    <td>
                      @if($d->trackSuratBentuk['kabid'] == "Belum Validasi")
                      @canany(['rb-kabid','superadmin','rb-admin'])
                      <a href="/admin/validasi/rubah-bentuk/kabid/{{$d->id}}" class="btn btn-sm btn-danger">{{$d->trackSuratBentuk['kabid']}}</a>
                      @elsecanany(['rb-kasi','sekretaris','kepala-dinas'])
                      <a href="#" class="btn btn-sm btn-danger" onclick="alert('Anda bukan Kabid')">{{$d->trackSuratBentuk['kabid']}}</a>
                      @endcanany
                      @elseif($d->trackSuratBentuk['kabid'] == "Sudah Validasi")
                      <!-- <a href="#" class="btn btn-sm btn-success">{{$d->trackSuratBentuk['kabid']}}</a> -->
                      <div class="badge bg-success text-white">{{$d->trackSuratBentuk->tgl_kabid}}</div>
                      <br>
                      <div class="">{{Str::limit($d->trackSuratBentuk->nama_kabid,25)}}</div>
                      @endif                      
                    </td>
                    <td>
                      @if($d->trackSuratBentuk['sekretaris'] == "Belum Validasi")
                      @canany(['sekretaris','superadmin','rb-admin']) 
                      <a href="/admin/validasi/rubah-bentuk/sekretaris/{{$d->id}}" class="btn btn-sm btn-danger">{{$d->trackSuratBentuk['sekretaris']}}</a>
                      @elsecanany(['rb-kasi','rb-kabid','kepala-dinas'])
                      <a href="#" class="btn btn-sm btn-danger" onclick="alert('Anda bukan Sekretaris')">{{$d->trackSuratBentuk['sekretaris']}}</a>
                      @endcanany
                      @else
                      <!-- <a href="#" class="btn btn-sm btn-success">{{$d->trackSuratBentuk['sekretaris']}}</a> -->
                      <div class="badge bg-success text-white">{{$d->trackSuratBentuk->tgl_sekretaris}}</div>
                      <br>
                      <div class="">{{Str::limit($d->trackSuratBentuk->nama_sekretaris,25)}}</div>
                      @endif                      
                    </td>
                    <td>
                      @if($d->trackSuratBentuk['kepala_dinas'] == "Belum Validasi")
                      @canany(['kepala-dinas','superadmin','rb-admin']) 
                      <a href="/admin/validasi/rubah-bentuk/kepala-dinas/{{$d->id}}" class="btn btn-sm btn-danger">{{$d->trackSuratBentuk['kepala_dinas']}}</a>
                      @elsecanany(['rb-kasi','rb-kabid','sekretaris'])
                      <a href="#" class="btn btn-sm btn-danger" onclick="alert('Anda bukan Kepala Dinas')">{{$d->trackSuratBentuk['kepala_dinas']}}</a>
                      @endcanany
                      @else
                      <!-- <a href="#" class="btn btn-sm btn-success">{{$d->trackSuratBentuk['kepala_dinas']}}</a> -->
                      <div class="badge bg-success text-white">{{$d->trackSuratBentuk->tgl_kepala}}</div>
                      <br>
                      <div class="">{{Str::limit($d->trackSuratBentuk->nama_kepala_dinas,25)}}</div>
                      @endif              
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer"></div>
          </div>
          <div class="d-flex mt-4 float-right">
                {!! $data->links() !!}
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