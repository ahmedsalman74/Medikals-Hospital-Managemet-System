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
                <li><a href="/">Home</a></li>
                <li><a href="/doctors">Doctors</a></li>
                <li><a href="/service">Services</a></li>
                <li><a href="/Login" target="_blank">Register</a></li>
                <li><a href="/first">Contact</a></li>
    
            </ul>
    
          </div>
    
        <div class="container">
        <h1> Make An Appointment Now </h1>
    
    <form  method="post" action="/appointment" id="appoinment_form">
    <?php echo csrf_field(); ?>
        <div>
        
        <label for ="Doctor Name" ></label>
<select name ="Dname" id = "Doctor Name">
    <option disabled>Select a doctor</option>
    <option value="Dr.Randu Serubawan" > Dr.Randu Serubawan </option>
    <option value="Dr.Ijaya Funwonje" > Dr.Ijaya Funwonje </option>
    <option value="Dr.Ika lgboro" > Dr.Ika lgboro </option>
    <option value="Dr.Serena Williams" > Dr.Serena Williams </option>
    <option value="Dr.Kenjiro Tsuda" > Dr.Kenjiro Tsuda </option>
    <option value="Dr.Amy Adams" > Dr.Amy Adams </option>
    <option value="Dr.Dwight Schute" > Dr.Dwight Schute </option>
    <option value="Dr.Julia Roberts" > Dr.Julia Roberts </option>
    <option value="Dr.John Krasinski" > Dr.John Krasinski </option>
</select>  


<label for =" Services"  > </label>
<select name =" Service" id =" Service">
<option disabled>Select a Service</option>
<option value = "Cardiology"> Cardiology </option>
<option value = "Dental Care"> Dental Care </option>
<option value = "Primary Care"> Primary Care </option>
<option value = "Pediatrics"> Pediatrics </option>
<option value = "OB/GYN"> OB/GYN </option>
<option value = "Blood Analysis"> Blood Analysis </option>
</select>


    <label> </label> 
           <input type ="number" name="PID" required placeholder ="patient id" min="1" >   <input type ="text" name="Pname"required placeholder ="Your name">
            
    
</div>
<div>
    <label> </label>
    <input type="number" name="phone" required  placeholder ="your phone" min="0">      <input type ="text" name="Email"required placeholder ="your email">
</div>

<div>
   <label> </label>
   <input type = "date" name="Date" required placeholder = "date" class = "date">  <input type ="time"  name="time"required placeholder=" time"  min ="0" max = "12" class = "time"> 
</div>

<input type = "subject"  name="message" required placeholder = " Message " class = "message">


   

   <div>
    <a href="/confirmation"> <button type="submit",value="Make Appointment"><span></span>Make Appointment</button></a>

    </form>
  </div>
</div>


    </body>
</html>
<?php /**PATH D:\Programs\laravel\His project\resources\views/appointment.blade.php ENDPATH**/ ?>