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
                                Add Doctors
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
                            <li><a href="<?php echo e(route('invoice.index')); ?>">view all Bills </a></li>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Doctors</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Creat</a></li>
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
                                        <h4 class="card-title">Enter Doctor Data</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form>



                                                <div class="input-group mb-3">
                                                    <label for=" Service" class="col-sm-3 col-form-label">Service</label>
                                                    <select required id='sel_ser' name='serid' class="dropdown-item  form-control wide">
                                                        <option value='0'>Choose...</option>
                                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value='<?php echo e($service->id); ?>'><?php echo e($service->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="col-sm-3 col-form-label">Full Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <label class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input input type="email" name="email" id="email" class="form-control" placeholder="email">

                                                    </div>
                                                </div>
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











</body>

</html><?php /**PATH F:\projects\summer train 2022\His project last edit v2\resources\views/doctorss/create.blade.php ENDPATH**/ ?>