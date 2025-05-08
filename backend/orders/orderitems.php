<?php
$page = "create";

include '../html/header.php';

$items = getMenuitems($conn);
//  $total = $_POST['quantity'] * $item['price']
// createOrder($conn, $_POST['custtomer_name'], $_SESSION['sys_user']['id'], $total);
if (isset($_SESSION['order_id'])) {
    $order_id = $_SESSION['order_id'];
}else{
    header('location:order.php');
}
if(isset($_POST['add'])){
    createOrderItems($conn, $order_id, $_POST['item_id'], $_POST['quantity']);

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

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Cards</h1>
            </div>



                <!-- Earnings (Monthly) Card Example -->
                <?php foreach($items as $item){ ?>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                            <form action="orderitems.php" method="POST">
                                <img src="<?php echo '../../assets/img/menu/' . $item['image'] ?>" width="100px" alt="">                               
                                
                                <!-- <input type="text" class="mb-1 form-control form-control-user" id="exampleFirstName" value="<?php echo $item['name'] ?>"> -->
                                    <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                    <?php echo $item['name'] ?></div>
                                    <!-- <input type="text" class="mb-1 form-control form-control-user" id="exampleFirstName" value="<?php echo $item['price'] ?>" > -->
                                    <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $item['price'] ?>$</div>
                                    <!-- <input type="text" class="mb-1 form-control form-control-user" id="exampleFirstName" value="<?php echo $order['id'] ?>"> -->
                                    <!-- <input type="text" class="mb-1 form-control form-control-user" id="exampleFirstName" value="<?php echo $_['order_id'] ?>" name="order_id">    -->
                                    <input type="text" hidden class="mb-1 form-control form-control-user" id="exampleFirstName"  value="<?php echo $item['id'] ?>" name="item_id">                                    
                                        <input type="number" class="mb-1 form-control form-control-user" id="exampleFirstName" placeholder="Quantity" name="quantity"> 
                                        <input type="submit" class="btn btn-primary btn-user btn-block"  value="Add" name="add">                                       
                                 </form>
                                        <!-- <input type="submit" class="btn btn-primary btn-user btn-block"  value="Add" name="register">                                       
                                    </form> -->

                                    
                                </div>
                                <!-- <div class="col-auto">
                                    <i class="fas fa-plus fa-2x text-gray-300"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                 <?php }  ?>
            
           
            <a href="orderstable.php" class="btn btn-primary btn-user btn-block" >Table</a>
             
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php include '../html/footer_1.php' ?>
    <?php include '../html/footer.php' ?>