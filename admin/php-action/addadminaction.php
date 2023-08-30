<?php
include('../constant/security.php');


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
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:../register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
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
?>

