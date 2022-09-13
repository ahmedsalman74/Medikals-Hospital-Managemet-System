<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Services</title>
    <link rel="stylesheet" href="/css/service.css">
    <div class="banner">
        <?php if(session('loggedIn')): ?>
        <div class="navbar">
          <img src="/image/logo.png" class="logo">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/doctors">Doctors</a></li>
            <li><a href="/service">Services</a></li>
          <li><a href="<?php echo e(route('index',session('user')->id)); ?>"><?php echo e(session('user')->name); ?></a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/first">Contact</a></li>

          </ul>

      </div>
    <?php else: ?>

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
    <?php endif; ?>
  </head>
  <body>


    <div class="title">
        <a href="#"><b>Some Of Our Services</b></a>
      </div>


      <div class="services">

      <div class="cardiology">
        <img src="/image/44.png" alt="">
        <h2>Cardiology</h2>
        <p>We provide diagnosis as well as treatment of cardiovascular diseases and related disorders.</p>

      </div>


      <div class="Dentalcare">
        <img src="/image/11.png" alt="">
        <h2>Dental Care</h2>
        <p>We provide comprehensive dental care for diseases and disorders of the mouth, jaws and teeth.</p>

      </div>



      <div class="primarycare">
        <img src="/image/22.png" alt="">
        <h2>Primary Care</h2>
        <p>We provide a beautiful venue for patients to receive ambulatory care in a soothing environment.</p>

      </div>





      <div class="pediatrics">
        <img src="/image/66.png" alt="" class="">
        <h2>Pediatrics</h2>
        <p>We educate our patients and their families on disease prevention,safety and healthy life .</p>

      </div>



      <div class="ob">
        <img src="/image/55.png" alt="">
        <h2>OB/GYN</h2>
        <p>We provide an entire range of obstetrical and gynecological subspecialties for all cases.</p>

      </div>




      <div class="bloodana">
        <img src="/image/77.png" alt="">
        <h2>Blood Analysis</h2>
        <p>We provide professional analysis of blood samples brought to our laboratory facility.</p>

      </div>














      </div>













































  </body>
</html>
<?php /**PATH D:\Programs\laravel\His project last edit\resources\views/service.blade.php ENDPATH**/ ?>