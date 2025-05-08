<?php

// Users section Begin 

// register the users in the Users' relation

function registerUser($conn, $name, $email, $password, $position)
{

  // $target_dir = "img/users/";
  // $image_name = basename($image['name']);
  // $target_file = $target_dir . $image_name;
  // move_uploaded_file($image["tmp_name"], $target_file);

  $password = md5(sha1($password));

  $sql = "INSERT INTO users VALUE('','$name','$email','$password','$position')";

  $conn->query($sql);
}



function login($conn, $email, $password)
{

  $password = md5(sha1($password));


  $sql_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $data = "";

  $user = $conn->query($sql_query);


 

  
  if ($user->num_rows == 1) {
    
        while ($u = $user->fetch_assoc()) {
          $data = $u;
        }
    
        $_SESSION['sys_user']['id'] = $data['id'];
        $_SESSION['sys_user']['position'] = $data['position'];

        header('location:index.php');
      } else {
        header('location:login.php');
      }
}



//show users in the tables

function getUsers($conn){
  $sql = "SELECT * FROM users";

  $usersTable = $conn->query($sql);

  $data = [];

  while($d = $usersTable->fetch_assoc()) {
    $data[] = $d;
  }

  return $data;
}

// edit the user information

function getUser($conn, $id){
  $sql = "SELECT * FROM users WHERE id = '$id'";

  $user = $conn->query($sql);
  
  $data = '';
  while($u = $user->fetch_assoc()){
    $data = $u;
  }

  return $data;
}

//update the user information 

function updateUser($conn,$id,$name,$email,$password,$position){
  // $target_dir = "img/users/";
  // $image_name = basename($image['name']);
  // $target_file = $target_dir . $image_name;
  // move_uploaded_file($image["tmp_name"], $target_file);

  $password = md5(sha1($password));

  $sql = "UPDATE users SET name = '$name',email = '$email',password ='$password', position = '$position' WHERE id = '$id'";

  if($conn->query($sql)){
    header('location:tables.php');
  }
}

//delete user from dataBase

function deleteUser($conn,$id){
  $sql = "DELETE FROM users WHERE id = '$id'";

  if ($conn->query($sql)){
    header('location:tables.php?msg=User Record Deleted Successfully');
  }else{
    header('location:tables.php?msg=wrong');
  }
}

// Users Section End

// Worker Section Begin


function registerWorker($conn, $fname, $lname,$position, $number )
{
  $sql = "INSERT INTO workers VALUE('','$fname','$lname','$position','$number')";

  $conn->query($sql);
}

function getWorkers($conn){
  $sql = "SELECT * FROM workers";

  $workersTable = $conn->query($sql);

  $data = [];

  while($d = $workersTable->fetch_assoc()) {
    $data[] = $d;
  }

  return $data;
}

function getworker($conn, $id){
  $sql = "SELECT * FROM workers WHERE id = '$id'";

  $worker = $conn->query($sql);
  
  $data = '';
  while($u = $worker->fetch_assoc()){
    $data = $u;
  }

  return $data;
}

function updateWorker($conn,$id,$fname,$lname,$position,$number){

  $sql = "UPDATE workers SET firstname = '$fname',lastname = '$lname',position ='$position', number = '$number' WHERE id = '$id'";

  if($conn->query($sql)){
    header('location:workerstable.php');
  }
}

function deleteWorker($conn,$id){
  $sql = "DELETE FROM workers WHERE id = '$id'";

  if ($conn->query($sql)){
    header('location:workerstable.php?msg=Worker Record Deleted Successfully');
  }else{
    header('location:workertable.php?msg=wrong');
  }
}
// Worker Section End


// Menu Items Begin

function createMenu($conn, $name, $description, $category, $image, $price)
{
  $target_dir = "../../assets/img/menu/";
  $image_name = basename($image['name']);
  $target_file = $target_dir . $image_name;
  move_uploaded_file($image["tmp_name"], $target_file);

  $q = "INSERT INTO menuitems VALUES('','$name','$description','$category','$image_name','$price')";
  // print_r($user_id);
  if($conn->query($q)){
    header('location:../menu/index.php');
  }
}

