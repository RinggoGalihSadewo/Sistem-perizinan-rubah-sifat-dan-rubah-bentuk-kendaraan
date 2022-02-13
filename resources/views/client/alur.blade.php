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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Form Surat Perizinan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{url('perizinan-rubah-sifat')}}" target="_blank">Perizinan Rubah Sifat Kendaraan</a></li>
                                    <li><a class="dropdown-item" href="{{url('perizinan-rubah-bentuk')}}" target="_blank">Perizinan Rubah Bentuk Kendaraan</a></li>
                                </ul>
                            </li>
                            <a class="nav-link" href="{{url('/alur-kordinasi')}}">Alur Kordinasi</a>
                            <a class="nav-link" href="{{url('/profile')}}">Profile</a>
                            <a class="nav-link" href="{{url('/logout')}}" target="_blank">Keluar <img src="/img/logo/logout.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

    <br>
    @foreach($data as $d)
    <div class="row">
        <div class="col-12">
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
            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/YBWc55P.png"></div>
            <div class="col-10">Want any help? Please &nbsp;<a> contact us</a></div>
        </div>
    </div>
    </div>

    </div>
    </div> 
    @endforeach
    <br>

        <footer> ©️ Copyright Pelayanan Perizinan Rubah Sifat dan Rubah Bentuk  Online. All Rights Reserved
Development by  IF’18 ITERA</footer>
    </div>


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