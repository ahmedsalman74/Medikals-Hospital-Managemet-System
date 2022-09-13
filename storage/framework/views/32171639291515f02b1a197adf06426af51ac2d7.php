<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/Profile.css">


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
                <li><a href="<?php echo e(route('index', session('user')->id)); ?>"><?php echo e(session('user')->name); ?></a></li>
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

        <!-- <br> -->
        <div class="ContainerDiv">
            <fieldset class="fieldDiv">
                <legend><img
                        src="https://i0.wp.com/researchictafrica.net/wp/wp-content/uploads/2016/10/default-profile-pic.jpg?ssl=1"
                        class="img-circle" style="justify-content: center;" height=160 width=160></legend>
                <h3 id="h3">Personal Details:</h3> <br><br><br>
                <span class="span">ID: </span> <span class="span"> <?php echo e($user->id); ?> </span> <br><br><br>
                <span class="span">Name: </span> <span class="span"><?php echo e($user->name); ?></span> <br><br><br>
                <span class="span">Email: </span> <span class="span"><?php echo e($user->email); ?></span> <br><br><br>
                <span class="span">Phone: </span> <span class="span">0<?php echo e($user->phone); ?></span><br><br><br>
                <span class="span">Address: </span> <span class="span"><?php echo e($user->address); ?></span> <br><br><br>
                <div>
                    <br>
                    <form action="<?php echo e(route('update',session('user')->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <br>
                        <button style="margin: 0px 10%;" type="submit">Update</button>
                    </form>
                </div>
            </fieldset>





            <?php if( is_null($app_id)): ?>
            <div class="port">
                <h1 style="color: white; text-align:center;">There is no appointments</h1>
            </div>

           <?php else: ?>

            <div class="por">
                <h3>Appointments' details:</h3>
                <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <br>
                <div>

                    <div class="Scroller">

                        <table class="GeneratedTable">

                            <tbody>
                                <tr>
                                    <td> <span >Appointment ID :  <?php echo e($app->id); ?> </span></td>
                                    <td><span >Patient Name :  <?php echo e($app->pname); ?>

                                        </span><br></td>
                                </tr>
                                <tr>
                                    <td><span >Patient Phone :  0<?php echo e($app->phone); ?> </span><br>
                                    </td>
                                    <td><span >Doctor :  <?php echo e($app->doctor->name); ?>  </span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span >Service :  <?php echo e($app->doctor->service->name); ?> </span><br>
                                    </td>
                                    <td><span >Date : <?php echo e($app->date); ?> </span><br></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>




                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

</body>

</html>
<?php /**PATH D:\Programs\laravel\His project vsedit\resources\views/profile.blade.php ENDPATH**/ ?>