<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Lihat Surat Perizinan Rubah Sifat</title>
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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-file-signature"></i>
          <span>Data QR-Code</span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @canany(['superadmin','sekretaris','kepala-dinas'])
            <a class="collapse-item active" href="{{url('/admin/data-qr-code/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['superadmin','rs-admin','sekretaris','kepala-dinas'])
            <a class="collapse-item active" href="{{url('/admin/data-qr-code/rubah-sifat')}}">Rubah Sifat</a>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lihat Hasil Surat Perizinan Rubah Sifat</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">

              <div class="surat">

                  <div class="kop">
                    <img src="/img/surat/kop.PNG" width="100%">
                  </div>

                  <center>
                  <h4><u>SURAT KETERANGAN</u></h4>
                  <p>Nomor : {{isset($data->qrSifat['no_surat']) ? $data->qrSifat['no_surat'] : ''}}</p>
                  </center>

                  <table border="0" cellpadding=""> 
                    <tr>
                      <td valign="top">Membaca</td>
                      <td valign="top">:</td>
                      <td>Permohonan dari 
                      @if($data->jenis_perubahan === "Perubahan Sifat (HITAM)")
                      <b>Sdr. {{$data->nama_pemilik}}</b> Tanggal {{$data->created_at->isoFormat('D MMMM Y')}}, yang beralamat di {{$data->alamat}}</td>
                      @elseif($data->jenis_perubahan === "Perubahan Sifat (HITAM) BBN" || $data->jenis_perubahan === "Penetapan Sifat (KUNING)" || $data->jenis_perubahan === "Perubahan Sifat (HITAM KE KUNING)")
                      <b>Sdr. {{$data->nama_pemilik_lama}}</b> Tanggal {{$data->created_at->isoFormat('D MMMM Y')}}, yang beralamat di {{$data->alamat}}</td>
                      @endif
                    </tr>
                    <tr>
                      <td>Menimbang</td>
                      <td>:</td>
                      <td>Bahwa berdasarkan hasil penelitian/check fisik kendaraan tersebut memenuhi persyaratan untuk dilakukan <b>Perubahan Sifat.</b></td>
                    </tr>
                    <tr>           
                      <td valign="top">Mengingat</td>
                      <td valign="top">:</td>
                      <td>
                        <ol start="1">
                          <li>Undang-Undang No. 22 Tahun 2009 Tentang Lalu Lintas dan Angkutan Jalan;</li>
                          <li>Peraturan Pemerintah No. 55 Tahun 2012 Tentang Kendaraan dan Pengemudi;</li>
                          <li>Peraturan Pemerintah No. 74 Tahun 2014 Tentang Angkutan Jalan;</li>
                          <li>Peraturan Menteri Perhubungan No. PM. 60 Tahun 2019 tentang Penyelenggaraan Angkutan Barang dengan Kendaraan Bermotor di Jalan;</li>
                          <li>Peraturan Menteri Perhubungan No. PM. 19 Tahun 2021 Tentang Pengujian Berkala Kendaraan Bermotor</li>
                          <li>Keputusan Menteri Perhubungan No. PM. 33 Tahun 2018 Tentang Pengujian Tipe Kendaraan Bermotor;</li>
                          <li>Peraturan Gubernur Lampung No. 36 Tahun 2007 Tentang Ketentuan Perubahan Sifat dan Perubahan Bentuk Kendaraan Bermotor</li>
                        </ol>
                      </td>
                    </tr>
                    <tr>
                      <td valign="top">Menerangkan</td>
                      <td valign="top">:</td>
                      <td>Memberikan Surat Keterangan <b>{{$data->jenis_perubahan}}, 
                      @if($data->jenis_perubahan === "Perubahan Sifat (HITAM)") 
                      Sdr. {{$data->nama_pemilik}}</b> yang beralamat di {{$data->alamat}}, dengan data kendaraan sebagai berikut:
                      @elseif($data->jenis_perubahan === "Perubahan Sifat (HITAM) BBN" || $data->jenis_perubahan === "Penetapan Sifat (KUNING)" || $data->jenis_perubahan === "Perubahan Sifat (HITAM KE KUNING)")
                      Sdr. {{$data->nama_pemilik_lama}}</b> yang beralamat di {{$data->alamat}}, dengan data kendaraan sebagai berikut:
                      @endif
                      <br>
                        <table border="0" cellpadding="5">
                          <tr>
                              <td>-</td>
                              <td>
                                Nomor Kendaraan
                              </td>
                              <td>:</td>
                              <td>{{$data->nomor_kendaraan}}</td>
                          </tr>
                          @if($data->jenis_perubahan == "Perubahan Sifat (HITAM)")
                          <tr>
                              <td>-</td>
                              <td>
                                Nama Pemilik
                              </td>
                              <td>:</td>
                              <td>{{$data->nama_pemilik}}</td>
                          </tr> 
                          @elseif($data->jenis_perubahan == "Perubahan Sifat (HITAM) BBN" || $data->jenis_perubahan == "Penetapan Sifat (KUNING)" || $data->jenis_perubahan == "Perubahan Sifat (HITAM KE KUNING)")
                          <tr>
                              <td>-</td>
                              <td>
                                Nama Pemilik Lama
                              </td>
                              <td>:</td>
                              <td>{{$data->nama_pemilik_lama}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Nama Pemilik Baru
                              </td>
                              <td>:</td>
                              <td>{{$data->nama_pemilik_baru}}</td>
                          </tr>  
                          @endif                    
                          <tr>
                              <td>-</td>
                              <td>
                                Alamat Pemilik
                              </td>
                              <td>:</td>
                              <td>{{$data->alamat}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Merk/Type
                              </td>
                              <td>:</td>
                              <td>{{$data->merk}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Jenis
                              </td>
                              <td>:</td>
                              <td>{{$data->jenis}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Model
                              </td>
                              <td>:</td>
                              <td>{{$data->model}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Warna
                              </td>
                              <td>:</td>
                              <td>{{$data->warna}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Tahun Pembuatan
                              </td>
                              <td>:</td>
                              <td>{{$data->tahun}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Isi Silinder
                              </td>
                              <td>:</td>
                              <td>{{$data->isi_silinder}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                No. Landasan/Rangka
                              </td>
                              <td>:</td>
                              <td>{{$data->no_landasan}}</td>
                          </tr>                        
                          <tr>
                              <td>-</td>
                              <td>
                                No. Mesin
                              </td>
                              <td>:</td>
                              <td>{{$data->no_mesin}}</td>
                          </tr>  
                          <tr>
                              <td>-</td>
                              <td>
                                No. BPKB
                              </td>
                              <td>:</td>
                              <td>{{$data->no_bpkb}}</td>
                          </tr>
                          <tr>
                              <td>-</td>
                              <td>
                                Masa Berlaku s/d
                              </td>
                              <td>:</td>
                              <td>{{$data->qrSifat->masa}}</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      @if($data->qrSifat->catatan != "-")
                      <td>Catatan : {{$data->qrSifat->catatan}}, Surat Keterangan ini hanya berlaku untuk Perpanjangan Masa Berlaku STNK Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</td>
                      @elseif($data->qrSifat->catatan == "-")
                      <td>Catatan : Surat Keterangan ini hanya berlaku untuk Perpanjangan Masa Berlaku STNK Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</td>
                      @endif
                    </tr>
                  </table>

                  <div class="paraf d-flex" style="margin-top:80px"> 
                    <div class="qr">
                    <!-- <img src="data:image/png;base64, {{$qr}}"> -->
                     {{$qr}}
                    </div>
                    <div class="subParaf">
                      <table border="0" cellpadding="5">
                        <tr>
                          <td>DIKELUARKAN DI</td>
                          <td>:</td>
                          <td>BANDAR LAMPUNG</td>
                        </tr>
                        <tr>
                          <td>TANGGAL</td>
                          <td>:</td>
                          <td>{{strToupper($date)}}</td>
                        </tr>
                        <tr>
                          <td>KEPALA DINAS</td>
                        </tr>
                        <tr>
                        <td>{{$qr2}}</td>
                        </tr>
                      </table>
                      <div style="margin-left: 1%;">
                        <div>
                          <!-- <img src="/img/ttd kadis.jpeg" alt="" width="240px">  -->
                        </div>
                        <!-- <b><u>BAMBANG SUMBOGO, SE,. MM</u></b> -->
                        <p>
                          Pembina Utama Muda
                          <br>
                          NIP. 19710422 199503 1 002
                        </p>
                        
                      </div>
                    </div>
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