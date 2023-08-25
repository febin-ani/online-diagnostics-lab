<?php

include('../constant/security.php');

    
if (isset($_POST['login'])){

    $login_email=$_POST['login_email'];
    $login_pass=$_POST['login_pass'];

    $sql = "SELECT * FROM tb_aregister WHERE aemail='$login_email' AND apass='$login_pass' ";
    $query = mysqli_query($conn,$sql);

    if(mysqli_fetch_array($query)) {
        // echo "Saved";
        $_SESSION['auname'] = $login_email;
        header('Location:../index.php');
    } else {
        $_SESSION['status'] = "Email Id / Password is Invalid";
        header('Location:../login.php');  
    }
}

?>