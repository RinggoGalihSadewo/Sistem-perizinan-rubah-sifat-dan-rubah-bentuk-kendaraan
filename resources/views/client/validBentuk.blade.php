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

    <title>Data Validasi Perizinan Rubah Bentuk</title>
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
                            <a class="nav-link active {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="{{url('/')}}">Beranda</a>
                            <a class="nav-link active {{ Request::is('/masuk') ? 'active' : '' }}" href="{{url('/masuk')}}">Masuk <img src="/img/logo/masuk.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

    <div class="valid">
        <center>

        <p>Surat permohonan perizinan rubah bentuk oleh sdr. <b>{{$data->nama_pemilik_lama}}</b> dengan Nomor Kendaraan {{$data->nomor_kendaraan}} ini sudah disetujui oleh semua koordinator</p>
        <p>Berikut adalah data validasi perizinan yang sah pada surat permohonan ini : </p>

        <br>

        </center>
        
        <div class="table-responsive">
          <table class="table align-items-center table-bordered text-center">
            <thead class="thead-light text-white" bgColor="#22577E">
              <tr>
                <th>Nama Pemilik</th>
                <th>Nomor Kendaraan</th>
                <th>Kasi</th>
                <th>Kabid</th>
                <th>Sekretaris</th>
                <th>Kepala Dinas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$data->nama_pemilik_lama}}</td>
                <td>{{$data->nomor_kendaraan}}</td>
                <td>
                  <p class="badge bg-success">{{$data->trackSuratBentuk['kasi']}}</p>
                </td>
                <td>
                  <p class="badge bg-success">{{$data->trackSuratBentuk['kabid']}}</p>        
                </td>
                <td>
                  <p class="badge bg-success">{{$data->trackSuratBentuk['sekretaris']}}</p>                      
                </td>
                <td>
                  <p class="badge bg-success">{{$data->trackSuratBentuk['kepala_dinas']}}</p>           
                </td>
              </tr>
            </tbody>
          </table>
        </div>

    </div>
          



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