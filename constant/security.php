<?php
session_start();

include('config.php');

if(!$_SESSION['auname']){

    header('location:./login.php');
}

?>