<?php
$page = "create";

include '../html/header.php';
if (isset($_POST['next'])) {
  createOrder($conn, $_POST['customer-name'], $_SESSION['sys_user']['id'],$_POST['time']);
}

if (isset($_GET['task']) && $_GET['task'] === 'logout') {
  session_destroy();
  header('location:../login.php');
}


?>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include '../html/sidebar.php' ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include '../html/navbar.php' ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <form class="user" action="order.php" method="POST" enctype="multipart/form-data" style="width: 70%; margin: auto;">

        <div class="form-group">
          <input type="text" class="form-control form-control-user" placeholder="Customer Name" name="customer-name">
        </div>
        <div class="form-group">
          <input type="datetime-local" class="form-control form-control-user" placeholder="time" name="time">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-user btn-block" value="Next" name="next">
        </div>
        
      </form>


    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <?php include '../html/footer_1.php' ?>
  <?php include '../html/footer.php' ?>