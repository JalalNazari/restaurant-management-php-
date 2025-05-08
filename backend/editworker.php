<?php
$page = 'register';

include 'html/header.php';
include 'html/404.php';
if (isset($_GET['id'])) {
    $worker = getWorker($conn, $_GET['id']);
}

if (isset($_POST['update'])) {
    updateWorker($conn, $_POST['id'], $_POST['lname'], $_POST['fname'], $_POST['position'], $_POST['number']);
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
                                <h1 class="h4 text-gray-900 mb-4">Update Workers Data!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" name="id" value="<?php echo $worker['id'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="fname" value="<?php echo $worker['firstname'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Last Name" name="lname" value="<?php echo $worker['lastname'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Number" name="number" value="<?php echo $worker['number'] ?>">
                                </div>
                                <div class="form-group">
                                <select style="height: 90%; padding: 13px; width: 100%;" class="form-control form-control-user" id="exampleInputPassword" name="position" required>
                                <option value="" disabled>Choose a position</option>
                                        <option value="<?php echo $worker['position'] ?>"><?php echo $worker['position'] ?></option>
                                        <option value="chef">Chef</option>
                                        <option value="waiter">Waiter</option>
                                        <option value="chefassistant">Chef Assistant</option>
                                        <option value="dishwasher">Dish Washer</option>
                                        <option value="cleaner">Cleaner</option>
                                    </select>


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