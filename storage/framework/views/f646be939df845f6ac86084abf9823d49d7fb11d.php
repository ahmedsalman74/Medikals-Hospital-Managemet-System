<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title> Admin Template</title>

    <link href="/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/css/nice-select.css" rel="stylesheet">

    <link href="/css/dstyle.css" rel="stylesheet">

</head>

<body>




    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?php echo e(route('admin')); ?> " class="brand-logo">
                Medikals
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->





        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Create Apointments
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="/logouts" class="btn btn-primary d-sm-inline-block d-none">log out<i></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">


                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">appointments</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('apointments.index')); ?> ">View appointments</a></li>
                            <li><a href="<?php echo e(route('apointments.create')); ?> ">Add appointments</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('cruduser.index')); ?> ">View Users</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Doctors</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('doctorss.index')); ?> ">View Doctors</a></li>
                            <li><a href="<?php echo e(route('doctorss.create')); ?>">Add doctor </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Billing</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('invoice.create')); ?>">Add Bill</a></li>
                            <li><a href="<?php echo e(route('invoice.index')); ?>">view all Bils </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Radiolgy</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a >Add </a></li>
                            <li><a >view  </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Beds</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a >Reserve </a></li>
                            <li><a >view  </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Out Patient</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a >Add </a></li>
                            <li><a >view  </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">HR</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a >Add </a></li>
                            <li><a >view  </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Front office</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a >Add </a></li>
                            <li><a >view  </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Pathology</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a >Add </a></li>
                            <li><a >view  </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Pharmacy</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a >Add </a></li>
                            <li><a >view  </a></li>
                        </ul>

                    </li>
                   

                </ul>
                <div class="copyright">
                    <p><strong>Admin Dashboard</strong> © 2022 All Rights Reserved</p>
                    <p class="fs-12">Made with <span>❤️</span> by Ahmed salman</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Appointents</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
                    </ol>
                </div>
                <!-- row -->
                <form method="post" action="submit">

                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                               
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Enter patient Data</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <form>

                                                    <div class="input-group mb-3">
                                                        <label for=" userid" class="col-sm-3 col-form-label">User</label>
                                                        <select name='userid' required class="dropdown-item  form-control wide">
                                                            <option value="" selected disabled>Choose...</option>

                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value='<?php echo e($user->id); ?>'><?php echo e($user->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <label for=" Service" class="col-sm-3 col-form-label">Service</label>
                                                        <select required id='sel_ser' name='sel_ser' class="dropdown-item  form-control wide">
                                                            <option value="" selected disabled>Choose...</option>
                                                            <?php $__currentLoopData = $specialtysData['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value='<?php echo e($specialty->id); ?>'><?php echo e($specialty->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label for="Doctor Name" class="col-sm-3 col-form-label">Doctor</label>
                                                        <select required id='sel_doc' name='DocID' class="dropdown-item  form-control wide">

                                                            <option value="" selected>Select a Doctor </option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label class="col-sm-3 col-form-label">Full Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="pname" id="name" class="form-control" placeholder="Full Name">
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label class="col-sm-3 col-form-label">Phone</label>
                                                        <div class="col-sm-9">
                                                            <input input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label class="col-sm-3 col-form-label">Date</label>
                                                        <div class="col-sm-9">
                                                            <input input type="date" name="Date" id="formdate" class="form-control" required placeholder="date">
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label class="col-sm-3 col-form-label">Time</label>
                                                        <div class="col-sm-9">
                                                            <input input type="time" name="time" id="formtime" class="form-control" required placeholder="time">
                                                        </div>
                                                    </div>


                                                    <div class="mb-3 row">
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary">Create</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                               
                            </div>
                        </div>


                    </div>

                </form>
                <?php $__errorArgs = ['userid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="error"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">@salman74</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/js/global.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>









    <script>
        var date = new Date();

        var day = date.getDate() + 1,
            month = date.getMonth() + 1,
            year = date.getFullYear(),
            hour = date.getHours(),
            min = date.getMinutes();

        month = (month < 10 ? "0" : "") + month;
        day = (day < 10 ? "0" : "") + day;
        hour = (hour < 10 ? "0" : "") + hour;
        min = (min < 10 ? "0" : "") + min;

        var today = year + "-" + month + "-" + day,
            displayTime = hour + ":" + min;

        document.getElementById('formdate').value = today;
        document.getElementById("formtime").value = displayTime;

        document.getElementById('formdate').setAttribute("min", today);
       
    </script>
    <script type='text/javascript'>
        $(document).ready(function() {

            $('#sel_ser').change(function() {
                // Department id
                var id = $(this).val();

                // Empty the dropdown
                $('#sel_doc').find('option').not(':first').remove();

                // AJAX request
                $.ajax({
                    url: '/appointments/create/doctors/'+ id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var len = 0;
                        if (response['data'] != null) {
                            len = response['data'].length;
                        }

                        if (len > 0) {
                            // Read data and create <option >
                            for (var i = 0; i < len; i++) {
                                var id = response['data'][i].id;
                                var name = response['data'][i].name;
                                var option = "<option value='" + id + "'>" + name + "</option>";
                                $("#sel_doc").append(option);
                            }
                        }
                    }
                });
            });
        });
    </script>

</body>

</html><?php /**PATH F:\projects\summer train 2022\His project last edit v2\resources\views/appointments/create.blade.php ENDPATH**/ ?>