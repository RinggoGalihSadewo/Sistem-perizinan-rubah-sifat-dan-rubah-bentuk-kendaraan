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

    <title>Masuk</title>
  </head>
  <body>

    <div class="container-sm-fluid login-client">
    <div style="position: absolute; top: 1%; z-index: 999; left: 0.5%;" class="text-white">
        <h2>Sistem Perizinan Rubah Sifat dan Rubah Bentuk Kendaraan</h2>
    </div>
        <div class="waveUp">    
            <img src="/img/logo/waveUp.png" alt="" width="100%" height="200px">
        </div>

        <div class="login-form">
            <h4 class="fw-bold text-center">Masuk</h4>

            <form action="">
                <center>
                    <!-- <img src="/img/logo/username.png" alt=""> -->
                <input type="text" class="input-login mt-3" placeholder="username" name="username">
                <input type="text" class="input-login mt-4" placeholder="password" name="password">
                <div class="row mt-4">
                    <div class="col-6">  
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="margin-left:10%;">
                        <label class="form-check-label" for="flexCheckChecked">
                            Ingat saya
                        </label>
                    </div>
                    <div class="col-6">
                        <a href="{{url('/lupa-kata-sandi')}}" style="margin-right:25%; text-decoration: none; color: white;" target="_blank">Lupa kata sandi ?</a>
                    </div>
                </div>
                <button type="submit" class="btn text-dark mt-4 fw-bold" style="background: #968E8E; height: 50px;">Masuk</button>
                </center>
            </form>
        </div>

        <div class="waveDown">
            <img src="/img/logo/waveDown.png" alt="" width="100%" height="150px">
        </div>
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