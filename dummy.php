<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include "config.php" ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
    <!-- Table  and JS includes -->
    <!-- <style>
        .avatar-upload {
            position: relative;
            max-width: 100px;
            cursor: pointer;
        }

        .avatar-preview {
            width: 100px;
            height: 100px;
            position: relative;
            border-radius: 50%;
            overflow: hidden;
        }

        #imagePreview {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .overlay-icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s ease;
        }

        .avatar-upload:hover .overlay-icon {
            opacity: 1;
        }

        .avatar-upload:hover {
            cursor: pointer;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .printable-modal,
            .printable-modal * {
                visibility: visible;
            }

            .printable-modal {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

        #roundedImageContainer {
            background-color: #f4f4f4;
            /* Optional background color for image container */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Optional shadow for image container */
        }

        #roundedImage {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .capture-btn {
            background-color: #007bff;
            color: white;
        }

        .mt-custom {
            margin-top: 50px;
            /* Adjust this value as needed */
        }

        .hidden {
            display: none;
        }

        .img-fluid {
            width: 178px;
            /* approximate width for passport photo at typical screen resolution */
            height: 178px;
            /* approximate height for passport photo at typical screen resolution */
            object-fit: cover;

            border-radius: 50%;

            border: solid 1px grey;
            /* this will ensure that the image covers the entire space without distortion */
        }
    </style> -->
    <style>
        .logo-image {
            width: 250px;
            /* Adjust the width as needed */
            height: 150px;
            /* Adjust the height as needed */
        }
    </style>
    <!-- Alertify includes and styling -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/webcam-easy@1.1.1/dist/webcam-easy.min.js"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/srms.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!--<span class="logo-text">
                             dark Logo text -->
                        <!--  <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />-->

                        <!-- </span> -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <button class="nav-link pt-2 mr-3" style="background-color: transparent; border: none;">
                                <i class="fa fa-bell font-24 "></i>
                                <span class="badge badge-pill badge-danger font-14 rounded-circle position-absolute top-0 start-100 translate-middle ">
                                    <span class="navbadgebutton">
                                        <?php
                                        $query = "SELECT * FROM approval WHERE exitApproval=0 AND DATE(inTime) = CURDATE();";
                                        $result = mysqli_query($db, $query);
                                        $count = mysqli_num_rows($result);
                                        if ($count > 0) {
                                            echo $count;
                                        } else if ($count == 0) {
                                            echo $count;
                                        }
                                        ?>
                                    </span>
                                </span>
                            </button>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="watchin.php" aria-expanded="false"><i class="fas fa-upload"></i><span class="hide-menu ">Watchman - In</span></li></a>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  " href="index.php" aria-expanded="false"><i class="fas fa-check-square"></i><span class="hide-menu badgebtn">Gate Approvals<span class="badge badge-pill ml-3 badge-danger font-14 "><?php
                                                                                                                                                                                                                                                                                                    $query = "SELECT * FROM approval WHERE exitApproval=0 AND DATE(inTime) = CURDATE();";
                                                                                                                                                                                                                                                                                                    $result = mysqli_query($db, $query);
                                                                                                                                                                                                                                                                                                    $count = mysqli_num_rows($result);
                                                                                                                                                                                                                                                                                                    if ($count > 0) {
                                                                                                                                                                                                                                                                                                        echo $count;
                                                                                                                                                                                                                                                                                                    } else if ($count == 0) {
                                                                                                                                                                                                                                                                                                        echo $count;
                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                    ?></span></span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="management.php" aria-expanded="false"><i class="fas fa-building"></i><span class="hide-menu ">Management</span></li></a>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="watchin.php" aria-expanded="false"><i class="fas fa-download"></i><span class="hide-menu ">Watchman - Out</span></li></a>

                    </ul>


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row ">
                    <div class="col-md-6">
                        <div class="card">
                            <form method="post" class="form-horizontal">


                                <div class="card-body">
                                    <h4 class="card-title">Status check</h4>

                                    <div class="form-group row">
                                        <label for="id" class="col-sm-3 text-right control-label col-form-label">Enter pass ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="id" name="id" placeholder="Enter pass ID Here" required>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="button" id="submitBtn" class="viewApprovalBtn btn btn-primary btn-rounded">Submit</button>

                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header d-flex justify-content-center align-items-center">
                                        <!-- Optional: Rounded Logo Image -->
                                        <img src="logo.jpeg" alt="Logo" class="logo-image me-3"><br>
                                        <h5 class="mb-0 mt-3  pl-5">MKCE Invitation Pass</h5>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <!-- Populate these values with data from your code -->
                                                <tr>
                                                    <th class="text-start fw-bold">In Time</th>
                                                    <td id="modalInTime">[In Time Placeholder]</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-start fw-bold">Name</th>
                                                    <td id="modalName">[Name Placeholder]</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-start fw-bold">Staff Name</th>
                                                    <td id="modalSName">[Staff Name Placeholder]</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-start fw-bold">Person Accompanied</th>
                                                    <td id="modalPA">[Person Accompanied Placeholder]</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Image and Button Container -->
                                        <div class="text-center mt-4">
                                            <!-- Dynamic Image -->
                                            <img id="approvalImage" src="" alt="Approval Image" class="img-fluid" style="width: 100px;height: 100px;">
                                        </div>
                                        <div class="text-center mt-3">
                                            <!-- Dynamic Button -->
                                            <button type="button" id="approvalButton" class="btn btn-primary" data-exit-approval="[your_exit_approval_value]">Allow out!</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                    <!-- ============================================================== -->
                    <!-- End Page wrapper  -->
                    <!-- ============================================================== -->
                </div>


                <!-- ============================================================== -->
                <!-- End Wrapper -->
                <script>
                    $(document).ready(function() {
                        $(document).on('click', '.viewApprovalBtn', function() {
                            var id = $('#id').val();

                            $.ajax({
                                type: "GET",
                                url: "profileform.php",
                                data: {
                                    id: id
                                },
                                dataType: "json",
                                success: function(response) {
                                    if (response.status === 404) {
                                        alert(response.message);
                                    } else if (response.status === 200) {
                                        // Populate the modal with the data from the response
                                        $('#modalInTime').text(response.data.inTime);
                                        $('#modalName').text(response.data.name);
                                        $('#modalSName').text(response.data.staffName);
                                        $('#modalPA').text(response.data.headcount);

                                        // Determine the image source based on exitApproval
                                        var approvalImageSrc = response.data.exitApproval === 1 ? 'tick.svg' : 'cross.svg';

                                        // Set the dynamic image source
                                        $('#approvalImage').attr('src', approvalImageSrc);

                                        // Check exitApproval value and hide/show the button accordingly
                                        if (response.data.exitApproval === 1) {
                                            $('#approvalButton').text('Allow out!').show();
                                        } else {
                                            // Hide the button when exitApproval is not 1
                                            $('#approvalButton').hide();
                                        }

                                        // Trigger the modal to show
                                        $('#myModal').modal('show');
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error("AJAX Error:", error);
                                    alert("There was an error processing your request.");
                                }
                            });
                        });
                    });
                </script>

                <script>
                    $(document).on('click', '#approvalButton', function() {
                        var id = $('#id').val();
                        var exitApproval = $(this).data('exit-approval'); // Get exitApproval from the button's data attribute

                        $.ajax({
                            type: "POST",
                            url: "flag.php",
                            data: {
                                id: id,
                                exitApproval: exitApproval
                            },
                            dataType: "json",
                            success: function(response) {
                                console.log(response);
                                if (response.status === 200) {
                                    alert('Watchman approval updated successfully.');
                                } else {
                                    alert('Error updating watchman approval.');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX Error:", error);
                                alert("There was an error processing your request.");
                            }
                        });
                    });
                </script>
                <script>
                    //***********************************//
                    // For select 2
                    //***********************************//
                    $(".select2").select2();

                    /*colorpicker*/
                    $('.demo').each(function() {
                        //
                        // Dear reader, it's actually very easy to initialize MiniColors. For example:
                        //
                        //  $(selector).minicolors();
                        //
                        // The way I've done it below is just for the demo, so don't get confused
                        // by it. Also, data- attributes aren't supported at this time...they're
                        // only used for this demo.
                        //
                        $(this).minicolors({
                            control: $(this).attr('data-control') || 'hue',
                            position: $(this).attr('data-position') || 'bottom left',

                            change: function(value, opacity) {
                                if (!value) return;
                                if (opacity) value += ', ' + opacity;
                                if (typeof console === 'object') {
                                    console.log(value);
                                }
                            },
                            theme: 'bootstrap'
                        });

                    });
                    /*datwpicker*/
                    jQuery('.mydatepicker').datepicker();
                    jQuery('#datepicker-autoclose').datepicker({
                        autoclose: true,
                        todayHighlight: true
                    });
                    var quill = new Quill('#editor', {
                        theme: 'snow'
                    });
                </script>
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- All Jquery -->
                <!-- ============================================================== -->
                <script src="assets/libs/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
                <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                <script src="assets/extra-libs/sparkline/sparkline.js"></script>
                <!--Wave Effects -->
                <script src="dist/js/waves.js"></script>
                <!--Menu sidebar -->
                <script src="dist/js/sidebarmenu.js"></script>
                <!--Custom JavaScript -->
                <script src="dist/js/custom.min.js"></script>
                <!--This page JavaScript -->
                <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
                <!-- Charts js Files -->
                <script src="assets/libs/flot/excanvas.js"></script>
                <script src="assets/libs/flot/jquery.flot.js"></script>
                <script src="assets/libs/flot/jquery.flot.pie.js"></script>
                <script src="assets/libs/flot/jquery.flot.time.js"></script>
                <script src="assets/libs/flot/jquery.flot.stack.js"></script>
                <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
                <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
                <script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>