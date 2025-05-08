<?php
$page = "create";

include '../html/header.php';

if (isset($_GET['task']) && $_GET['task'] === 'delete') {
    deleteMenuitem($conn, $_GET['id']);
}

$msg = '';
if (isset($_GET['msg'])) {
     $_GET['msg'] = $msg;
}

$menuitems = getAllItems($conn);
$items = getAllOrders($conn);



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
            <h1 class="h3 mb-2 text-gray-800">Orders Table</h1>


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
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Waiter</th>
                                    <th>Order Time</th>
                                    <th>Ordered Items</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Order ID</th>
                                    <th>Customer Name</th>
                                    
                                    <th>Waiter</th>
                                    <th>Order Time</th>
                                    <th>Ordered Items</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>                                   
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($items as $item) { ?>
                                    <tr>
                                        <td><?php echo $item['order_id'] ?></td>
                                        <td><?php echo $item['customername'] ?></td>
                                        <td><?php echo $item['userid'] ?></td>
                                        <td><?php echo $item['datee'] ?></td>
                                      
                                        <td><?php 
                                          echo $item['item_id']; 
                                         ?></td>
                                        <td>10$</td>
                                        
                                        <td><?php echo $item['quantity'] ?></td>
                                        <td><?php  ?></td>                                       
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