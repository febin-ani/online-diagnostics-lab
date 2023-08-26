<?php
session_start();

include('config.php');

if(!$_SESSION['auname']){

    header('location:admin/login.php');
} 
else {
    $_SESSION['role'] = 'user';
}
?>