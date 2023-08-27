<?php
    session_start();
    include 'koneksi.php';
    @$status = $_SESSION['status'];

if ($_SESSION['level']=="teacher") {
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
        <title>Admin Membership</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
        <!-- Favicon icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="../../images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon-16x16.png">
        <link rel="manifest" href="../../images/site.webmanifest">
        <!-- Custom CSS -->
       <link href="../css/style.min.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php
            include "koneksi.php";

            $id_student =$_POST['id_student'];
            $nama =$_POST['nama'];
            $bahasaIndonesia =$_POST['bahasaIndonesia'];
            $matematika =$_POST['matematika'];
            $fisika =$_POST['fisika'];
            $rata =($bahasaIndonesia+$matematika+$fisika)/3;

            $cek_id=mysqli_num_rows(mysqli_query($konek, "SELECT id_student FROM nilai WHERE id_student='$_POST[id_student]'"));
            if($cek_id>0){
                echo '<script language="javascript">
                alert("ID Sudah Digunakan");
                window.location="multiLevel_profile.php";
                </script>';
                exit();
            }
            else {
                $query=mysqli_query($konek, "INSERT INTO nilai VALUES ('$id_student','$nama','$bahasaIndonesia','$matematika','$fisika', '$rata')")
                or die(mysqli_error($konek));
                if($query){
                    echo "<script>alert('Data berhasil disimpan');window.location='#'</script>";
                    ?>
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
                                    <a class="navbar-brand" href="../multiLevel_dashboard.php">
                                        <!-- Logo text -->
                                        <span class="logo-icon">
                                            <!-- dark Logo text -->
                                            <img src="../plugins/images/logo.png" style="width: 80px;" alt="homepage" />
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
                                                <a class="profile-pic" href="../multiLevel_dashboard.php">
                                                    <img src="../plugins/images/users/<?php echo $_SESSION['username']; ?>.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium"><?php echo $_SESSION['username']; ?></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-child">
                                        <a href="multiLevel_logout.php">Logout</a>
                                    </div>
                                </div>
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
                                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../multiLevel_dashboard.php"
                                                aria-expanded="false">
                                                <i class="far fa-clock" aria-hidden="true"></i>
                                                <span class="hide-menu">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="multiLevel_profile.php"
                                                aria-expanded="false">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <span class="hide-menu">Input Nilai</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="multiLevel_basic-table.php"
                                                aria-expanded="false">
                                                <i class="fa fa-table" aria-hidden="true"></i>
                                                <span class="hide-menu">Daftar Nilai</span>
                                            </a>
                                        </li>
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
                                        <h4 class="page-title">Nilai Berhasil Disimpan</h4>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                        <div class="d-md-flex">
                                            <ol class="breadcrumb ms-auto">
                                                <li><a href="../multiLevel_dashboard.php" class="fw-normal">Dashboard</a></li>
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
                                <!-- Profile Page -->
                                <!-- ============================================================== -->
                                <!-- Row -->
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col-lg-12 col-xlg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="form-horizontal form-material">
                                                    <div class="form-group mb-4">
                                                        <label class="col-md-12 p-0">ID Student</label>
                                                        <div class="col-md-12 border-bottom p-0">
                                                            <div class="form-control p-0 border-0">
                                                                <?php echo $id_student; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="col-md-12 p-0">Nama</label>
                                                        <div class="col-md-12 border-bottom p-0">
                                                            <div class="form-control p-0 border-0">
                                                                <?php echo $nama; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="example-email" class="col-md-12 p-0">Bahasa Indonesia</label>
                                                        <div class="col-md-12 border-bottom p-0">
                                                            <div class="form-control p-0 border-0">
                                                                <?php echo $bahasaIndonesia; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="col-md-12 p-0">Matematika</label>
                                                        <div class="col-md-12 border-bottom p-0">
                                                            <div class="form-control p-0 border-0">
                                                                <?php echo $matematika; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="col-md-12 p-0">Fisika</label>
                                                        <div class="col-md-12 border-bottom p-0">
                                                            <div class="form-control p-0 border-0">
                                                                <?php echo $fisika; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <!-- Row -->
                                <!-- ============================================================== -->
                                <!-- End PAge Content -->
                                <!-- ============================================================== -->
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
                    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
                    <!-- Bootstrap tether Core JavaScript -->
                    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="../js/app-style-switcher.js"></script>
                    <!--Wave Effects -->
                    <script src="../js/waves.js"></script>
                    <!--Menu sidebar -->
                    <script src="../js/sidebarmenu.js"></script>
                    <!--Custom JavaScript -->
                    <script src="../js/custom.js"></script>

                <?php
                }
                else{
                    echo "<script>alert('Data gagal disimpan');window.location='../html/multiLevel_404.html'</script>";
                }
            }
            ?>
    </body>

    </html>
<?php
    }else {echo "<script>alert('Data gagal disimpan');window.location='../html/multiLevel_404.html'</script>";}    
?>