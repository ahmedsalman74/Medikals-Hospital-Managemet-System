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
    @if(session('loggedIn'))
      <div class="navbar">
        <img src="/image/logo.png" class="logo">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/doctors">Doctors</a></li>
          <li><a href="/service">Services</a></li>
          @if(session('user')->role==1)
          <li><a href="/admin">Admin</a></li>
          <li><a href="/logouts">Logout</a></li>
          @else
          <li><a style="text-transform: capitalize" href="{{ route('index',session('user')->id)}}">{{session('user')->name}}</a></li>
          <li><a href="/logout">Logout</a></li>
          @endif
          <li><a href="/first">Contact</a></li>

        </ul>

      </div>
    @else

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
    @endif

    @if(session('success_message'))
    <p class="success">{{$success_message}} </p>
    @endif

    <div class="content">
      <h1>Your Health is</h1>
      <h1> our Top Priority</h1>
      <br>

      <p>We are committed to making you feel better </p>
      <p>and healthy everyday of your life . your health is very </p>
      <p>important and we have a great team to cater to you</p>

    @if(session('loggedIn'))

      @if(session('user')->role==1)
      
      <a href="/appointments/create"> <button type="button"><span></span>Make Appointment</button></a>

      @else
      <div>

        <a href="/appointment"> <button type="button"><span></span>Make Appointment</button></a>


      </div>
      @endif
    @else
    <a href="/appointment"> <button type="button"><span></span>Make Appointment</button></a>

    @endif


    </div>


  </div>

</body>

</html>
