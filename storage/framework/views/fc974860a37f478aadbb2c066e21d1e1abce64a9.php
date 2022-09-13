<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title> invoice</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link rel="stylesheet" href="/css/chartist.min.css">

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
                                Billing Module
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
                                <a href="/logouts" class="btn btn-primary d-sm-inline-block d-none">Log Out<i class="las la-signal ms-3 scale5"></i></a>
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
                            <span class="nav-text">Billing </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Add Bill</a></li>
                            <li><a href="">viwe all Bils </a></li>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Shop</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Checkout</a></li>
                    </ol>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                   
                                    <div class="col-lg-4 order-lg-2 mb-4">
                                    <h6 >Add patient services</h6>
                                        <ul class="list-group mb-3" id="myList">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">

                                                <div class="input-group mb-3">

                                                    <select required id='sel_ser' name='sel_ser' class="dropdown-item  form-control wide">
                                                        <option value="" selected disabled>select service</option>

                                                    </select>
                                                    <span class="text-muted">$12</span>
                                                </div>

                                            </li>
                                           

                                            <br>

                                        </ul>
                                        <br>
                                        <li class="list-group-item d-flex justify-content-between active">
                                            <div class="text-white">
                                                <h6 class="my-0 text-white">Promo code</h6>
                                                <small>EXAMPLECODE</small>
                                            </div>
                                            <span class="text-white">$0</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Total (USD)</span>
                                            <strong>$20</strong>
                                        </li>
                                        <br><br>
                                        <button class="btn btn-primary d-sm-inline-block d-none" onclick="myFunction()">Add service</button>
                                        <br> <br>
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Promo code">
                                                <button type="submit" class="input-group-text">Redeem</button>
                                            </div>
                                        </form><br>

                                    </div>
                                    <div class="col-lg-8 order-lg-1">
                                        <h4 class="mb-3">Billing address</h4>
                                        <form class="needs-validation" novalidate="">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="firstName" class="form-label">First name</label>
                                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                                    <div class="invalid-feedback">
                                                        Valid first name is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lastName" class="form-label">Last name</label>
                                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                                    <div class="invalid-feedback">
                                                        Valid last name is required.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">@</span>
                                                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Your username is required.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                                <div class="invalid-feedback">
                                                    Please enter a valid email address for shipping updates.
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">phone </label>
                                                <input type="phone" class="form-control" id="phone" placeholder="phone number">
                                            </div>

                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                                <div class="invalid-feedback">
                                                    Please enter your shipping address.
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-5 mb-3">
                                                    <label class="form-label">Country</label>
                                                    <select class="default-select form-control wide w-100">
                                                        <option selected="">Choose...</option>
                                                        <option value="1">Egypt</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a valid country.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">State</label>
                                                    <select class="default-select form-control wide w-100">
                                                        <option selected="">Choose...</option>
                                                        <option value="Ad Daqahliyah">Ad Daqahliyah</option>
                                                        <option value="Al Bahr al Ahmar">Al Bahr al Ahmar</option>
                                                        <option value="Al Buhayrah">Al Buhayrah</option>
                                                        <option value="Al Fayyum">Al Fayyum</option>
                                                        <option value="Al Gharbiyah">Al Gharbiyah</option>
                                                        <option value="Al Iskandariyah">Al Iskandariyah</option>
                                                        <option value="Al Isma'iliyah">Al Isma'iliyah</option>
                                                        <option value="Al Jizah">Al Jizah</option>
                                                        <option value="Al Minufiyah">Al Minufiyah</option>
                                                        <option value="Al Minya">Al Minya</option>
                                                        <option value="Al Qahirah">Al Qahirah</option>
                                                        <option value="Al Qalyubiyah">Al Qalyubiyah</option>
                                                        <option value="Al Wadi al Jadid">Al Wadi al Jadid</option>
                                                        <option value="Ash Sharqiyah">Ash Sharqiyah</option>
                                                        <option value="As Suways">As Suways</option>
                                                        <option value="Aswan">Aswan</option>
                                                        <option value="Asyut">Asyut</option>
                                                        <option value="Bani Suwayf">Bani Suwayf</option>
                                                        <option value="Bur Sa'id">Bur Sa'id</option>
                                                        <option value="Dumyat">Dumyat</option>
                                                        <option value="Janub Sina'">Janub Sina'</option>
                                                        <option value="Kafr ash Shaykh">Kafr ash Shaykh</option>
                                                        <option value="Matruh">Matruh</option>
                                                        <option value="Qina">Qina</option>
                                                        <option value="Shamal Sina'">Shamal Sina'</option>
                                                        <option value="Suhaj">Suhaj</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="zip" class="form-label">Zip</label>
                                                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Zip code required.
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mb-4">
                                            <div class="form-check custom-checkbox mb-2">
                                                <input type="checkbox" class="form-check-input" id="same-address">
                                                <label class="form-check-label" for="same-address">Shipping address
                                                    is
                                                    the same as
                                                    my billing address</label>
                                            </div>
                                            <div class="form-check custom-checkbox mb-2">
                                                <input type="checkbox" class="form-check-input" id="save-info">
                                                <label class="form-check-label" for="save-info">Save this
                                                    information
                                                    for next
                                                    time</label>
                                            </div>
                                            <hr class="mb-4">


                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                                                checkout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script>
        function myFunction() {

            // Create an "li" node:
            const node = document.createElement("li");
            var objTo = document.getElementById('service')
            // Create a text node:
            var divtest = document.createElement("service");
            divtest.innerHTML = `
            <li class="list-group-item d-flex justify-content-between lh-condensed">

                                                <div class="input-group mb-3">

                                                    <select required id='sel_ser' name='sel_ser' class="dropdown-item  form-control wide">
                                                        <option value="" selected disabled>select service</option>

                                                    </select>
                                                    <span class="text-muted">$12</span>
                                                </div>

                                            </li>`;


            // Append the text node to the "li" node:
            node.appendChild(divtest);

            // Append the "li" node to the list:
            document.getElementById("myList").appendChild(node);




        }
    </script>
    <!-- Required vendors -->
    <script src="/js/global.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>
</body>


</html><?php /**PATH F:\projects\summer train 2022\His project last edit v2\resources\views/appcreate.blade.php ENDPATH**/ ?>