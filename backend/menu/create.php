<?php
$page = "create";

include '../html/header.php';
if($_SESSION['sys_user']['position'] !== 'manager'){
  header("location:../404.php");
}
if (isset($_POST['save'])) {
  createMenu($conn, $_POST['menu-name'], $_POST['menu-description'],  $_POST['menu-category'], $_FILES['menu-image'], $_POST['menu-price']);
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

      <form class="user" action="create.php" method="POST" enctype="multipart/form-data" style="width: 70%; margin: auto;">
        <div class="form-group">
          <input type="file" class="form-control form-control-user" name="menu-image" style="height: 90%; padding: 13px; width: 100%;">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" placeholder="Menu Item Name" name="menu-name">
        </div>
        <div class="form-group">
          <textarea name="menu-description" class="form-control form-control-user" id="" cols="30" rows="10" placeholder="Menu Description" style="border-radius: 0;"></textarea>
        </div>

        <div class="form-group">
          <input type="text" class="form-control form-control-user" placeholder="Type a category" name="menu-category">
        </div>

        <div class="form-group">
          <input type="text" class="form-control form-control-user" name="menu-price" placeholder="Price">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-user btn-block" value="Save" name="save">
        </div>
      </form>


    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <?php include '../html/footer_1.php' ?>
  <?php include '../html/footer.php' ?>