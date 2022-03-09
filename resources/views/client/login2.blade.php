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

    <title>Masuk</title>
  </head>
  <body>
        
        <div class="waveUp" style="z-index:-999;" data-aos="fade">    
            <img class="wave"src="/img/logo/wave1.png" alt="">
        </div>

        <div class="ilus1 d-none d-lg-flex" data-aos="slide-right">
            <img src="/img/tataCara/login.svg" alt="">    
        </div>

        <div class="logo d-lg-none" data-aos="fade">
        <center>
            <img src="/img/logo/dishub.png" alt="" width="100px" height="100px">
        </center>
        </div>

        <div class="login-form" data-aos="slide-left">
            <h4 class="fw-bold text-center">Masuk</h4>

            <form action="{{url('/masuk')}}" method="post">
                @csrf
                <center>
                <div>
                    <!-- <img src="/img/logo/username.png" alt=""> -->
                <input type="text" class="input-login mt-3 @error('username') is-invalid @enderror" placeholder="username" name="username">
                @error('username')
                <div class="invalid-feedback mt-4">
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}	
                    </div>
                </div>
                @enderror
                <input type="password" class="input-login mt-4 @error('password') is-invalid @enderror" placeholder="password" name="password">
                @error('password')
                <div class="invalid-feedback mt-4">
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}	
                    </div>
                </div>
                </div>
                @enderror
<!--                 <div class="row mt-4">
                    <div class="col-6">  
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="margin-left:10%;" name="remember">

                        <label class="form-check-label" for="flexCheckChecked">
                            Ingat saya
                        </label>
                    </div>
                    <div class="col-6">
                        <a href="{{url('/lupa-kata-sandi')}}" style="margin-right:25%; text-decoration: none; color: black;" target="_blank">Lupa kata sandi ?</a>
                    </div>
                </div> -->
                <button type="submit" class="btn text-white mt-4 fw-bold" style="background: #22577E; height: 50px;">Masuk</button>
                </center>
            </form>

            <center class="mt-4">
                <a href="/#pendaftaran" class="daftar">Belum punya akun ? yuk daftar akun</a>
            </center>
        
        </div>
        
        

    </div>

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