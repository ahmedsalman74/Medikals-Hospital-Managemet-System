 <!-- Font Icon -->
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

 <!-- Main css -->
 <link rel="stylesheet" href="/css/update.css">

 <!-- Main css -->
 <!-- <link rel="stylesheet" href="css/styles.css"> -->


<title>update user</title>
 <div class="main">

     <!-- Sign up form -->
     <section class="signup">
         <div class="container">
             <div class="signup-content">
                 <div class="signup-form">
                     <h2 class="form-title">Update Data</h2>
                     <form action="<?php echo e(route('cruduser.update',$users->id)); ?>" method="post">
                         <?php echo method_field('PUT'); ?>
                         <?php echo csrf_field(); ?>

                         <div class="form-group">
                             <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                             <input type="text" name="name" id="name" value="<?php echo e($users->name); ?>" />
                         </div>
                         <div class="form-group">
                             <label for="email"><i class="zmdi zmdi-email"></i></label>
                             <input type="text" name="email" value="<?php echo e($users->email); ?>">
                             <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <span><?php echo e($message); ?></span>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                         </div>
                         <div class="form-group">
                             <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                             <input type="phone" name="phone" value="<?php echo e($users->phone); ?>">

                         </div>

                         <div class="form-group">
                             <label for="address"><i class="zmdi zmdi-account material-icons-address"></i></label>
                             <input type="text" name="address" id="name" value="<?php echo e($users->address); ?>" />
                         </div>

                         <div class="form-group form-button">
                             <input type="submit" name="signup" id="submit" class="form-submit" value="submit" />
                         </div>

                     </form>

                 </div>
                 <div class="signup-image">
                     <figure><img src="https://img.freepik.com/free-vector/flat-hand-drawn-patient-taking-medical-examination-illustration_23-2148859982.jpg?w=2000" alt="sing up image"></figure>

                 </div>

             </div>
         </div>
     </section>

 </div><?php /**PATH F:\projects\summer train 2022\His project last edit\resources\views/cruduser/update.blade.php ENDPATH**/ ?>