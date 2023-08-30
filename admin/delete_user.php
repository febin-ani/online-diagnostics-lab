<?php
include_once('constant/security.php');

$sql = "DELETE FROM tb_user WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "User Deleted";
    $_SESSION['status_code'] = "success";
    header('location:register.php');
} else {
    $_SESSION['status'] = "User Not Deleted ";
    $_SESSION['status_code'] = "error";
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>