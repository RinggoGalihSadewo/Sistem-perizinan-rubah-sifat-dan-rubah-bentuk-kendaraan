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

    <script src="/js/index.js"></script>

    <title>Rubah Sifat Kendaraan</title>
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
                            <a class="nav-link" href="#">Alur Kordinasi</a>
                            <a class="nav-link" href="#">Profile</a>
                            <a class="nav-link" href="{{url('/logout')}}" target="_blank">Keluar <img src="/img/logo/logout.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section id="penjelasan">
            <div class="row d-flex">
                <div class="col-5">
                    <img src="/img/logo/perizinan.png" alt="">
                </div>
                <div class="col-7 textPenjelasan">
                <img src="/img/logo/text-perizinan.png" alt="" >
                <p class="mt-4 text-center">E-Perizinan Rubah Sifat dan Rubah Bentuk Kendaraan adalah sistem pelayanan online berbasis website yang disediakan oleh Dinas Perhubungan Provinsi Lampung dimana memiliki manfaat bagi masyarakat atau client yang ingin melakukan perizinan mengenai rubah sifat ataupun rubah bentuk kendaraan dengan hanya membuka website tersebut dan jika surat perizinan sudah selesai akan langsung bisa di download surat tersebut karena dikirimkan melalui email pribadi, sehingga akan menghemat waktu dan tenaga.</p>
                </div>
            </div>
        </section>

        <section id="perizinan">
            <h1 style="font-family: 'Dancing Script', cursive;" class="text-center">Form Surat Perizinan</h1>
            <div class="formPerizinan">
                <h4 class="text-center fw-bold">FORM SURAT PERIZINAN RUBAH SIFAT</h4>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="mt-5">
                    <form action="/perizinan-rubah-sifat" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                Nomor Kendaraan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="noKendaraan">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Nama Pemilik
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="namaPemilik">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Alamat Pemilik
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="alamat">
                            </div>
                        </div>
            
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Merk / Type
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="merk">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Jenis
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="jenis">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Model
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="model">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Warna
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="warna">
                            </div>
                        </div>
                        
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Tahun Pembuatan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="tahun">
                            </div>
                        </div>
                        
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Isi Silinder
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="silinder">
                            </div>
                        </div>

                        <br>
                            
                        <div class="row">
                            <div class="col-sm-6">
                                No. Landasan / Rangka
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="noLandasan">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                No. Mesin
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="noMesin">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                No. BPKB
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="bpkb">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto Sebelum
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="fotoSebelum">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto Sesudah
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="fotoSesudah">
                            </div>
                        </div>

                        <br>

                        <center>
                            <div class="col-12">
                                <button class="btn" type="submit">KIRIM</button>
                            </div>
                        </center>

                        
                    </form>
                </div>
            </div>
        </section>

 

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