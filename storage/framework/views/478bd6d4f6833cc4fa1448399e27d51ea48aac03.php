
<!DOCTYPE html>
<html>




<head>
  <title>Appointment</title>
  <link rel=" stylesheet" href="/css/master.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

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
        <li><a href="/login">Login</a></li>
        <li><a href="/first">Contact</a></li>

      </ul>

    </div>
    <?php endif; ?>
    <div class="allcontainer">

      <div class="container">
        <h1> Make An Appointment Now </h1>
        <br>


        <form method="post" action="/appointment" id="appoinment_form">
          <?php echo csrf_field(); ?>
          <div>

              <select  required id='sel_ser' name='sel_ser' class="form-select">
                <option value=""  selected disabled >Select a Service</option>
                <?php $__currentLoopData = $specialtysData['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value='<?php echo e($specialty->id); ?>'><?php echo e($specialty->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>







            <label for="Doctor Name"></label>
              <select  required id='sel_doc' name='DocID' class="form-select">
                <option value="" selected >Select a Doctor </option>
            </select>




              </select>





          </div>
          <div>
            <label> </label>
            <input style="display: none;" type="number"  name="PID" value="<?php echo e(session('user')->id); ?>">
            <input type="text" name="Pname" required placeholder="FullName">  <input type="number" name="phone" required placeholder="Your phone" >
          </div>

          <div>
            <label> </label>
            <input type="date"id="formdate" name="date" required placeholder="date" class="date"> <input type="time" name="time"  id="formtime"required placeholder=" time" required class="time">
          </div>
          <div>

          <textarea style="height: 10em;"  name="message"  placeholder=" Message"  class="message"></textarea>
        </div>

          <div>
             <button type="submit" value="Make Appointment"><span></span>Make Appointment</button></a>


      </div>
      </form>
    </div>
  </div>







  <script>


    var date = new Date();

var day = date.getDate()+1,
    month = date.getMonth() + 1,
    year = date.getFullYear(),
    hour = date.getHours(),
    min  = date.getMinutes();

month = (month < 10 ? "0" : "") + month;
day = (day < 10 ? "0" : "") + day;
hour = (hour < 10 ? "0" : "") + hour;
min = (min < 10 ? "0" : "") + min;

var today = year + "-" + month + "-" + day,
    displayTime = hour + ":" + min;

document.getElementById('formdate').value = today;
document.getElementById("formtime").value = displayTime;

document.getElementById('formdate').setAttribute("min", today);
document.getElementById('formtime').setAttribute("min", displayTime);





  </script>











<script type='text/javascript'>
    $(document).ready(function(){

      $('#sel_ser').change(function(){

         var id = $(this).val();


         $('#sel_doc').find('option').not(':first').remove();


         $.ajax({
           url: 'getDoctors/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){

                    for(var i=0; i<len; i++){
                        var id = response['data'][i].id;
                        var name = response['data'][i].name;
                        var option = "<option value='"+id+"'>"+name+"</option>";
                        $("#sel_doc").append(option);
                    }
                }
           }
        });
      });
    });
</script>






<script type="text/javascript">
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
</script>


</body>

</html>
<?php /**PATH D:\Programs\laravel\His project last edit\resources\views/appointment.blade.php ENDPATH**/ ?>