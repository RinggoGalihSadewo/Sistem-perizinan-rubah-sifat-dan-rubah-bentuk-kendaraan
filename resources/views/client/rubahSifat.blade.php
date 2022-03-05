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

        <section id="perizinan">
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
                                <input type="text" class="form-control" id="" name="noKendaraan">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Jenis Perubahan Sifat
                            </div>
                            <div class="col-sm-6">
                                <select class="form-select" name="jenisPerizinan" id="jenis" onClick="update()">
                                    <option>Perubahan Sifat (HITAM)</option>
                                    <option>Perubahan Sifat (HITAM) BBN</option>
                                    <option>Penetapan Sifat (KUNING)</option>
                                    <option>Perubahan Sifat (HITAM KE KUNING)</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row" id="namaPemilik">

                        </div>

                        <div class="row" id="namaPemilikLama">

                        </div>

                        <div id="br">

                        </div>

                        <div class="row" id="namaPemilikBaru">

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
                                Surat Permohonan
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="suratPermohonan">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Surat Pernyataan
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="suratPernyataan">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto FC. STNK
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="fcStnk">
                            </div>
                        </div>

                        <br>

                        <div class="row" id="ktp">

                        </div>

                        <div id="br2">
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto FC. BPKB
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="fcBpkb">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto FC. Buku Uji (KIR)
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="fcBukuUji">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto Faktur
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="faktur">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto Serut
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="serut">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Dokumen Perusahaan
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="docPerusahaan">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Dimensi Kendaraan
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="dimensi">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Surat Keterangan Bengkel
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" name="bengkel">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                Foto Sesudah Dibentuk 4 sisi
                            </div>
                            <div class="col-sm-6">
                                <label>Sisi depan</label>
                                <input type="file" class="form-control" id="" name="depan" placeholder="Sisi depan">
                                <br>
                                <label>Sisi kiri</label>
                                <input type="file" class="form-control" id="" name="kiri" placeholder="Sisi kiri">
                                <br>
                                <label>Sisi kanan</label>
                                <input type="file" class="form-control" id="" name="kanan" placeholder="Sisi kanan">
                                <br>
                                <label>Sisi belakang</label>
                                <input type="file" class="form-control" id="" name="belakang" placeholder="Sisi belakang">
                            </div>
                        </div>

                        <br>

                        <div class="row" id="notaris">

                        </div>

                        <div id="br3">

                        </div>

                        <div class="row" id="kbli">

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

        <footer> ©️ Copyright Pelayanan Perizinan Rubah Sifat dan Rubah Bentuk  Online. All Rights Reserved
Development by  IF’18 ITERA</footer>
    </div>

    <script>
        function update(){
            var select = document.getElementById('jenis');
            var value = select.options[select.selectedIndex].value;

            if(value === "Perubahan Sifat (HITAM)"){
                document.getElementById('br').innerHTML = "";
                document.getElementById('namaPemilikLama').innerHTML = "";
                document.getElementById('namaPemilikBaru').innerHTML = "";
                document.getElementById('ktp').innerHTML = "";
                document.getElementById('br2').innerHTML = "";
                document.getElementById('br3').innerHTML = "";
                document.getElementById('br4').innerHTML = "";
                document.getElementById('notaris').innerHTML = "";
                document.getElementById('namaPemilik').innerHTML = "<div class='col-sm-6'>Nama Pemilik</div><div class='col-sm-6'><input type='text' class='form-control' id='namePemilik' name='namaPemilik' ></div>";
                document.getElementById('kbli').innerHTML = "";
            }

            else if(value === "Perubahan Sifat (HITAM) BBN"){
                
                document.getElementById('namaPemilik').innerHTML = "";
                document.getElementById('namaPemilikLama').innerHTML = "<div class='col-sm-6'>Nama Pemilik Lama</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikLama' value='{{old('namaPemilikLama')}}' onblur='sss'></div>";
                document.getElementById('br').innerHTML = "<br>";
                document.getElementById('br2').innerHTML = "<br>";
                document.getElementById('br3').innerHTML = "";
                document.getElementById('br4').innerHTML = "";
                document.getElementById('namaPemilikBaru').innerHTML = "<div class='col-sm-6'>Nama Pemilik Baru</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikBaru' value='{{old('namaPemilikBaru')}}'></div>";
                document.getElementById('ktp').innerHTML = "                            <div class='col-sm-6'>Foto FC. KTP</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='fcKTP'></div>";
                document.getElementById('notaris').innerHTML = "";
                document.getElementById('kbli').innerHTML = "";
            }

            else if (value === "Penetapan Sifat (KUNING)"){
                document.getElementById('namaPemilik').innerHTML = "";
                document.getElementById('ktp').innerHTML = "";
                document.getElementById('namaPemilikLama').innerHTML = "<div class='col-sm-6'>Nama Pemilik Lama</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikLama' value='{{old('namaPemilikLama')}}'></div>";
                document.getElementById('br').innerHTML = "<br>";
                document.getElementById('br2').innerHTML = "";
                document.getElementById('namaPemilikBaru').innerHTML = "<div class='col-sm-6'>Nama Pemilik Baru</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikBaru' value='{{old('namaPemilikBaru')}}'></div>";
                document.getElementById('notaris').innerHTML = "<div class='col-sm-6'>Akte Notaris</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='akteNotaris' value='{{old('akteNotaris')}}'></div>";
                document.getElementById('kbli').innerHTML = "<div class='col-sm-6'>NIB / SIUP / TDP dengan KBLI yang sudah ditentukan</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='kbli' value='{{old('kbli')}}'></div>";
                document.getElementById('br3').innerHTML = "<br>";
                document.getElementById('br4').innerHTML = "<br>";
            }
            else if (value === "Perubahan Sifat (HITAM KE KUNING)"){
                document.getElementById('namaPemilik').innerHTML = "";
                document.getElementById('ktp').innerHTML = "";
                document.getElementById('namaPemilikLama').innerHTML = "<div class='col-sm-6'>Nama Pemilik Lama</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikLama' value='{{old('namaPemilikLama')}}'></div>";
                document.getElementById('br').innerHTML = "<br>";
                document.getElementById('br2').innerHTML = "";
                document.getElementById('namaPemilikBaru').innerHTML = "<div class='col-sm-6'>Nama Pemilik Baru</div><div class='col-sm-6'><input type='text' class='form-control' id=' name='namaPemilikBaru' value='{{old('namaPemilikBaru')}}'></div>";
                document.getElementById('notaris').innerHTML = "<div class='col-sm-6'>Akte Notaris</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='akteNotaris' value='{{old('akteNotaris')}}'></div>";
                document.getElementById('kbli').innerHTML = "<div class='col-sm-6'>NIB / SIUP / TDP dengan KBLI yang sudah ditentukan</div><div class='col-sm-6'><input type='file' class='form-control' id=' name='kbli' value='{{old('kbli')}}'></div>";  
                document.getElementById('br3').innerHTML = "<br>";    
                document.getElementById('br4').innerHTML = "<br>";       
            }   
        }   
        update();

        function updateReload()
        {
            var select = document.getElementById('jenis');
            var value = select.options[select.selectedIndex].value="ss";
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