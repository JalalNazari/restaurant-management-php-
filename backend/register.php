<?php
$page = "register";

include 'html/header.php';
include 'html/404.php';



if (isset($_POST['register'])) {
    registerUser($conn, $_POST['name'], $_POST['email'], $_POST['password'], $_POST['position']);
    header('location:login.php');
}




?>




<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <select style="height: 90%; padding: 13px; width: 100%;" class="form-control form-control-user" id="exampleInputPassword" name="position" required>
                                        <option value="" selected disabled>Choose a position</option>
                                        <option value="manager">Manager</option>
                                        <option value="waiter">Waiter</option>
                                    </select>
                                    <!-- <input type="text" style="height: 90%; padding: 13px; width: 100%;" class="form-control form-control-user" id="exampleInputPassword" name="image"> -->
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Register User" name="register">
                                </div>
                                <hr>
                                <a href="index.php?title=SB Admin 2 - Dashboard" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php?title=SB Admin 2 - Dashboard" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php?title=SB Admin 2 - Forgot Password">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php?title=SB Admin 2 - Login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include 'html/footer.php' ?>