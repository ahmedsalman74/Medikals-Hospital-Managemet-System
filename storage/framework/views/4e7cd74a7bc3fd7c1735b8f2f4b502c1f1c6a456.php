 <!-- Font Icon -->
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

 <!-- Main css -->
 <link rel="stylesheet" href="/css/update.css">

 <!-- Main css -->
 <!-- <link rel="stylesheet" href="css/styles.css"> -->



 <div class="main">

     <!-- Sign up form -->
     <section class="signup">
         <div class="container">
             <div class="signup-content">
                 <div class="signup-form">
                     <h2 class="form-title">Update Data</h2>
                     <form action="<?php echo e(route('doctorss.edit',$doctors->id)); ?>" method="post">
                         <?php echo method_field('PUT'); ?>
                         <?php echo csrf_field(); ?>

                         <div class="form-group">
                             <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                             <input type="text" name="name" id="name" value="<?php echo e($doctors->name); ?>" />
                         </div>
                         <div class="form-group">
                             <label for="email"><i class="zmdi zmdi-email"></i></label>
                             <input type="text" name="email" value="<?php echo e($doctors->email); ?>">
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
                         

                         <select id='sel_ser' name='serid' class="form-select">
                             <option value='0'>Select a Service</option>
                             <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value='<?php echo e($service->id); ?>'><?php echo e($service->name); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                         </div>

                         <div class="form-group form-button">
                             <input type="submit" name="signup" id="submit" class="form-submit" value="submit" />
                         </div>

                     </form>

                 </div>
                
             </div>
         </div>
     </section>

 </div><?php /**PATH F:\projects\summer train 2022\His project last edit\resources\views/doctorss/update.blade.php ENDPATH**/ ?>