<?php
$page = 'create';

include '../html/header.php';
if($_SESSION['sys_user']['position'] !== 'manager'){
    header("location:../404.php");
}
if (isset($_GET['id'])) {
    $item = getMenuitem($conn, $_GET['id']);
}

if (isset($_POST['update'])) {
    updateMenuitem($conn, $_POST['id'], $_POST['name'], $_POST['description'], $_POST['category'], $_FILES['image'],$_POST['price']);
}
if (isset($_GET['task']) && $_GET['task'] === 'logout') {
    session_destroy();
    header('location:../login.php');
  }
?>




<body class="bg-gradient-primary">

    <div class="container">

        <div class="card  o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <!-- <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image" style="height: 100%;width: 50%;overflow: hidden; margin: 10% auto;padding:3rem;">

                    </div> -->
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Menu!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <div class="form-group">

                                    <input type="hidden" class="form-control form-control-user" id="exampleFirstName" placeholder="ID" name="id" value="<?php echo $item['id'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" name="name" value="<?php echo $item['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <textarea  cols="30" rows="10" class="form-control form-control-user" style="border-radius: 50px;" id="exampleInputEmail" placeholder="Description" name="description" ><?php echo $item['description'] ?></textarea>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Category" name="category" value="<?php echo $item['category'] ?>">
                                </div>
                                <div class="form-group">

                                    <input type="file" style="height: 90%; padding: 13px; width: 100%;" class="form-control form-control-user" id="exampleInputPassword" name="image" value="<?php echo $item['image'] ?>">

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Price" name="price" value="<?php echo $item['price'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Update User" name="update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include '../html/footer.php' ?>