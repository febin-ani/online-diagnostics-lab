<?php

include('../constant/security.php');

    
if (isset($_POST['login'])){

    $login_email=$_POST['login_email'];
    $login_pass=$_POST['login_pass'];

    $sql = "SELECT * FROM tb_user WHERE email='$login_email' AND pass='$login_pass' ";
    $query = mysqli_query($conn,$sql);

    $usertypes = mysqli_fetch_array($query);

    $usertype = $usertypes['usertype'];
    $user_id = $usertypes['id'];

    if($usertype == 'admin') {

        // echo "Saved";
        $_SESSION['username'] = $login_email;
        $_SESSION['id'] = $user_id;
        $_SESSION['usertype'] = $usertype;
        header('Location:../index.php');

    } elseif ($usertype == 'user') {
        
        $_SESSION['username'] = $login_email;
        $_SESSION['id'] = $user_id;
        $_SESSION['usertype'] = $usertype;
        header('Location:/online diagnostic lab/home.php');


    } 
    else {

        $_SESSION['status'] = "Email Id / Password is Invalid";
        $_SESSION['status_code'] = "error";
        header('Location:../login.php');  
    }
}



?>