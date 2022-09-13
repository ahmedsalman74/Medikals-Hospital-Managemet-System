<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/tem.css" />
    <title>Sign in</title>
</head>

<body>

    <div class="navbar">
        <img src="/image/logo.png" class="logo">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/doctors">Doctors</a></li>
            <li><a href="/service">Services</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/first">Contact</a></li>

        </ul>

    </div>



    <div class="container">

        <div class="forms-container">
            <div class="signin-signup">

                <form action="{{ route('login') }}" method="post" class="sign-in-form">
                    @csrf

                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email" id="mail" value="{{ old('Email') }}" />

                    </div>
                    @error('Email')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" id="loginpass" />

                    </div>
                    @error('Password')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    @if (session('error'))
                    <p class="error">{{ session('error') }}</p>
                    @endif

                    <input type="submit" value="Login" class="btn solid" id="login" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="{{ route('register') }}" method="post" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input required type="text" name="name" placeholder="Username" id="name" value="{{ old('name') }}" />

                    </div>
                    @error('name')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input required type="email" name="Email" placeholder="Email" id="mail" value="{{ old('Email') }}" />

                    </div>
                    @error('Email')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input required type="phone " name="phone" placeholder="Phone" id="phone" value="{{ old('phone') }}" />
                    </div>
                    @error('phone')
                    <p class="error">{{ $message }}</p>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input required type="password" name="Password" placeholder="Password" id="password" onkeyup='validatePassword();' />
                    </div>
                    @error('Password')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>

                        <input id="confirm_password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password comfirmation" onkeyup='validatePassword();'>
                    </div>
                    <span id='message'></span>

                    <div class="input-field">
                        <i class="fas fa-address-card"></i>
                        <input required type="text" name="address" placeholder="Address" id="address" value="{{ old('address') }}" />

                    </div>


                    <input type="submit" class="btn" value="Sign up" id="signUp" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Welcome To MediKALS
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Welcome To MediKALS
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script src="js/login.js"></script>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Not Matching';
                confirm_password.setCustomValidity("Passwords Don't Match").style.color = 'red';
            } else {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Matching';
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

</body>

</html>