<?php
session_start();

include('admin/constant/config.php');

if(!$_SESSION['username']){

    header('location:admin/login.php');
} 

if (isset($_SESSION['usertype']) && $_SESSION['usertype'] != 'user'){
    header('location:admin/login.php');
}

?>