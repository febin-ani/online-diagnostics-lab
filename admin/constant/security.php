<?php
session_start();

include('config.php');

if(!$_SESSION['username']){
    header('location:./../home.php');
} 

if (isset($_SESSION['usertype']) && $_SESSION['usertype'] != 'admin'){
    $_SESSION['status'] = "Access Denied for User!"; 
    $_SESSION['status_code'] = "error";
    // header('location:../../home.php');
}

?>

