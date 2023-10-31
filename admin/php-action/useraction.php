<?php
include('../constant/security.php');


if (isset($_POST['userregister'])) {
    $register_user=$_POST['register_user'];
    $register_email=$_POST['register_email'];
    $register_pass=$_POST['register_pass'];
    $register_cpass=$_POST['register_cpass'];
    $usertype=$_POST['usertype'];

    $email_query = "SELECT * FROM `tb_user` WHERE email='$register_email' ";
    $run = mysqli_query($conn, $email_query);
    if(mysqli_num_rows($run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location:../login.php');  
    } else {
        if($register_pass === $register_cpass){
            $sql="INSERT INTO `tb_user`(`username`,`email`,`pass`,`usertype`)
            VALUES('$register_user','$register_email','$register_pass','$usertype')";

            $query=mysqli_query($conn,$sql);

            if ($query) {
                // echo "Saved";
                $_SESSION['success'] = "User Profile Added! Please Login Here";
                header('Location:../login.php');
            }
            else 
            {
                $_SESSION['status'] = "User Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location:../userregister.php');  
            }
        } else {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location:../userregister.php');  
        }
    }
}

if (isset($_POST['register'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $usertype=$_POST['usertype'];

    $email_query = "SELECT * FROM `tb_user` WHERE email='$email' ";
    $run = mysqli_query($conn, $email_query);
    if(mysqli_num_rows($run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location:../register.php');  
    } else {
        if($pass === $cpass){
            $sql="INSERT INTO `tb_user`(`username`,`email`,`pass`,`usertype`)
            VALUES('$username','$email','$pass','$usertype')";

            $query=mysqli_query($conn,$sql);

            if ($query) {
                // echo "Saved";
                $_SESSION['status'] = "Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:../register.php');
            }
            else 
            {
                $_SESSION['status'] = "Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location:../register.php');  
            }
        } else {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location:../register.php');  
        }
    }
}


if (isset($_POST['update'])){

    $id = $_GET['id'];
    $uname=$_POST['uname'];
    $usertype=$_POST['usertype'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    if($pass === $cpass){
        $sql="UPDATE `tb_user` SET `username`='$uname',`pass`='$pass',`usertype`='$usertype' WHERE id = '$id'";

        $query=mysqli_query($conn,$sql);

        if ($query) {
            // echo "Saved";
            $_SESSION['success'] = "User Profile Updated";
            header('Location:../register.php');
        }
        else 
        {
            $_SESSION['status'] = "User Profile Not Updated";
            $_SESSION['status_code'] = "error";
            header('Location:../updateuser.php');  
        }
    } else {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        $_SESSION['status_code'] = "warning";
        header('Location:../updateuser.php');  
    }
}


?>

