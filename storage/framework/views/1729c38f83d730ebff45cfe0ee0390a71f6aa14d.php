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
    <title>Sign up</title>
  </head>
  <body>
  <div class="navbar">
        <img src="/image/logo.png" class="logo">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/doctors">Doctors</a></li>
          <li><a href="/service">Services</a></li>
          <li><a href="/register" >Register</a></li>
          <li><a href="/login" >login</a></li>
          <li><a href="/first">Contact</a></li>

        </ul>

      </div>
   
    
    <div class="container">
      
     
        <div class="signin-signup">
          
          <form method = "post" action="/register" class="sign-up-form">
           <?php echo csrf_field(); ?>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input required type="number"  name="ID"placeholder="patient ID" id="ID" min="1"/>
              
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input required type="text"  name="name" placeholder="Username" id="name" />
            
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input required type="email"  name="Email"placeholder="Email" id="mail" />
             
            </div>
            <div class="input-field">
              <i class="fas phone"></i>
              <input required type="phone "  name="phone"placeholder="Phone" id="phone"  />
            </div>
            
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input required type="password"  name="Password" placeholder="Password" id="password" />
              
            </div>
            
            
            <input type="submit" class="btn" value="Sign up" id="signUp" />
            <p class="social-text">already have account <a href="/login">login</a></p>
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

    <script src="/java/login.js"></script>

  </body>
</html><?php /**PATH F:\projects\His project\resources\views/register.blade.php ENDPATH**/ ?>