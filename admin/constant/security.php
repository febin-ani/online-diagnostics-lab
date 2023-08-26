<?php
session_start();

include('config.php');

if(!$_SESSION['auname']){

    header('location:./login.php');
} 
else {
    $_SESSION['user'] = 'user';
    $_SESSION['admin'] = 'admin';
}
?>