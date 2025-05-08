<?php

if($_SESSION['sys_user']['position'] !== 'manager'){
    header("location:404.php");
};
?>