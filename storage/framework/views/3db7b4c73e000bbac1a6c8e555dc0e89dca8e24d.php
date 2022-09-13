<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Doctors</title>
  <link rel="stylesheet" href="/css/doctors.css">
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
  <div class="banner">
    <div class="title">
      <a href="#"><b>Some Of Our Doctors</b></a>
    </div>
    <div class="Scroller">


      <div class="imgs">
        <img class="DRS" src="/image/5_New1.PNG" alt="Dr's Image">
        <h3>Dr. Serena Williams</h3>
        <span>General</span>
        <p>Dr.Williams has served patients with<br>common illnesses in her long career.</p>
      </div>


      <div class="imgs">
        <img class="DRS" src="/image/2_New1.PNG" alt="Dr's Image">
        <h3>Dr. Kenjiro Tsuda</h3>
        <span>Neurologist</span>
        <p>Dr.Tsuda is an expert in the treating of the<br>spinal cord, peripheral nerves, and muscles diseases.</p>
      </div>


      <div class="imgs">
        <img class="DRS" src="/image/3_New1.PNG" alt="Dr's Image">
        <h3>Dr. Amy Adams</h3>
        <span>Gynecologist</span>
        <p>Dr.Adams can give you reproductive and sexual health<br> services like testing and treatment for vaginal infections.</p>
      </div>


      <div class="imgs">
        <img class="DRS" src="/image/4_New1.PNG" alt="Dr's Image">
        <h3>Dr. Dwight Schrute</h3>
        <span>Dental surgeon</span>
        <p>Dr.Schrute is a top professional dentist<br>with over 20 years of experience.</p>
      </div>


      <div class="imgs">
        <img class="DRS" src="/image/1_New1.PNG" alt="Dr's Image">
        <h3>Dr. Julia Roberts</h3>
        <span>Cardiologist</span>
        <p>Dr.Roberts is an excellent cardiologist<br>She's been serving in this field for over 15 years.</p>
      </div>


      <div class="imgs">
        <img class="DRS" src="/image/6_New1.PNG" alt="Dr's Image">
        <h3>Dr. John Krasinski</h3>
        <span>cosmetic plastic surgeon</span>
        <p>Dr.Krasinski is a specialist in plastic surgery<br>He's done many operations for great actresses.</p>
      </div>



    </div>
    <button type="button"><span class="buttonSpan"></span>VIEW MORE</button>
    <br> <br>
  </div>

</body>

</html>
<?php /**PATH D:\Programs\laravel\His project vsedit\resources\views/doctors.blade.php ENDPATH**/ ?>