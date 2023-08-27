<?php
    session_start();
    include 'php/koneksi.php';
    @$status = $_SESSION['status'];
?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords"
            content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
        <meta name="description"
            content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
        <meta name="robots" content="noindex,nofollow">
        <title>Dashboard</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
        <!-- Favicon icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
        <link rel="manifest" href="../images/site.webmanifest">
        <!-- Custom CSS -->
        <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
        <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
        <!-- Custom CSS -->
        <link href="css/style.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin6">
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="multiLevel_dashboard.php">
                            <!-- Logo text -->
                            <span class="logo-icon">
                                <!-- dark Logo text -->
                                <img src="plugins/images/logo.png" style="width: 80px;" alt="homepage" />
                            </span>
                        </a>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                            href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <?php
                        if ($status=="login") {
                        ?>
                            <div class="navbar-collapse collapse dropdown" id="navbarSupportedContent" data-navbarbg="skin5">
                               
                                <!-- ============================================================== -->
                                <!-- Right side toggle and nav items -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav ms-auto d-flex align-items-center">
                                    <!-- ============================================================== -->
                                    <!-- User profile and search -->
                                    <!-- ============================================================== -->
                                    <li>
                                        <div class="mainmenubtn">
                                            <a class="profile-pic" href="#">
                                                <img src="plugins/images/users/<?php echo $_SESSION['username']; ?>.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium"><?php echo $_SESSION['username']; ?></span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                    <div class="dropdown-child">
                                        <a href="php/multiLevel_logout.php">Logout</a>
                                    </div>
                            </div>
                        <?php
                        }else{
                        ?>
                            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                               
                                <!-- ============================================================== -->
                                <!-- Right side toggle and nav items -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav ms-auto d-flex align-items-center">
                                    <!-- ============================================================== -->
                                    <!-- User profile and search -->
                                    <!-- ============================================================== -->
                                    <li>
                                        <a class="profile-pic" href="../index.html">
                                            <img src="plugins/images/users/guest.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">guest</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <?php
                        }
                    ?>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <!-- User Profile-->
                            <li class="sidebar-item pt-2">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                    aria-expanded="false">
                                    <i class="far fa-clock" aria-hidden="true"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                        <?php
                            if ($status=="login") {
                                if ($_SESSION['level']=="teacher") {
                                ?>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="php/multiLevel_profile.php"
                                            aria-expanded="false">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span class="hide-menu">Input Nilai</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="php/multiLevel_basic-table.php"
                                            aria-expanded="false">
                                            <i class="fa fa-table" aria-hidden="true"></i>
                                            <span class="hide-menu">Daftar Nilai</span>
                                        </a>
                                    </li>
                                <?php
                                }else{
                                    ?>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="php/multiLevel_basic-table.php"
                                            aria-expanded="false">
                                            <i class="fa fa-table" aria-hidden="true"></i>
                                            <span class="hide-menu">Daftar Nilai</span>
                                        </a>
                                    </li>
                                    <?php
                                }
                        }else{
                            ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../index.html"
                                    aria-expanded="false">
                                    <i class="fa fa-table" aria-hidden="true"></i>
                                    <span class="hide-menu">Daftar Nilai</span>
                                </a>
                            </li>

                            <?php
                        }
                        ?>
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
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb bg-white">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        	<?php if ($_SESSION['level']=="teacher") {
                                ?>
                            	<h4 class="page-title">Dashboard Guru</h4>
                        	<?php }else if ($_SESSION['level']=="student") {
                        		?>
                            	<h4 class="page-title">Dashboard Siswa</h4>
                        	<?php }else {
                        		?>
                            	<h4 class="page-title">Dashboard Tamu</h4>
                        	<?php } ?>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <div class="d-md-flex">
                                <ol class="breadcrumb ms-auto">
                                    <li><a href="#" class="fw-normal">Dashboard</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                            <?php
                                if ($status=="login") {
                                ?>
                                    <div class="white-box">
                                        <div class="col-md-12 col-sm-12 text-center">
                                            <h1>Selamat Datang <?php echo $_SESSION['username']; ?> !</h1>
                                        </div>
                                    </div>
                                    <div class="white-box">
                                        <div class="user-bg"> <img alt="user" src="plugins/images/large/<?php echo $_SESSION['username']; ?>.jpg" width="100%"> 
                                            <div class="overlay-box">
                                                <div class="user-content">
                                                    <a href="javascript:void(0)"><img src="plugins/images/users/<?php echo $_SESSION['username']; ?>.jpg" class="thumb-lg img-circle" alt="img"></a>
                                                    <h4 class="text-white mt-2"><?php echo $_SESSION['username']; ?></h4>
                                                    <h5 class="text-white mt-2"><?php echo $_SESSION['email']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                            }else{
                                ?>
                                    <div class="white-box">
                                        <div class="user-bg"> <img alt="user" src="plugins/images/large/guest.jpg" width="100%">
                                            <div class="overlay-box">
                                                <div class="user-content">
                                                    <a href="../index.html"><img src="plugins/images/users/guest.jpg" class="thumb-lg img-circle" alt="img"></a>
                                                    <h4 class="text-white mt-2">guest</h4>
                                                    <h5 class="text-white mt-2">guest@mail.com</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-btm-box mt-5 d-md-flex">
                                            <div class="col-md-12 col-sm-12 text-center">
                                                <h2>custom text</h2>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/app-style-switcher.js"></script>
        <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="js/custom.js"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
        <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="js/pages/dashboards/dashboard1.js"></script>
    </body>

    </html>