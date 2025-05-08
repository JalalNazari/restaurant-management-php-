<?php
$page = "create";

include '../html/header.php';
if($_SESSION['sys_user']['position'] !== 'manager'){
    header("location:../404.php");
}
if (isset($_GET['task']) && $_GET['task'] === 'delete') {
    deleteMenuitem($conn, $_GET['id']);
}

$msg = '';
if (isset($_GET['msg'])) {
     $_GET['msg'] = $msg;
}

$items = getMenuitems($conn);
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

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Menu Table</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($items as $item) { ?>
                                    <tr>
                                        <td><?php echo $item['id'] ?></td>
                                        <td><?php echo $item['name'] ?></td>
                                        <td><?php echo $item['description'] ?></td>
                                        <td><?php echo $item['category'] ?></td>
                                        <td>
                                            <img src="<?php echo '../../assets/img/menu/' . $item['image'] ?>" width="100px" alt="">
                                        </td>
                                        <td><?php echo $item['price'] ?></td>

                                        <td>
                                            <a href="editmenu.php?id=<?php echo $item['id']?>">Edit</a>
                                            <a href="menutable.php?id=<?php echo $item['id']?>&task=delete">Delete</a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
<!-- -->
    </div>
    <!-- End of Main Content -->

    <?php include '../html/footer_1.php' ?>
    <?php include '../html/footer.php' ?>