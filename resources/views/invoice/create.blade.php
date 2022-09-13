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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Shop</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Checkout</a></li>
                    </ol>
                </div>
                <form method="post" action="/invoice/submit" >

                    @csrf
                    <div class="row">
                        <div class="col-xl-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-4 order-lg-2 mb-4">
                                            <h6>Add patient services</h6>
                                            <ul class="list-group mb-3" id="myList">
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">

                                                    <div class="input-group mb-3">

                                                        <select required id='sel_ser' name='sel_ser' class="dropdown-item  form-control wide">
                                                            <option value="" selected disabled>select service</option>
                                                            @foreach($specialtysData['data'] as $specialty)
                                                            <option value='{{ $specialty->id }}'>{{ $specialty->name }} </option>
                                                            @endforeach
                                                        </select>
                                                        <a id='p' class="input-group-text">Price</a>

                                                    </div>

                                                </li>

                                            </ul>


                                            <br>
                                            <div class="input-group">

                                                <input class="form-control wide" id="bill_amount" autocomplete="off" required="">
                                                <a class="input-group-text">price</a>
                                            </div>
                                            <br>


                                            <div class="input-group mb-3">
                                                <select name="" id="select_percentage" required class="dropdown-item  form-control wide">
                                                    <option selected disabled value="" >-percentage-</option>
                                                    <option value="10">10%</option>
                                                    <option value="25">25%</option>
                                                    <option value="40">40%</option>
                                                    <option value="80">80%</option>
                                                    <option value="100">100%</option>

                                                </select>
                                                <a class="input-group-text">Discount</a>
                                            </div>
                                            <br>
                                            <div class="input-group">

                                                <input name="discount" class="form-control wide" id="discount_amount" >
                                                <a class="input-group-text">Discount Amount</a>
                                            </div> <br>

                                            <div class="input-group">

                                                <input name="total" class="form-control wide" id="final_amount">
                                                <a class="input-group-text">Total $</a>
                                            </div>
                                            <br> <br>

                                            <div class="input-group">
                                                <button class="btn btn-primary btn-lg btn-block" id="btn_1">Calculate</button>


                                            </div>


                                        </div>


                                        <div class="col-lg-8 order-lg-1">
                                            <h4 class="mb-3">Billing address</h4>
                                            <form class="needs-validation" novalidate="">
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Fill name</label>
                                                        <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Valid first name is required.
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                                                    <div class="invalid-feedback">
                                                        Please enter a valid email address for shipping updates.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">phone </label>
                                                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone number">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required="">
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



                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                                                    checkout</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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


    <!--**********************************
                                        this script is for adding new div in li to add new shlect option
    ***********************************-->

    <!--   <script>
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
                                                        @foreach($specialtysData['data'] as $specialty)
                                                        <option value='{{ $specialty->id }}'>{{ $specialty->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-muted">$12</span>
                                                </div>

                                            </li>`;


            // Append the text node to the "li" node:
            node.appendChild(divtest);

            // Append the "li" node to the list:
            document.getElementById("myList").appendChild(node);




        }
    </script> -->
    <!--    <script type='text/javascript'>
        $(document).ready(function() {
                    $('#sel_ser').change(function() {
                        var ids = $(this).find(':selected')[0].id;
                        $.ajax({
                            type: 'GET',
                            url: '/invioce/create/service/{id}',
                            data: {
                                id: ids
                            },
                            dataType: 'json',
                            success: function(data) {

                                $.each(data, function(key, resp) {
                                    $('#price').text(resp.product_price);
                                });
                            }
                        });
                    });

                    //add to cart 
                    var count = 1;
                    $('#add').on('click', function() {

                        var name = $('#sel_ser').val();
                        var qty = 1;
                        var price = $('#price').text();

                        function billFunction() {
                            var total = 0;

                            $("#receipt_bill").each(function() {
                                var total = price * qty;
                                var subTotal = 0;
                                subTotal += parseInt(total);

                                var table = '<tr><td>' + count + '</td><td>' + name + '</td><td>' + qty + '</td><td>' + price + '</td><td><strong><input type="hidden" id="total" value="' + total + '">' + total + '</strong></td></tr>';
                                $('#new').append(table)

                                // Code for Sub Total of services
                                var total = 0;
                                $('tbody tr td:last-child').each(function() {
                                    var value = parseInt($('#total', this).val());
                                    if (!isNaN(value)) {
                                        total += value;
                                    }
                                });
                                $('#subTotal').text(total);

                                // Code for calculate tax of Subtoal 5% Tax Applied
                                var Tax = (total * 5) / 100;
                                $('#taxAmount').text(Tax.toFixed(2));

                                // Code for Total Payment Amount

                                var Subtotal = $('#subTotal').text();
                                var taxAmount = $('#taxAmount').text();

                                var totalPayment = parseFloat(Subtotal) + parseFloat(taxAmount);
                                $('#totalPayment').text(totalPayment.toFixed(2)); // Showing using ID 

                            });
                            count++;
                        }
                    });
    </script>  -->


    <!-- Required vendors -->
    <script src="/js/global.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>



    <script type='text/javascript'>
        $(document).ready(function() {
            $('#sel_ser').change(function() {
                var id = $(this).val();
                // var id = 1;
                $.ajax({
                    type: 'get',
                    url: '/invoice/getprice/' + id,
                    data: id,
                    dataType: 'json',

                    success: function(data) {

                        console.log(data)

                        $.each(data, function(key, resp) {
                            $('#p').text(resp[0].price);
                            $('#price').text(resp[0].price);

                        });
                    }

                });
            });

        });
    </script>
    <script>
        const bill_amount = document.getElementById('bill_amount');
        const select_percentage = document.getElementById('select_percentage');
        const discount_amount = document.getElementById('discount_amount');
        const final_amount = document.getElementById('final_amount');

        const btn_1 = document.getElementById('btn_1').addEventListener("click", (e) => {
            if ((bill_amount.value !== "") && (select_percentage.value !== "-percentage-")) {
                let discount = bill_amount.value * (select_percentage.value / 100);
                let select = select_percentage.value;
                discount_amount.value = discount.toFixed(2);
                select_percentage.value=select;
            }

            if ((bill_amount.value !== "") && (select_percentage.value = "-percentage-") && (discount_amount.value !== "")) {
                let final = bill_amount.value - discount_amount.value;
                final_amount.value = final.toFixed(2);
            }
        })


   
    </script>



</body>


</html>