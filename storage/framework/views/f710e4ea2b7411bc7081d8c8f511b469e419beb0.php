<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="/css/home-2.css">
  <link rel="stylesheet" href="/first">
</head>

<body>

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
          <li><a href="/tem">Login</a></li>
          <li><a href="/first">Contact</a></li>

        </ul>

      </div>
    <?php endif; ?>

    <?php if(session('success_message')): ?>
    <p class="success"><?php echo e($success_message); ?> </p>
    <?php endif; ?>

    <div class="content">
      <h1>Your Health is</h1>
      <h1> our Top Priority</h1>
      <br>

      <p>We are committed to making you feel better </p>
      <p>and healthy everyday of your life . your health is very </p>
      <p>important and we have a great team to cater to you</p>



      <div>

        <a href="/appointment"> <button type="button"><span></span>Make Appointment</button></a>


      </div>

    </div>


  </div>

</body>

</html>
<?php /**PATH D:\Programs\laravel\His project v1\resources\views/index.blade.php ENDPATH**/ ?>