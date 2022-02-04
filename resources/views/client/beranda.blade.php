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

    <title>Perizinan Kendaraan</title>
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
                            <a class="nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="{{url('/')}}">Beranda</a>
                            <a class="nav-link {{ Request::is('/#pendaftaran') ? 'active' : '' }}" href="#pendaftaran">Pendaftaran Akun</a>
                            <a class="nav-link {{ Request::is('/#tataCara') ? 'active' : '' }}" href="#tataCara">Tata Cara</a>
                            <a class="nav-link {{ Request::is('/#layananPengaduan') ? 'active' : '' }}" href="#layananPengaduan">Layanan Pengaduan</a>
                            <a class="nav-link {{ Request::is('/masuk') ? 'active' : '' }}" href="{{url('/masuk')}}" target="_blank">Masuk <img src="/img/logo/masuk.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                <img src="/img/slides/slides1_1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/slides/slides1_1.png" class="d-block w-100" alt="..." >
                </div>
                <div class="carousel-item">
                <img src="/img/slides/slides1_1.png" class="d-block w-100" alt="..." >
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section id="pendaftaran">
            <div class="pendaftaran">
                <h2 class="text-center fw-bold text-white">Pendaftaran Akun</h2>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="ilus1 d-none d-lg-flex">
                    <img src="/img/tataCara/1.png" alt="">    
                </div>
                <div class="formDaftar mt-5">
                    <form action="{{url('/')}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                Username
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="" name="username">
                                @error('username')
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
                                Password
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="" name="password">
                                @error('password')
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
                                Nama Perusahaan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('namaPerusahaan') is-invalid @enderror" id="" name="namaPerusahaan">
                                @error('namaPerusahaan')
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
                                Kabupaten / Kota
                            </div>
                            <div class="col-sm-6">
                            <select class="form-select" aria-label="Default select example" name="kabupaten">
                                <option selected>Pilih Kabupaten/Kota</option>
                                <option value="Kabupaten Lampung Barat">Kabupaten Lampung Barat</option>
                                <option value="Kabupaten Tanggamus">Kabupaten Tanggamus</option>
                                <option value="Kabupaten Lampung Selatan">Kabupaten Lampung Selatan</option>
                                <option value="Kabupaten Lampung Timur">Kabupaten Lampung Timur</option>
                                <option value="Kabupaten Lampung Tengah">Kabupaten Lampung Tengah</option>
                                <option value="Kabupaten Lampung Utara">Kabupaten Lampung Utara</option>
                                <option value="Kabupaten Waykanan">Kabupaten Waykanan</option>
                                <option value="Kabupaten Tulang Bawang">Kabupaten Tulang Bawang</option>
                                <option value="Kabupaten Pesawaran">Kabupaten Pesawaran</option>
                                <option value="Kabupaten Pringsewu">Kabupaten Pringsewu</option>
                                <option value="Kabupaten Mesuji">Kabupaten Mesuji</option>
                                <option value="Kabupaten Tulang Bawang Barat">Kabupaten Tulang Bawang Barat</option>
                                <option value="Kabupaten Pesisir Barat">Kabupaten Pesisir Barat</option>
                                <option value="Kota Bandar Lampung">Kota Bandar Lampung</option>
                                <option value="Kota Metro">Kota Metro</option>
                            </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                No. NPWP Perusahaan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control  @error('npwp') is-invalid @enderror" id="" name="npwp">
                                @error('npwp')
                                <div class="invalid-feedback">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}	
                                    </div>
                                </div>
                                @enderror
                                Contoh: 24421124
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Alamat Perusahaan
                            </div>
                            <div class="col-sm-6">
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="" style="height: 120px;" name="alamat"></textarea>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}	
                                    </div>
                                </div>
                                @enderror
                                *) Kolom alamat diisi sesuai dengan domisili perusahaan yang dimiliki
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-12">
                                Maps Perusahaan
                            </div>
                            <input
                            id="pac-input"
                            class="form-control"
                            type="text"
                            placeholder="Cari alamat anda"
                            />
                            <div id="map" class="mt-3"></div>
                            <input type="text" name="lat" id="lat" hidden="true">
                            <input type="text" name="lng" id="lng" hidden="true">
                        </div>
                        
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Email
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="" name="email">
                                @error('email')
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
                                No. Hp
                            </div>
                            <div class="col-sm-6">
                                <input type="noHp" class="form-control @error('noHp') is-invalid @enderror" id="" name="noHp">
                                @error('noHp')
                                <div class="invalid-feedback">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}	
                                    </div>
                                </div>
                                @enderror
                            </div>
                        </div>
                            
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Saya bersedia menerima dan menyetujui segala ketentuan yang diatur dalam sistem ini
                            </label>
                        </div> -->

                        <br>

                        <center>
                            <div class="col-12">
                                <button class="btn" type="submit">DAFTAR</button>
                            </div>
                        </center>

                        
                    </form>
                </div>
            </div>
        </section>

        <section id="tataCara">
            <div class="tataCara">
                <h2 class="text-center fw-bold text-white">Petunjuk Proses Perizinan</h2> 
                <div class="row text-center mt-5">
                    <div class="col-xl-3">
                        <img src="/img/tataCara/tata1.png" alt="">
                    </div>
                    <div class="col-xl-3">
                        <img src="/img/tataCara/tata2.png" alt="">
                    </div>
                    <div class="col-xl-3">
                        <img src="/img/tataCara/tata3.png" alt="">
                    </div>
                    <div class="col-xl-3">
                        <img src="/img/tataCara/tata4.png" alt="">
                    </div>
                </div>  
            </div>
        </section>

        <section id="layananPengaduan">
            <div class="layananPengaduan">
            <div class="formPengaduan">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <h3 ><center> <img src="/img/tataCara/logoPengaduan.png" alt="" width="40px" height="40px"> Sampaikan Laporan Anda!</center></h3>

                            <div class="col-sm-12">
                                Kritik
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="" style="height: 120px;"></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                Saran
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="" style="height: 120px;"></textarea>
                                <center>
                                <button class="btn mt-3" type="submit">KIRIM</button>
                                </center>   
                            </div>
                        </div>
                        <br>
                    </form>
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