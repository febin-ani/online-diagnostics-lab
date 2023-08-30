<?php
session_start();

include('admin/constant/config.php');

if(!$_SESSION['username']){

    header('location:admin/login.php');
} 

if (isset($_SESSION['usertype']) && $_SESSION['usertype'] != 'user'){
    $_SESSION['status'] = "Access Denied!"; 
    $_SESSION['status_code'] = "error";
    header('location:admin/login.php');
}

?>