<?php
include('../constant/config.php');


if (isset($_POST['submit'])){
    $test_name=$_POST['test_name'];
    $test_desc=$_POST['test_desc'];
    $price=$_POST['price'];


    $name_query = "SELECT * FROM `tb_test` WHERE test_name='$test_name' ";
    $run = mysqli_query($conn, $name_query);
    if(mysqli_num_rows($run) > 0)
    {
        $_SESSION['status'] = "Test $test_name Already Added!";
        $_SESSION['status_code'] = "error";
        header('Location:../addtest.php');  
    } else {

        $sql="INSERT INTO `tb_test`(`test_name`,`test_desc`,`price`)
            VALUES('$test_name','$test_desc','$price')";

        $query=mysqli_query($conn,$sql);

        if ($query) {
            // echo "Saved";
            $_SESSION['status'] = "Test Added";
            $_SESSION['status_code'] = "success";
            header('Location:../managetest.php');
        }
        else 
        {
            $_SESSION['status'] = "Test Not Added";
            $_SESSION['status_code'] = "error";
            header('Location:../addtest.php');  
        }
    }
}

?>

