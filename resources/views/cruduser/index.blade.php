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
            <a href="{{ route('admin') }} " class="brand-logo">
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
                                Users
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
                            <li><a href="{{ route('apointments.index') }} ">View appointments</a></li>
                            <li><a href="{{ route('apointments.create') }} ">Add appointments</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('cruduser.index') }} ">View Users</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Doctors</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('doctorss.index') }} ">View Doctors</a></li>
                            <li><a href="{{ route('doctorss.create') }}">Add doctor </a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Billing</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('invoice.create') }}">Add Bill</a></li>
                            <li><a href="{{ route('invoice.index') }}">view all Bills </a></li>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent appointments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>ID</strong></th>
                                                <th><strong>NAME</strong></th>
                                                <th><strong>PHONE</strong></th>
                                                <th><strong>EMAIL</strong></th>
                                                <th><strong>ADDRESS</strong></th>
                                                <th><strong>ACTION</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($users as $user )
                                            <tr>
                                                <td><strong>{{ $user->id }}</strong></td>
                                                <td>{{ $user->name }}</td>
                                                <td>0{{ $user->phone }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->address}}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('cruduser.update',$user->id) }}">Edit</a>
                                                            <a class="dropdown-item" href="{{ route('Users.destroy',$user->id) }} ">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
    <!-- Required vendors -->
    <script src="/js/global.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script> 
</body>

</html>