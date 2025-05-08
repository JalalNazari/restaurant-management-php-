<?php
$page = 'register';

include 'html/header.php';
include 'html/404.php';
if (isset($_GET['id'])) {
    $user = getUser($conn, $_GET['id']);
}

if (isset($_POST['update'])) {
    updateUser($conn, $_POST['id'], $_POST['name'], $_POST['email'], $_POST['password'], $_POST['position']);
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
                                <h1 class="h4 text-gray-900 mb-4">Update User Data!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" name="id" value="<?php echo $user['id'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" name="name" value="<?php echo $user['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" value="<?php echo $user['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" value="<?php echo $user['password'] ?>">
                                </div>
                                <div class="form-group">
                                <select style="height: 90%; padding: 13px; width: 100%;" class="form-control form-control-user" id="exampleInputPassword" name="position" required>
                                        <option value="" selected disabled>Choose a position</option>
                                        <option value="manager">Manager</option>
                                        <option value="waiter">Waiter</option>
                                    </select>
                                    <!-- <input type="" style="height: 90%; padding: 13px; width: 100%;" class="form-control form-control-user" id="exampleInputPassword" name="image" value="<?php echo $user['image'] ?>"> -->

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

    <?php include 'html/footer.php' ?>