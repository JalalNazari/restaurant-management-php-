<?php
$page = "tables";
include 'html/header.php';
include 'html/404.php';

if (isset($_GET['task']) && $_GET['task'] === 'delete') {
    deleteWorker($conn, $_GET['id']);
}

$msg = '';
if (isset($_GET['msg'])) {
     $_GET['msg'] = $msg;
}

$workers = getWorkers($conn);
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
            <h1 class="h3 mb-2 text-gray-800">Employees Table</h1>

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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Number</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Number</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($workers as $worker) { ?>
                                    <tr>
                                        <td><?php echo $worker['id'] ?></td>
                                        <td><?php echo $worker['firstname'] ?></td>
                                        <td><?php echo $worker['lastname'] ?></td>
                                        <td><?php echo $worker['number'] ?></td>
                                        <td><?php echo $worker['position'] ?></td>

                                        <td>
                                            <a href="editworker.php?id=<?php echo $worker['id']?>">Edit</a>
                                            <a href="workerstable.php?id=<?php echo $worker['id']?>&task=delete">Delete</a>

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