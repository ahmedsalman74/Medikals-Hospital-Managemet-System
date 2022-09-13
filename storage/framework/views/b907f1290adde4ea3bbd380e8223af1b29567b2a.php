<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>

<td>Name</td>

         
</tr>
<?php $__currentLoopData = $Doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    
<td><?php echo e($Doctor->Dname); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\Programs\laravel\His project v1\resources\views//show.blade.php ENDPATH**/ ?>