function getMenuitems($conn){
  $sql = "SELECT * FROM menuitems";

  $menuTable = $conn->query($sql);

  $data = [];

  while($d = $menuTable->fetch_assoc()) {
    $data[] = $d;
  }

  return $data;
}

function getMenuitem($conn, $id){
  $sql = "SELECT * FROM menuitems WHERE id = '$id'";

  $item = $conn->query($sql);
  
  $data = '';
  while($u = $item->fetch_assoc()){
    $data = $u;
  }

  return $data;
}

function updateMenuitem($conn,$id,$name,$description,$category,$image,$price){
  $target_dir = "../../assets/img/menu/";
  $image_name = basename($image['name']);
  $target_file = $target_dir . $image_name;
  move_uploaded_file($image["tmp_name"], $target_file);

  $sql = "UPDATE menuitems SET name = '$name',description = '$description',category ='$category',image = '$image_name',price = $price WHERE id = '$id'";

  if($conn->query($sql)){
    header('location:menutable.php');
  }
}

function deleteMenuitem($conn,$id){
  $sql = "DELETE FROM menuitems WHERE id = '$id'";

  if ($conn->query($sql)){
    header('location:menutable.php?msg=Menu Record Deleted Successfully');
  }else{
    header('location:menutable.php?msg=wrong');
  }
}
// Menu Items End

// Orders Begin


function createOrder($conn, $customer_name, $user_id, 
$time)
{

  $q = "INSERT INTO orders VALUES('','$customer_name','$user_id','$time','')";


  $conn->query($q);
  $order_id = $conn->insert_id;
  $_SESSION['order_id'] = $order_id;
  header("location:orderitems.php");
  // ?order_id=$order_id
}
function createOrderItems($conn, $order_id, $item_id, 
$quantity)
{

  $q = "INSERT INTO orderitems VALUES('','$order_id','$item_id','$quantity')";


  $conn->query($q);
  // $order_id = $conn->insert_id;
  // header("location:orderitems.php");
}

function getAllOrders($conn){

  $q = "SELECT oi.*, o.customer_name as customername, o.user_id as userid, o.date as datee, o.total as total_value FROM orderitems AS oi JOIN orders AS o ON oi.order_id=o.id ORDER BY o.id DESC";

  $orders = $conn->query($q);

  $data = [];

  while($o = $orders->fetch_assoc()) {
    $data[] = $o;
  }

  return $data;

}
function getAllItems($conn){

  $q = "SELECT oi.*, m.name as itemname, m.price as itemprice FROM orderitems AS oi JOIN menuitems AS m ON oi.item_id=m.id";

  $items = $conn->query($q);

  $data = [];

  while($i = $items->fetch_assoc()) {
    $data[] = $i;
  }

  return $data;

}
// Orders End


//files addressing function
function address($page){
  if ($page == 'menu' || $page == 'create'){echo "../";}
}


// add active class 

function style($page, $name){
  if ($page == $name){echo 'active';}
}

function style_show($page, $name){
  if ($page == $name){echo 'show';}
}






function getAllPosts($conn){

    $q = "SELECT p.*, u.name as username, u.image as userimage FROM posts AS p JOIN users AS u ON p.user_id=u.id ORDER BY p.id DESC";

    $posts = $conn->query($q);

    $data = [];
  
    while($d = $posts->fetch_assoc()) {
      $data[] = $d;
    }
  
    return $data;

}



function getPost($conn, $id){

  $q = "SELECT p.*, u.name as username, u.image as userimage FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.id = '$id'";

  $posts = $conn->query($q);

  $data = "";

  while($d = $posts->fetch_assoc()) {
    $data = $d;
  }

  return $data;

}