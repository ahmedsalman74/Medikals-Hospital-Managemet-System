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
    <div class="title">Appointment Details</div>
    <div class="content">
      <form action="">
        <div class="user-details">
          <div class="input-box">
            <p class="details">Patient ID</p>
            <label type="text" ><?php $PID = ($_POST['PID']);
            echo"$PID"?></label>
          </div>
          <div class="input-box">
            <p class="details">Patient FullName</p>
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
            <label type="number" ><?php $DocID = ($_POST['DocID']);
            if($DocID==1){
              echo"Dr. Serena Williams";}
            elseif($DocID==2){
              echo"Dr. Kenjiro Tsuda";}
            elseif($DocID==3){
                echo"Dr. Amy Adams";}
            elseif($DocID==4){
                echo"Dr. Dwight Schrute";}
            elseif($DocID==5){
                echo"Dr. Julia Roberts";}
            elseif($DocID==6){
                echo"Dr. John Krasinski";}
            elseif($DocID==7){
                echo"Dr. Randu Serubawan";}
            elseif($DocID==8){
                echo"Dr. Ijaya Funwonje";}
            elseif($DocID==9){
                echo"Dr. Ika lgboro";}
            else{
                echo"This Dr doesn't exist";} ?></label>
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





</html>
<?php /**PATH D:\Programs\laravel\His project v1\resources\views/confirmation.blade.php ENDPATH**/ ?>