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
                    <br>
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    <br>
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
                                <input type="text" class="form-control" id="" name="nama" value="{{$data[0]->nama_pemilik}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                Alamat Pemilik
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" name="alamat" value="{{$data[0]->alamat}}">
                            </div>
                        </div>
                        <br>  
                        <div class="row">
                            <div class="col-sm-4">
                                Email
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="" name="email" value="{{$data[0]->email}}">
                            </div>
                        </div>
                        <br>             
                        <div class="row">
                            <div class="col-sm-4">
                                No. HP
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" name="noHp" value="{{$data[0]->no_hp}}">
                            </div>
                        </div>
                        <br>

                        <button type="submit" class="btn" style="background: #22577E;">UBAH PROFILE</button>                                                       
                        </form>
                    </div>
                </div>
            </div>
        </section>
      

 

        <footer style="position: absolute; bottom: 0; width: 100%;"> ©️ Copyright Pelayanan Perizinan Rubah Sifat dan Rubah Bentuk  Online. All Rights Reserved
Development by  IF’18 ITERA</footer>
    </div>


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