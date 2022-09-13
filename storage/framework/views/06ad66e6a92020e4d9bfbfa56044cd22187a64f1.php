
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: /');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Confirmation</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    <div class="title">Appointment Details</div>
    <div class="content">
      <form action="">
        <div class="user-details">
        <div class="input-box">

            <p class="details">Appointment ID</p>
            <label type="text" ><?php echo e($aps->id); ?></label>
          </div>
          <div class="input-box">
            <p class="details">User ID</p>
            <label type="text" ><?php echo e($aps->userid); ?></label>
          </div>
          <div class="input-box">
            <p class="details">Patient FullName</p>
            <label type="text" ><?php echo e($aps->pname); ?></label>
          </div>

          <div class="input-box">
            <p class="details">Doctor Name </p>
            <label type="text" ><?php echo e($doc_name); ?></label>
          </div>
          <div class="input-box">
            <p class="details">User's E-mail</p>
            <label type="text" ><?php echo e($aps->user->email); ?></label>
          </div>
          <div class="input-box">
            <p class="details">Phone Number</p>
            <label type="text" ><?php echo e($aps->phone); ?></label>
          </div>

          <div class="input-box">
            <p class="details">Doctor Specialty</p>
            <label type="text" ><?php echo e($aps->doctor->service->name); ?></label>
          </div>
          <div class="input-box">
            <p class="details">Appointment Date</p>
            <label type="text" ><?php echo e($aps->date); ?></label>        </div>
        </div>



      </form>
      <div>

        <a href="/appointment"> <form action="<?php echo e(route('destroy')); ?>" method='POST'>
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit"><span class="buttonSpan"></span>Remake appointment</button>
                        </form>
                    </a>

        <a href="<?php echo e(route('index', session('user')->id)); ?>"> <button type="submit" value="submit"><span class="buttonSpan"></span>Continue</button></a>
      </div>


    </div>
  </div>

</body>



 <script>

   history.pushState(null, null, '/');
   window.addEventListener('popstate', function () {
    history.pushState(null, null, '/');

})

  </script>





</html>














<?php /**PATH F:\3rd Level\2nd Term\His project last edit v2\resources\views/show.blade.php ENDPATH**/ ?>