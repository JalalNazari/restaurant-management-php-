<?php
$page = 'createemployee';

include 'html/header.php';
include 'html/404.php';
if (isset($_POST['register'])) {
    registerWorker($conn, $_POST['fname'], $_POST['lname'], $_POST['position'], $_POST['number']);
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
                                <h1 class="h4 text-gray-900 mb-4">Register Employees!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="fname">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Last Name" name="lname">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="number" name="number">
                                </div>

                                <div class="form-group">
                                <select style="height: 90%; padding: 13px; width: 100%;" class="form-control form-control-user" id="exampleInputPassword" name="position" required>
                                        <option value="" selected disabled>Choose a position</option>
                                        <option value="chef">Chef</option>
                                        <option value="waiter">Waiter</option>
                                        <option value="chefassistant">Chef Assistant</option>
                                        <option value="dishwasher">Dish Washer</option>
                                        <option value="cleaner">Cleaner</option>



                                    </select>

                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Worker" name="register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include 'html/footer.php' ?>