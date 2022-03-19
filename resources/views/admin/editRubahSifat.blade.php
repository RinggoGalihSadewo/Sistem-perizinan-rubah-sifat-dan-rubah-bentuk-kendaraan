<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Edit Data Rubah Sifat</title>
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
            @canany(['superadmin','sekretaris','kepala-dinas'])
            <a class="collapse-item active" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
            @elsecanany(['rs-admin','rs-staff','rs-kasi','rs-kabid','sekretaris','kepala-dinas'])
            <a class="collapse-item active" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
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
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Rubah Sifat</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              
            <div class="card mb-4">
            <div class="card-body">

                <form action="/admin/data-rubah-sifat/edit/{{$formSifat->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <input type="text" class="form-control" id="" name="id" value="{{$formSifat->id}}" hidden>

                <div class="form-group">
                    <label for="exampleInputEmail1">No. Kendaraan</label>
                    <input type="text" class="form-control @error('noKendaraan') is-invalid @enderror" id="exampleInputEmail1" name="noKendaraan" value="{{$formSifat->nomor_kendaraan}}">
                    @error('noKendaraan')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Perubahan</label>
                    <input type="text" class="form-control @error('jenisPerizinan') is-invalid @enderror" id="exampleInputEmail1" name="jenisPerizinan" value="{{$formSifat->jenis_perubahan}}" disabled>
                    <input type="text" class="form-control @error('jenisPerizinan') is-invalid @enderror" id="exampleInputEmail1" name="jenisPerizinan" value="{{$formSifat->jenis_perubahan}}" hidden>
                    @error('jenisPerizinan')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                @if($formSifat->jenis_perubahan === "Perubahan Sifat (HITAM)")
                <div class="form-group">
                    <label for="exampleInputEmail2">Nama Pemilik</label>
                    <input type="text" class="form-control @error('namaPemilik') is-invalid @enderror" id="exampleInputEmail2" name="namaPemilik" value="{{$formSifat->nama_pemilik}}">
                    @error('namaPemilik')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                @endif
                @if($formSifat->jenis_perubahan === "Perubahan Sifat (HITAM) BBN" || $formSifat->jenis_perubahan === "Penetapan Sifat (KUNING)" || $formSifat->jenis_perubahan === "Perubahan Sifat (HITAM KE KUNING)")
                <div class="form-group">
                    <label for="lama">Nama Pemilik Lama</label>
                    <input type="text" class="form-control @error('namaPemilikLama') is-invalid @enderror" id="lama" name="namaPemilikLama" value="{{$formSifat->nama_pemilik_lama}}">
                    @error('namaPemilikLama')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="baru">Nama Pemilik Baru</label>
                    <input type="text" class="form-control @error('namaPemilikBaru') is-invalid @enderror" id="baru" name="namaPemilikBaru" value="{{$formSifat->nama_pemilik_baru}}">
                    @error('namaPemilikBaru')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail3">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail3" name="alamat" value="{{$formSifat->alamat}}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail4">Merk</label>
                    <input type="text" class="form-control @error('merk') is-invalid @enderror" id="exampleInputEmail4" name="merk" value="{{$formSifat->merk}}">
                    @error('merk')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail5">Jenis</label>
                    <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="exampleInputEmail5" name="jenis" value="{{$formSifat->jenis}}">
                    @error('jenis')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail6">Model</label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" id="exampleInputEmail6" name="model" value="{{$formSifat->model}}">
                    @error('model')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail7">Warna</label>
                    <input type="text" class="form-control @error('warna') is-invalid @enderror" id="exampleInputEmail7" name="warna" value="{{$formSifat->warna}}">
                    @error('warna')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail8">Tahun</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="exampleInputEmail8" name="tahun" value="{{$formSifat->tahun}}">
                    @error('tahun')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail9">Isi Silinder</label>
                    <input type="text" class="form-control @error('isiSilinder') is-invalid @enderror" id="exampleInputEmail9" name="isiSilinder" value="{{$formSifat->isi_silinder}}">
                    @error('isiSilinder')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail10">No. Landasan</label>
                    <input type="text" class="form-control @error('noLandasan') is-invalid @enderror" id="exampleInputEmail10" name="noLandasan" value="{{$formSifat->no_landasan}}">
                    @error('noLandasan')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail11">No. Mesin</label>
                    <input type="text" class="form-control @error('noMesin') is-invalid @enderror" id="exampleInputEmail11" name="noMesin" value="{{$formSifat->no_mesin}}">
                    @error('noMesin')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail12">No. BPKB</label>
                    <input type="text" class="form-control @error('noBpkb') is-invalid @enderror" id="exampleInputEmail12" name="noBpkb" value="{{$formSifat->no_bpkb}}">
                    @error('noBpkb')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        Surat Permohonan
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('suratPermohonan') is-invalid @enderror" id="" name="suratPermohonan">
                        @error('suratPermohonan')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Surat Pernyataan
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('suratPernyataan') is-invalid @enderror" id="" name="suratPernyataan">
                        @error('suratPernyataan')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Foto FC. STNK
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('fcStnk') is-invalid @enderror" id="" name="fcStnk">
                        @error('fcStnk')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                @if($formSifat->jenis_perubahan === "Perubahan Sifat (HITAM) BBN")
                <div class="row" id="ktp">
                    <div class="col-sm-6">Foto FC. KTP</div><div class="col-sm-6"><input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="thi s.setCustomValidity('')"type="file" class="form-control" id="iKtp" name="ktp"></div>
                </div>

                <div id="br2">
                    <br>
                </div>
                @endif

                <div class="row">
                    <div class="col-sm-6">
                        Foto FC. BPKB
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('fcBpkb') is-invalid @enderror" id="" name="fcBpkb">
                        @error('fcBpkb')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Foto FC. Buku Uji (KIR)
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('fcBukuUji') is-invalid @enderror" id="" name="fcBukuUji">
                        @error('fcBukuUji')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Foto Faktur Kendaraan 
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('faktur') is-invalid @enderror" id="" name="faktur">
                        @error('faktur')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Foto SRUT (Sertifikasi Registrasi Uji Tipe)
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('serut') is-invalid @enderror" id="" name="serut">
                        @error('serut')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Dokumen Perusahaan
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('docPerusahaan') is-invalid @enderror" id="" name="docPerusahaan">
                        @error('docPerusahaan')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Dimensi Kendaraan
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('dimensi') is-invalid @enderror" id="" name="dimensi">
                        @error('dimensi')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Surat Keterangan Bengkel
                    </div>
                    <div class="col-sm-6">
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('bengkel') is-invalid @enderror" id="" name="bengkel">
                        @error('bengkel')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        Foto Kendaraan 4 Sisi
                    </div>
                    <div class="col-sm-6">
                        <label>Sisi depan</label>
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('depan') is-invalid @enderror" id="" name="depan" placeholder="Sisi depan">
                        @error('depan')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                        <br>
                        <label>Sisi kiri</label>
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('kiri') is-invalid @enderror" id="" name="kiri" placeholder="Sisi kiri">
                        @error('kiri')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                        <br>
                        <label>Sisi kanan</label>
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('kanan') is-invalid @enderror" id="" name="kanan" placeholder="Sisi kanan">
                        @error('kanan')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                        <br>
                        <label>Sisi belakang</label>
                        <input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('belakang') is-invalid @enderror" id="" name="belakang" placeholder="Sisi belakang">
                        @error('belakang')
                        <div class="invalid-feedback">
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}	
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>

                <br>

                @if($formSifat->jenis_perubahan === "Penetapan Sifat (KUNING)" || $formSifat->jenis_perubahan === "Perubahan Sifat (HITAM KE KUNING)")
                <div class="row" id="notaris">
                    <div class="col-sm-6">Akte Notaris</div><div class="col-sm-6"><input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" type="file" class="form-control @error('akteNotaris') is-invalid @enderror" id="iNotaris" name="akteNotaris">
                    @error('akteNotaris')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror</div>
                </div>

                <div id="br3">
                    <br>
                </div>

                <div class="row" id="kbli">
                    <div class="col-sm-6">NIB / SIUP / TDP dengan KBLI yang sudah ditentukan</div><div class="col-sm-6"><input required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomVa lidity('')"type="file" class="form-control @error('kbli') is-invalid @enderror" id="iKbli" name="kbli">
                    @error('kbli')
                    <div class="invalid-feedback">
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}	
                        </div>
                    </div>
                    @enderror</div>
                </div>

                @endif
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