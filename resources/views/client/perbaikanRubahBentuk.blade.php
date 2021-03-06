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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Rubah Bentuk Kendaraan</title>
  </head>
  <body>

  <div class="container-sm-fluid" data-aos="fade">
        <section id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                <a class="navbar-brand d-flex" href="#"><img src="/img/logo/dishub.png" alt=""><h2 style="margin-top:5%; margin-left: 5%;">E-Perizinan</h2></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
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
        <a href="#" class="ignielToTop"></a>
        <section id="perizinan" data-aos="fade-up" data-aos-offset="200" data-aos-duration="700">
            <div class="formPerizinan">
                <h4 class="text-center fw-bold">PERBAIKAN FORM SURAT PERIZINAN RUBAH BENTUK</h4>

                @if (session('status'))
                    <br>
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <div class="mt-5">
                    <form action="/alur-kordinasi/perbaikan-surat-bentuk/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="text" hidden class="form-control" id="" name="id" value="{{$data[0]->id}}">

                        <div class="row">
                            <div class="col-sm-6">
                                Nomor Kendaraan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="noKendaraan" value="{{$data[0]->nomor_kendaraan}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Perubahan Bentuk
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="perubahanBentuk" value="{{$data[0]->perubahan_bentuk}}">
                                <small>*Contoh: Truck Tangki Menjadi Mobil Barang Bak Terbuka</small>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Nama Pemilik Lama
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="namaPemilikLama" value="{{$data[0]->nama_pemilik_lama}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Nama Pemilik Baru 
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="namaPemilikBaru" value="{{$data[0]->nama_pemilik_baru}}">
                            </div>
                        </div>
            
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Alamat Pemilik
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="alamat" value="{{$data[0]->alamat}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Merk / Type
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="merk" value="{{$data[0]->merk}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Jenis
                            </div>
                            <div class="col-sm-6">
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis" id="jenis" onClick="update()" value="{{old('jenis')}}">
                                    <option value="{{$data[0]->jenis}}" selected>{{$data[0]->jenis}}</option>
                                    <option value="Mobil Bak Muatan Terbuka" {{old('jenis') == 'Mobil Bak Muatan Terbuka' ? 'selected' : '' }}>Mobil Bak Muatan Terbuka</option>
                                    <option value="Mobil Bak Muatan Tertutup" {{old('jenis') == 'Mobil Bak Muatan Tertutup' ? 'selected' : '' }}>Mobil Bak Muatan Tertutup</option>
                                    <option value="Mobil Tangki" {{old('jenis') == 'Mobil Tangki' ? 'selected' : '' }}>Mobil Tangki</option>
                                    <option value="Mobil Penarik" {{old('jenis') == 'Mobil Penarik' ? 'selected' : '' }}>Mobil Penarik</option>
                                    <option value="Mobil Penumpang" {{old('jenis') == 'Mobil Penumpang' ? 'selected' : '' }}>Mobil Penumpang</option>
                                    <option value="Mobil Bus" {{old('jenis') == 'Mobil Bus' ? 'selected' : '' }}>Mobil Bus</option>
                                    <option value="Mobil Barang" {{old('jenis') == 'Mobil Barang' ? 'selected' : '' }}>Mobil Barang</option>
                                    <option value="Kendaraan Khusus" {{old('jenis') == 'Kendaraan Khusus' ? 'selected' : '' }}>Kendaraan Khusus</option>
                                </select>
                                @error('jenis')
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
                                Warna
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="warna" value="{{$data[0]->warna}}">
                            </div>
                        </div>
                        
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Tahun Pembuatan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="tahun" value="{{$data[0]->tahun}}">
                            </div>
                        </div>
                        
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Volume Silinder
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="silinder" value="{{$data[0]->volume_silinder}}">
                            </div>
                        </div>

                        <br>
                            
                        <div class="row">
                            <div class="col-sm-6">
                                No. Landasan / Rangka
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="noLandasan" value="{{$data[0]->no_landasan}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                No. Mesin
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="noMesin" value="{{$data[0]->no_mesin}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                No. BPKB
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="bpkb" value="{{$data[0]->no_bpkb}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                No. Uji Kendaraan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="noUji" value="{{$data[0]->no_uji}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto Sesudah Dibentuk 4 sisi
                            </div>
                            <div class="col-sm-6">
                                <label>Sisi depan</label>
                                <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="depan" placeholder="Sisi depan">
                                <br>
                                <label>Sisi kiri</label>
                                <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="kiri" placeholder="Sisi kiri">
                                <br>
                                <label>Sisi kanan</label>
                                <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="kanan" placeholder="Sisi kanan">
                                <br>
                                <label>Sisi belakang</label>
                                <input type="file" required oninvalid="this.setCustomValidity('Wajib di isi')" oninput="this.setCustomValidity('')" class="form-control" id="" name="belakang" placeholder="Sisi belakang">
                            </div>
                        </div>

                        <br>

                        <center>
                            <div class="col-12">
                                <button class="btn" type="submit" style="background: #22577E;">KIRIM</button>
                            </div>
                        </center>

                        
                    </form>
                </div>
            </div>
        </section>

       <!-- Footer -->

       <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1E6091"
          data-aos="slide-up" data-aos-offset="200" data-aos-duration="700">
    <!-- Grid container -->
    <div class="container-fluid p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-2 col-lg-1 col-xl-1 mx-auto mt-1">
                <img src="/img/logo/dishub.png" alt="" width="85px" height="85px">
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3" >
            <h6 class="text-uppercase mb-4 font-weight-bold" style="margin-left: 0px">
              <b>DINAS PERHUBUNGAN PROVINSI LAMPUNG</b>
            </h6>
            <p style="text-align: justify; margin-left: 0px">
              Dishub Provinsi Lampung adalah Penyelenggaraan urusan pemerintah bidang kebijakan perhubungan atau transportasi untuk wilayah provinsi Lampung. Fungsi dari Dinas Perhubungan adalah merumuskan kebijakan bidang perhubungan dalam wilayah kerjanya, kebijakan teknis bidang perhubungan, penyelenggaraan administrasi termasuk perizinan angkutan perhubungan, evaluasi dan laporan terkait bidang perhubungan.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 contact">
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
         class="text-center p-3 footer2"
         style="background-color: #22577E; width: 100%;"
         >
      ?? Copyright Pelayanan Perizinan Rubah Sifat dan Rubah Bentuk Online. All Rights Reserved Development by IF'18 ITERA
    </div>
    <!-- Copyright -->
  </footer>

        <!-- Footer -->

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script> 
                
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