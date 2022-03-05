<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/client/style.css">

    <title>Alur Kordinasi</title>
  </head>
  <body>

  <div class="container-sm-fluid">
        <section id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                <a class="navbar-brand d-flex" href="#"><img src="/img/logo/dishub.png" alt=""><h2 style="margin-top:5%; margin-left: 5%;">E-Perizinan</h2></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Beranda</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Form Surat Perizinan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{url('perizinan-rubah-sifat')}}">Perizinan Rubah Sifat Kendaraan</a></li>
                                    <li><a class="dropdown-item" href="{{url('perizinan-rubah-bentuk')}}">Perizinan Rubah Bentuk Kendaraan</a></li>
                                </ul>
                            </li>
                            <a class="nav-link active" href="{{url('/alur-kordinasi')}}">Alur Kordinasi</a>
                            <a class="nav-link active" href="{{url('/profile')}}">Profile</a>
                            <a class="nav-link active" href="{{url('/logout')}}">Keluar <img src="/img/logo/logout.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

    <br>
    @if(!$data)
    <p>data belum ada</p>
    @elseif($data)
    @foreach($data as $d)
    <div class="card">
        <div class="title">Surat Perizinan Rubah Sifat</div>
        <div class="info">
            <div class="row">
                <div class="col-7"> <span id="heading">Waktu Perizinan</span><br> <span id="details">{{$d->created_at}}</span> </div>
                <div class="col-5 pull-right"> <span id="heading">Order No.</span><br> <span id="details">{{$d->id}}</span> </div>
            </div>
            <br>
            <div class="row">
                <span>Nomor Kendaraan : {{$d->nomor_kendaraan}}</span>
            </div>
        </div>
        <div class="tracking">
            <div class="title">Alur Surat</div>
        </div>
        <div class="progress-track">
            <ul id="progressbar">
                
                @if($d->trackSuratSifat['staff_angkutan'] == "Belum Validasi")
                    <li class="step0" id="step1">Staff Angkutan</li>
                @else
                    <li class="step0 active" id="step1">Staff Angkutan</li>
                @endif

                @if($d->trackSuratSifat['kasi_angkutan'] == "Belum Validasi")
                    <li class="step0 text-center" id="step2">Kasi Angkutan</li>
                @else
                    <li class="step0 active text-center" id="step2">Kasi Angkutan</li>
                @endif

                @if($d->trackSuratSifat['kabid_lla'] == "Belum Validasi")
                    <li class="step0 text-right" id="step3"><span style="margin-left: 40%;">Kabid LLA</span></li>
                @else
                    <li class="step0 active" id="step3"><span style="margin-left: 40%;">Kabid LLA</span></li>
                @endif

                @if($d->trackSuratSifat['sekretariat'] == "Belum Validasi")
                    <li class="step0 text-right" id="step4"><span style="margin-left: 35%;">Sekretariat</span></li>
                @else
                    <li class="step0 active text-right" id="step4"><span style="margin-left: 35%;">Sekretariat</span></li>
                @endif

                @if($d->trackSuratSifat['kepala_dinas'] == "Belum Validasi")
                    <li class="step0 text-right" id="step5"><span style="margin-left: 20%;">Kepala Dinas</span></li>
                @else
                    <li class="step0 active text-right" id="step5"><span style="margin-left: 20%;">Kepala Dinas</span></li>
                @endif
            </ul>
        </div>
        <div class="footer">
            <div class="row">
                @if(isset($d->qrSifat['qr_valid']))
                <a href="/alur-kordinasi/rubah-sifat/download-surat/{{$d->id}}" class="btn text-white" style="background: #22577E;">Download Surat</a>
                @else
                *Surat hanya bisa didownload ketika surat sudah melewati proses validasi oleh petugas perizinan
                @endif
            </div>
        </div>
    </div>
    <br>
    @endforeach
    @endif
    <br>

    @if(!$data2)
    <p>data belum ada</p>
    @elseif($data2)
    @foreach($data2 as $d)
    <div class="row">
        <div class="col-12">
    <div class="card">
    <div class="title">Surat Perizinan Rubah Bentuk</div>
    <div class="info">
        <div class="row">
            <div class="col-7"> <span id="heading">Waktu Perizinan</span><br> <span id="details">{{$d->created_at}}</span> </div>
            <div class="col-5 pull-right"> <span id="heading">Order No.</span><br> <span id="details">{{$d->id}}</span> </div>
        </div>
        <br>
        <div class="row">
            <span>Nomor Kendaraan : {{$d->nomor_kendaraan}}</span>
        </div>
    </div>
    <div class="tracking">
        <div class="title">Alur Surat</div>
    </div>
    <div class="progress-track">
        <ul id="progressbar2">
            
            @if($d->trackSuratBentuk['kasi'] == "Belum Validasi")
                <li class="step0" id="step1">Kasi</li>
            @else
                <li class="step0 active" id="step1">Kasi</li>
            @endif

            @if($d->trackSuratBentuk['kabid'] == "Belum Validasi")
                <li class="step0 text-center" id="step2"><span style="margin-left: -30%;">Kabid</span></li>
            @else
                <li class="step0 active text-center" id="step2"><span style="margin-left: -30%;">Kabid</span></li>
            @endif

            @if($d->trackSuratBentuk['sekretaris'] == "Belum Validasi")
                <li class="step0 text-right" id="step3"><span style="margin-left: 40%;">Sekretaris</span></li>
            @else
                <li class="step0 active" id="step3"><span style="margin-left: 40%;">Sekretaris</span></li>
            @endif

            @if($d->trackSuratBentuk['kepala_dinas'] == "Belum Validasi")
                <li class="step0 text-right" id="step4"><span style="margin-left: 35%;">Kepala Dinas</span></li>
            @else
                <li class="step0 active text-right" id="step4"><span style="margin-left: 35%;">Kepala Dinas</span></li>
            @endif
        </ul>
    </div>
    <div class="footer">
        <div class="row">
            @if(isset($d->qrBentuk['qr_valid']))
            <a href="/alur-kordinasi/rubah-bentuk/download-surat/{{$d->id}}" class="btn text-white" style="background: #22577E;">Download Surat</a>
            @else
            *Surat hanya bisa didownload ketika surat sudah melewati proses validasi oleh petugas perizinan
            @endif
        </div>
    </div>
    </div>

    </div>
    </div> 
    <br>
    @endforeach
    @endif

    <!-- Footer -->

    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1E6091"
            >
        <!-- Grid container -->
        <div class="container-fluid p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
            <!-- Grid column -->
            <div class="col-md-1 col-lg-1 col-xl-1 mx-auto mt-1">
                    <img src="/img/logo/dishub.png" alt="" width="85px" height="85px">
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3" >
                <h6 class="text-uppercase mb-4 font-weight-bold" style="margin-left: -70px">
                <b>DINAS PERHUBUNGAN PROVINSI LAMPUNG</b>
                </h6>
                <p style="text-align: justify; margin-left: -70px">
                Dishub Provinsi Lampung adalah Penyelenggaraan urusan pemerintah bidang kebijakan perhubungan atau transportasi untuk wilayah provinsi Lampung. Fungsi dari Dinas Perhubungan adalah merumuskan kebijakan bidang perhubungan dalam wilayah kerjanya, kebijakan teknis bidang perhubungan, penyelenggaraan administrasi termasuk perizinan angkutan perhubungan, evaluasi dan laporan terkait bidang perhubungan.
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"><b>KONTAK KAMI</b></h6>
                <p><i class="fas fa-map-marker-alt mr-3"></i> Jl. Cut Mutiah No.76 Teluk Betung, Bandar Lampung</p>
                <p><i class="fas fa-phone mr-3"></i> (0721) 470209</p>
                <p><i class="fas fa-envelope mr-3"></i> dishubprovlampung@gmail.com</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
            
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"><b>TEMUI KAMI</b></h6>

                <div class="d-flex">
                <!-- Facebook -->
                <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #3b5998; "
                href="https://www.facebook.com/pages/category/Community/Dinas-Perhubungan-Provinsi-Lampung-313932275317805/"
                role="button"
                ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #55acee"
                href="https://twitter.com/dishublampung1"
                role="button"
                ><i class="fab fa-twitter"></i
                ></a>

                <!-- Instagram -->
                <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #ac2bac"
                href="https://instagram.com/dishubprovlampung?utm_medium=copy_link"
                role="button"
                ><i class="fab fa-instagram"></i
                ></a>
                
                <!-- Youtube -->
                <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #dd4b39; color: white; padding-top: -10px;"
                href="https://youtube.com/c/ACNEntertainment"
                role="button"
                ><img src="/img/logo/youtube.png" alt="" width="20px" height="20px"></a> 
            </div>
            </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
            class="text-center p-3"
            style="background-color: #22577E; width: 100%; position: absolute; bottom: 0;"
            >
        © Copyright Pelayanan Perizinan Rubah Sifat dan Rubah Bentuk Online. All Rights Reserved Development by IF'18 ITERA
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Footer -->
            
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dfa1cbbb7b.js" crossorigin="anonymous"></script>

    <!-- Google Maps API -->

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4Hns7ZUFLMCxdRg6W_UZRl07Tcgv4h34&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>
  
</html>