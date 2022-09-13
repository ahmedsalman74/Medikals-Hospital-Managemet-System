<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="/css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    <div class="title">Appointment</div>
    <div class="content">
      <form action="">
        <div class="user-details">
          <div class="input-box">
            <p class="details">Patient ID</p>
            <label type="text" ><?php $PID = ($_POST['PID']);
            echo"$PID"?></label>
          </div>
          <div class="input-box">
            <p class="details">Patient Name</p>
            <label type="text" ><?php $Pname = ($_POST['Pname']);
            echo"$Pname"?></label>
          </div>
          <div class="input-box">
            <p class="details">Patient E-mail</p>
            <label type="text" ><?php $Email = ($_POST['Email']);
            echo"$Email"?></label>
          </div>
          <div class="input-box">
            <p class="details">Phone Number</p>
            <label type="text" ><?php $phone = ($_POST['phone']);
            echo"$phone"?></label>
          </div>
          <div class="input-box">
            <p class="details">Doctor Name</p>
            <label type="text" ><?php $Dname = ($_POST['Dname']);
            echo"$Dname"?></label>
          </div>
          <div class="input-box">
            <p class="details">Selected Service</p>
            <label type="text" ><?php $Service = ($_POST['Service']);
            echo"$Service"?></label>
          </div>
          <div class="input-box">
            <p class="details">Appointment Date</p>
            <label type="text" ><?php $Date = ($_POST['Date']);
            echo"$Date"?></label>          </div>
        </div>
        
        
      </form>
      <div>
    
        <a href="/appointment"> <button type="submit"value="Make Appointment"><span ></span>Re-Make Appointment</button></a>
    
        <a href="/"> <button type="submit" value="Confirm"><span class="buttonSpan"></span>Confirm</button></a>
      </div>
      
  
    </div>
  </div>

</body>




<?php
  
 
 #$Dname= htmlspecialchars($_POST['Dname']);
 #$Pname  = htmlspecialchars($_POST['Pname']);
 #$Service= htmlspecialchars($_POST['Service']);
 #$PID  = ($_POST['PID']);
 #$phone  = ($_POST['phone']);

 #echo  "<h1>$Dname</h1>", ' ', $Pname,' ',$PID,' ',$phone;
 #echo"window.print();"; 

?>
</html>
<?php /**PATH F:\projects\His project\resources\views/confirmation.blade.php ENDPATH**/ ?>