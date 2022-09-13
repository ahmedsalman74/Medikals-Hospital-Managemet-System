<!DOCTYPE html>
<html>
    <head>
<title> </title>
<link rel=" stylesheet" href="/css/master.css">

    </head>
    <body>
        <div class="navbar">
            <img src="/image/logo.png" class="logo">
            <ul>
                <li><a href="/index">profile</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/doctors">Doctors</a></li>
                <li><a href="/service">Services</a></li>
                <li><a href="/Login" target="_blank">Register</a></li>
                <li><a href="/first">Contact</a></li>
    
            </ul>
    
          </div>
    
        <div class="container">
        <h1> Make An Appointment Now </h1>
    
    <form action="#" >
        <div class="user-info">
  
        <div>
            
        <label for ="Doctor Name" ></label>
<select name ="Doctor Name" id = "Doctor Name">
    <option>Select a doctor</option>
    <option value="1" > Dr. Randu Serubawan </option>
    <option value="2" > Dr. Ijaya Funwonje </option>
    <option value="3" > Dr. Ika lgboro </option>
    <option value="4" > Dr. Serena Williams </option>
    <option value="5" > Dr. Kenjiro Tsuda </option>
    <option value="6" > Dr. Amy Adams </option>
    <option value="7" > Dr. Dwight Schute </option>
    <option value="8" > Dr. Julia Roberts </option>
    <option value="9" > Dr. John Krasinski </option>
</select>  


<label for =" Services" > </label>
<select name =" Services " id =" Service">
<option>Select a Service</option>
<option value = "1"> Cardiology </option>
<option value = "1"> Dental Care </option>
<option value = "1"> Primary Care </option>
<option value = "1"> Pediatrics </option>
<option value = "1"> OB/GYN </option>
<option value = "1"> Blood Analysis </option>
</select>

</div>
<div>
    <label> </label> 
           <input type ="number" required placeholder ="patient id" min="1">   <input type ="text" required placeholder ="Your name">
            
    
</div>
<div>
    <label> </label>
    <input type="number" required  placeholder ="your phone" min="0">      <input type ="text" required placeholder ="your email">
</div>

<div>
   <label> </label>
   <input type = "date" required placeholder = "date" class = "date">  <input type ="number" required placeholder=" time"  min ="0" max = "12" class = "time"> 
</div>

<input type = "subject" required placeholder = " Message " class = "message">

   

   <div>
    <a href="appointment.html"> <button type="button"><span></span>Make Appointment</button></a>
 
  </div>
</div>



    </body>
</html>
<?php /**PATH D:\Programs\laravel\NewProject\resources\views/appointment.blade.php ENDPATH**/ ?>