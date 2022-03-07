<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/client/layout/layout.css">
    <link rel="stylesheet" href="/css/client/beranda/slider.css">
    <link rel="stylesheet" href="/css/client/style.css">

    <script src="/js/index.js"></script>

    <title>Beranda</title>
  </head>
  <body>


  <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#"><img src="/img/logo/dishub.png" alt=""><h2 style="margin-top:5%; margin-left: 5%;">E-Perizinan</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
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

    <div class="slider" style="margin-top: 60px; ">
    <div id="my-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>           
        </ol>
        <center>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img class="d-block w-100" src="/img/slider2.JPG" alt="" width="1300" height="550" style="object-fit: cover; object-position: 80% 90%;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/blur2.JPEG" alt="" width="1300" height="550" style="object-fit: cover; ">
            </div>   
            <div class="carousel-item" data-interval="5000">
                <img class="d-block w-100" src="/img/blur1.JPEG" alt="" width="1300" height="550" style="object-fit: cover; object-position: 80% 100%;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </center>


    <div class="penjelasan" data-aos="fade-up">

        <p>OSS / Sistem Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik
        <p>"Kemudahan berusaha dalam berbagai skala turut didorong Pemerintah dengan reformasi struktural, termasuk dengan reformasi
        sistem perizinan. Penerapan Pelayanan Terpadu Satu Pintu (PTSP) dan Online Single Submission (OSS) diharapkan efektif mengurangi birokrasi dan mempermudah para pelaku usaha. Pemerintah sudah menjalankan Online Single Submission (OSS) sebagai sistem yang mengintegrasikan seluruh pelayanan perizinan berusaha yang menjadi kewenangan Menteri/Pimpinan Lembaga, Gubernur, atau Bupati/Walikota yang dilakukan secara elektronik. Melalui reformasi sistem perizinan, kita mendorong standardisasi menjadikan birokrasi perizinan di tingkat pusat dan daerah lebih mudah, lebih cepat, dan juga lebih terintegrasi."
        </p>
        <p>Joko Widodo, 16 Agustus 2018</p>
    </div>

    <center>
    <div class="mt-5" data-aos="fade-right">
    <h4>Alamat GPS Dinas Perhubungan Provinsi Lampung</h4>

    <div class="embed-responsive embed-responsive-16by9" style="width: 65%; height: 400px; z-index: -1;">
        
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8874315927283!2d105.25341381448622!3d-5.434064155742303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da30bd702e13%3A0x8a05d5fc73bcbbaa!2sLampung%20Provincial%20Transport%20Department!5e0!3m2!1sen!2sid!4v1624432836269!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div> 
    </div>
    </center>

</div>

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
            <div style="text-align: left;">
            <p><i class="fas fa-map-marker-alt mr-3"></i> Jl. Cut Mutiah No.76 Teluk Betung, Bandar Lampung</p>
            <p><i class="fas fa-phone mr-3"></i> (0721) 470209</p>
            <p><i class="fas fa-envelope mr-3"></i> dishubprovlampung@gmail.com</p>
            </div>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
  
</html>
