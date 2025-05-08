<?php
$page = "tables";

include 'html/header.php';
include 'html/404.php';
if (isset($_GET['task']) && $_GET['task'] === 'delete') {
    deleteUser($conn, $_GET['id']);
}

$msg = '';
if (isset($_GET['msg'])) {
     $_GET['msg'] = $msg;
}

$users = getUsers($conn);
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'html/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <?php include 'html/navbar.php' ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Users Table</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($users as $user) { ?>
                                    <tr>
                                        <td><?php echo $user['id'] ?></td>
                                        <td><?php echo $user['name'] ?></td>
                                        <td><?php echo $user['email'] ?></td>
                                        <td><?php echo $user['position'] ?></td>
                                        <!-- <td>
                                            <img src="<?php echo 'img/users/' . $user['image'] ?>" width="100px" alt="">
                                        </td> -->
                                        <td>
                                            <a href="edit.php?id=<?php echo $user['id']?>">Edit</a>
                                            <a href="tables.php?id=<?php echo $user['id']?>&task=delete">Delete</a>

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

    <?php include 'html/footer_1.php' ?>
    <?php include 'html/footer.php' ?>