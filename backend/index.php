<?php
$page = "index";

include 'html/header.php';
include 'html/404.php';

if (!isset($_SESSION['sys_user'])) {
    header('location:login.php');
}


?>




<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       

            <!-- Sidebar - Brand -->
            <?php include 'html/sidebar.php' ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <?php include 'html/navbar.php' ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
                <div class="container bg-white">
                    <div class="copyright text-center">
                        <h1>Welcome Back!</h1>
                    </div>
                </div>

    </div>
    <!-- End of Main Content -->

    <?php include 'html/footer_1.php' ?>
    <?php include 'html/footer.php' ?>