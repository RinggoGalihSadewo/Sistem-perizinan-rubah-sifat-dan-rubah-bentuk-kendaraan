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

    <script src="/js/index.js"></script>

    <title>Rubah Sifat Kendaraan</title>
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

<!--         <section id="penjelasan">
            <div class="row d-flex">
                <div class="col-5">
                    <img src="/img/logo/perizinan.png" alt="">
                </div>
                <div class="col-7 textPenjelasan">
                <img src="/img/logo/text-perizinan.png" alt="" >
                <p class="mt-4 text-center">E-Perizinan Rubah Sifat dan Rubah Bentuk Kendaraan adalah sistem pelayanan online berbasis website yang disediakan oleh Dinas Perhubungan Provinsi Lampung dimana memiliki manfaat bagi masyarakat atau client yang ingin melakukan perizinan mengenai rubah sifat ataupun rubah bentuk kendaraan dengan hanya membuka website tersebut dan jika surat perizinan sudah selesai akan langsung bisa di download surat tersebut karena dikirimkan melalui email pribadi, sehingga akan menghemat waktu dan tenaga.</p>
                </div>
            </div>
        </section> -->
        <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="700">
        <section id="perizinan" style="margin-top: -30px; padding-bottom: 0px;">
        <div class="formPerizinan">
        <h5 class="text-left fw-bold">Download Ketentuan Surat</h5>
        
        <div>
        <a href="/perizinan-rubah-sifat/download-surat-permohonan" class="downloadSurat"><img src="/img/logo/download-solid.svg" alt="" width="15px" height="15px"> Surat Permohonan</a>
        </div>
        <div>
        <a href="/perizinan-rubah-sifat/download-surat-pernyataan" class="downloadSurat"><img src="/img/logo/download-solid.svg" alt="" width="15px" height="15px"> Surat Pernyataan</a>
        </div>
        <div>
        <a href="/perizinan-rubah-sifat/download-surat-dimensi-kendaraan" class="downloadSurat"><img src="/img/logo/download-solid.svg" alt="" width="15px" height="15px"> Surat Dimensi Kendaraan</a>
        </div>
        <div>
        <a href="/perizinan-rubah-sifat/download-persyaratan-perizinan" class="downloadSurat"><img src="/img/logo/download-solid.svg" alt="" width="15px" height="15px"> Persyaratan Perizinan</a>
        </div>

        </div>
        </section>
        <section id="perizinan" style="padding-top: 0px;">
            <div class="formPerizinan">
                <h4 class="text-center fw-bold">FORM SURAT PERIZINAN RUBAH SIFAT</h4>

                @if (session('status'))
                    <br>
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
                                <input type="text" class="form-control @error('noKendaraan') is-invalid @enderror" id="" name="noKendaraan" value="{{old('noKendaraan')}}">
                                @error('noKendaraan')
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
                                Jenis Perubahan Sifat
                            </div>
                            <div class="col-sm-6">
                                <select class="form-select" name="jenisPerizinan" id="jenis" onClick="update()" value="{{old('jenisPerizinan')}}">
                                    <option value="Perubahan Sifat (HITAM)">Perubahan Sifat (HITAM)</option>
                                    <option value="Perubahan Sifat (HITAM) BBN">Perubahan Sifat (HITAM) BBN</option>
                                    <option value="Penetapan Sifat (KUNING)">Penetapan Sifat (KUNING)</option>
                                    <option value="Perubahan Sifat (HITAM KE KUNING)">Perubahan Sifat (HITAM KE KUNING)</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row" id="namaPemilik">
                            <div class="col-sm-6">Nama Pemilik</div><div class="col-sm-6"><input type="text" class="form-control @error('namaPemilik') is-invalid @enderror" id="iNamaPemilik" name="namaPemilik" value="{{old('namaPemilik')}}">
                            @error('namaPemilik')
                            <div class="invalid-feedback">
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}	
                                </div>
                            </div>
                            @enderror
                        </div>
                        </div>

                        <div class="row" id="namaPemilikLama">
                            <div class="col-sm-6">Nama Pemilik Lama</div><div class="col-sm-6"><input type="text" class="form-control @error('namaPemilikLama') is-invalid @enderror" id="iNamaPemilikLama" name="namaPemilikLama" value="{{old('namaPemilikLama')}}">
                            @error('namaPemilikLama')
                            <div class="invalid-feedback">
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}	
                                </div>
                            </div>
                            @enderror
                        </div>
                        </div>

                        <div id="br">

                        </div>

                        <div class="row" id="namaPemilikBaru">
                            <div class="col-sm-6">Nama Pemilik Baru</div><div class="col-sm-6"><input type="text" class="form-control inpNamaPemilikBaru @error('namaPemilikBaru') is-invalid @enderror" id="iNamaPemilikBaru" name="namaPemilikBaru" value="{{old('namaPemilikBaru')}}">
                            @error('namaPemilikBaru')
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
                                Alamat Pemilik
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="" name="alamat" value="{{old('alamat')}}">
                                @error('alamat')
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
                                Merk / Type
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('merk') is-invalid @enderror" id="" name="merk" value="{{old('merk')}}">
                                @error('merk')
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
                                Jenis
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="" name="jenis" value="{{old('jenis')}}">
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
                                Model
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('model') is-invalid @enderror" id="" name="model" value="{{old('model')}}">
                                @error('model')
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
                                <input type="text" class="form-control @error('warna') is-invalid @enderror" id="" name="warna" value="{{old('warna')}}">
                                @error('warna')
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
                                Tahun Pembuatan
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="" name="tahun" value="{{old('tahun')}}">
                                @error('tahun')
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
                                Isi Silinder
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('silinder') is-invalid @enderror" id="" name="silinder" value="{{old('silinder')}}">
                                @error('silinder')
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
                                No. Landasan / Rangka
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('noLandasan') is-invalid @enderror" id="" name="noLandasan" value="{{old('noLandasan')}}">
                                @error('noLandasan')
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
                                No. Mesin
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('noMesin') is-invalid @enderror" id="" name="noMesin" value="{{old('noMesin')}}">
                                @error('noMesin')
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
                                No. BPKB
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('bpkb') is-invalid @enderror" id="" name="bpkb" value="{{old('bpkb')}}">
                                @error('bpkb')
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
                                Surat Permohonan (docx/pdf)
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control @error('suratPermohonan') is-invalid @enderror" id="" name="suratPermohonan" value="{{old('suratPermohonan')}}">
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
                                Surat Pernyataan (docx/pdf)
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control @error('suratPernyataan') is-invalid @enderror" id="" name="suratPernyataan" value="{{old('suratPernyataan')}}">
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
                            Foto Dokumen Perusahaan
                        </div>
                        <div class="col-sm-6">
                            <input type="file" class="form-control @error('docPerusahaan') is-invalid @enderror" id="" name="docPerusahaan" value="{{old('docPerusahaan')}}">
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
                                Foto Dimensi Kendaraan
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control @error('dimensi') is-invalid @enderror" id="" name="dimensi" value="{{old('dimensi')}}">
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
                                Foto FC. STNK
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control @error('fcStnk') is-invalid @enderror" id="" name="fcStnk" value="{{old('fcStnk')}}">
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

                        <div class="row" id="ktp">
                            <div class="col-sm-6">Foto FC. KTP</div><div class="col-sm-6"><input type="file" class="form-control @error('ktp') is-invalid @enderror" id="iKtp" name="ktp" value="{{old('ktp')}}">
                            @error('ktp')
                            <div class="invalid-feedback">
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}	
                                </div>
                            </div>
                            @enderror
                        </div>
                        </div>

                        <div id="br2">
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto FC. BPKB
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control @error('fcBpkb') is-invalid @enderror" id="" name="fcBpkb" value="{{old('fcBpkb')}}">
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
                                <input type="file" class="form-control @error('fcBukuUji') is-invalid @enderror" id="" name="fcBukuUji" value="{{old('fcBukuUji')}}">
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
                                <input type="file" class="form-control @error('faktur') is-invalid @enderror" id="" name="faktur" value="{{old('faktur')}}">
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
                                <input type="file" class="form-control @error('serut') is-invalid @enderror" id="" name="serut" value="{{old('srut')}}">
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
                               Foto Surat Keterangan Bengkel
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control @error('bengkel') is-invalid @enderror" id="" name="bengkel" value="{{old('bengkel')}}">
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
                                <input type="file" class="form-control @error('depan') is-invalid @enderror" id="" name="depan" placeholder="Sisi depan" value="{{old('depan')}}">
                                @error('depan')
                                <div class="invalid-feedback">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}	
                                    </div>
                                </div>
                                @enderror
                                <br>
                                <label>Sisi kiri</label>
                                <input type="file" class="form-control @error('kiri') is-invalid @enderror" id="" name="kiri" placeholder="Sisi kiri" value="{{old('kiri')}}">
                                @error('kiri')
                                <div class="invalid-feedback">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}	
                                    </div>
                                </div>
                                @enderror
                                <br>
                                <label>Sisi kanan</label>
                                <input type="file" class="form-control @error('kanan') is-invalid @enderror" id="" name="kanan" placeholder="Sisi kanan" value="{{old('kanan')}}">
                                @error('kanan')
                                <div class="invalid-feedback">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}	
                                    </div>
                                </div>
                                @enderror
                                <br>
                                <label>Sisi belakang</label>
                                <input type="file" class="form-control @error('belakang') is-invalid @enderror" id="" name="belakang" placeholder="Sisi belakang" value="{{old('belakang')}}">
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

                        <div class="row" id="notaris">
                            <div class="col-sm-6">Akte Notaris</div><div class="col-sm-6"><input type="file" class="form-control @error('akteNotaris') is-invalid @enderror" id="iNotaris" name="akteNotaris" value="{{old('akteNotaris')}}">
                            @error('akteNotaris')
                            <div class="invalid-feedback">
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}	
                                </div>
                            </div>
                            @enderror
                        </div>
                        </div>

                        <div id="br3">

                        </div>

                        <div class="row" id="kbli">
                            <div class="col-sm-6">NIB / SIUP / TDP dengan KBLI yang sudah ditentukan</div><div class="col-sm-6"><input type="file" class="form-control @error('kbli') is-invalid @enderror" id="iKbli" name="kbli" value="{{old('kbli')}}">
                            @error('kbli')
                            <div class="invalid-feedback">
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}	
                                </div>
                            </div>
                            @enderror
                        </div>
                        </div>

                        <div id="br4">

                        </div>

                        <center>
                            <div class="col-12">
                                <button class="btn" type="submit" style="background: #22577E;">KIRIM</button>
                            </div>
                        </center>

                        
                    </form>
                </div>
            </div>
        </section>
        </div>

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
      © Copyright Pelayanan Perizinan Rubah Sifat dan Rubah Bentuk Online. All Rights Reserved Development by IF'18 ITERA
    </div>
    <!-- Copyright -->
  </footer>

        <!-- Footer -->
                
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/dfa1cbbb7b.js" crossorigin="anonymous"></script>
        

        <script src="/js/FormSifat2.js"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
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