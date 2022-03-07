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

    <title>Profile</title>
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


        <section id="myProfile">
            <div class="myProfile">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-4">
                        <form action="/profile" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        @if($data[0]->foto_profile == "default.png")
                        <img src="/storage/profile/{{$data[0]->foto_profile}}" class="img-rounded">
                        <input type="file" name="profile" class="mt-3 form-control">
                        @else
                        <img src="/storage/{{$data[0]->foto_profile}}" class="img-rounded"  width="200px" height="200px">
                        <input type="file" name="profile" class="mt-3 form-control" value="">
                        @endif
                        <input type="text" hidden="true" class="form-control" id="" name="nullProfile" value="{{$data[0]->foto_profile}}">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-sm-4">
                                Nama Pemilik
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{$data[0]->nama_pemilik}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                Alamat Pemilik
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$data[0]->alamat}}">
                            </div>
                        </div>
                        <br>  
                        <div class="row">
                            <div class="col-sm-4">
                                Email
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" value="{{$data[0]->email}}">
                            </div>
                        </div>
                        <br>             
                        <div class="row">
                            <div class="col-sm-4">
                                No. HP
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="noHp" name="noHp" value="{{$data[0]->no_hp}}">
                            </div>
                        </div>
                        <br>
                        <a href="" id="batal" class="btn light" style="background: #E5E5E5; margin-right: 0px" onclick="batal()">BATAL</a>            
                        <button type="submit" class="btn" style="background: #22577E; margin-left: 7px">UBAH PROFILE</button>                                                       
                        </form>
                    </div>
                </div>
            </div>
        </section>
            
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

        <script>
            function batal(){
                document.getElementById('nama').value = "{{$data[0]->nama_pemilik}}";
                document.getElementById('alamat').value = "{{$data[0]->alamat}}";
                document.getElementById('email').value = "{{$data[0]->email}}";
                document.getElementById('noHp').value = "{{$data[0]->no_hp}}";
            }
        </script>


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