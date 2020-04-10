<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Font Icon -->

    <link rel="stylesheet" href="{{ asset('asset/login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('asset/login/css/style.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Sweet Alert-->
    <!-- toast -->
  
</head>
<body>

@if(session('logout'))
      <script>
      const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 4000,
          timerProgressBar: true,
          onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        });

        Toast.fire({
          icon: 'success',
          title: 'Anda Berhasil Logout !',
          padding: '2.3rem'
        });
      </script>
@endif

@if(session('salah_password'))
      <font size="4"> 
      <script>
     Swal.fire({
          timer: 2000,
          icon: 'error',
          title: 'Oops...',
          text: 'Password Anda Salah !',
        })
    </script>
    </font>
@endif

@if(session('tidak_terdaftar'))
      <font size="4"> 
      <script>
     Swal.fire({
          timer: 2000,
          icon: 'error',
          title: 'Oops...',
          text: 'Akun Tidak Terdaftar !',
        })
    </script>
    </font>
@endif

@if(session('register'))
      <font size="4"> 
      <script>
     Swal.fire({
          timer: 2000,
          icon: 'success',
          title: '',
          text: 'Selamat Akun Anda Telah Terdaftar !',
        })
    </script>
    </font>
@endif
<div class="main"> 
  <!-- Sing in  Form -->
  <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('asset/login/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ url('/register')}}" class="signup-image-link">Create an account</a>
                    </div>
                             
                    <div class="signin-form">
                                        <!-- @if(\Session::has('alert'))
                                            <div class="alert alert-danger">
                                                <div>{{Session::get('alert')}}</div>
                                            </div>
                                        @endif
                                        @if(\Session::has('alert-success'))
                                                <div class="alert alert-success">
                                                    <div>{{Session::get('alert-success')}}</div>
                                                </div>
                                        @endif -->
                        <h2 class="form-title">Login</h2>
                        <form action="{{ url('/loginPost') }}" method="POST" class="register-form" id="login-form">
                        {{ csrf_field() }}    
                        <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term" ><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                    <input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

<!-- JS -->
<script src="{{ asset('asset/login/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('asset/login/js/main.js') }}"></script>
<script>
   
</script>

</body>
</html>