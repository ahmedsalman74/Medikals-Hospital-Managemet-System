<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="/css/Login.css" />
    <title>Sign in</title>
  </head>
  <body>


   <div class="navbar">
        <img src="/image/logo.png" class="logo">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/doctors">Doctors</a></li>
          <li><a href="/service">Services</a></li>
          <li><a href="/register" >Register</a></li>
          <li><a href="/login" >Login</a></li>
          <li><a href="/first">Contact</a></li>

        </ul>

      </div>

    <div class="container">


       
      <div class="forms-container">
        <div class="signin-signup">
          <form method = "post" action="/login" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email"  name="Email" placeholder="Email" id="mail"  value ="{{old('Email')}}"/>

            </div>
            @error('Email')<p class ="error">{{$message}}</p>@enderror
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input  type="password"  name="Password" placeholder="Password" id="loginpass" />

            </div>
            @error('Password')<p class ="error">{{$message}}</p>@enderror
            @if(session('error')) <p class="error">{{ session('error') }}</p> @endif

            {{-- <input type="submit" value="Login" class="btn solid" id="login" /> --}}
            <button type="submit"><span class="buttonSpan"></span>Login</button>
            <p class="social-text">New here <a href="/register">create an account</a></p>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://myaccount.google.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

    </div>

    <script src="/js/login.js"></script>

  </body>
</html>
