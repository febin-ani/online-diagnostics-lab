<?php
include('../constant/config.php');


if (isset($_POST['register'])) {
    $auname=$_POST['auname'];
    $aemail=$_POST['aemail'];
    $apass=$_POST['apass'];
    $cpass=$_POST['cpass'];

    $email_query = "SELECT * FROM `tb_aregister` WHERE aemail='$aemail' ";
    $run = mysqli_query($conn, $email_query);
    if(mysqli_num_rows($run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location:../register.php');  
    }
    else
    {
        if($apass === $cpass){
            $sql="INSERT INTO `tb_aregister`(`auname`,`aemail`,`apass`)
            VALUES('$auname','$aemail','$apass')";

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

