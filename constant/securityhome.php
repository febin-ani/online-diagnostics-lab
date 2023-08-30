<?php
session_start();

include('admin/constant/config.php');

if(!$_SESSION['auname']){

    header('location:admin/login.php');
} 

if (isset($_SESSION['usertype']) && $_SESSION['usertype'] != 'user'){
    $_SESSION['access'] = "Access Denied!"; 
    header('location:admin/login.php');
}

?>