<?php
session_start();

include('config.php');

if(!$_SESSION['auname']){

    header('location:./login.php');
} 

if (isset($_SESSION['usertype']) && $_SESSION['usertype'] != 'admin'){
    $_SESSION['access'] = "Access Denied!"; 
    header('location:../home.php');
}

?>

