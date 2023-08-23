<?php
include('../constant/config.php');


if (isset($_POST['submit'])){
    $test_name=$_POST['test_name'];
    $test_desc=$_POST['test_desc'];
    $price=$_POST['price'];

    $sql="INSERT INTO `tb_test`(`test_name`,`test_desc`,`price`)
          VALUES('$test_name','$test_desc','$price')";

    $query=mysqli_query($conn,$sql);

    if ($query) {
    
    ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
    Test Added!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    <?php
    header('location:../addtest.php');

    }
}

?>

