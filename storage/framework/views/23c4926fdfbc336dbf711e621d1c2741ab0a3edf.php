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
          <li><a href="/login" >login</a></li>
          <li><a href="/first">Contact</a></li>

        </ul>

      </div>

    <div class="container">
     
      <div class="forms-container">
        <div class="signin-signup">
          <form method = "post" action="/login" class="sign-in-form">
            <?php echo csrf_field(); ?>
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input required type="email"  name="Email" placeholder="Email" id="mail"/>
             
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input required type="password"  name="Password" placeholder="Password" id="loginpass" />
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <input type="submit" value="Login" class="btn solid" id="login" />
            <p class="social-text">New here <a href="/register">creat account</a></p> 
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
         
    </div>

    <script src="/java/login.js"></script>

  </body>
</html><?php /**PATH F:\projects\His project\resources\views/login.blade.php ENDPATH**/ ?>