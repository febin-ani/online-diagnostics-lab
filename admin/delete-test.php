<?php
include_once('constant/security.php');

$sql = "DELETE FROM tb_test WHERE test_id='" . $_GET["test_id"] . "'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "Test Deleted";
    $_SESSION['status_code'] = "success";
    header('location:managetest.php');
} else {
    $_SESSION['status'] = "Test Not Deleted ";
    $_SESSION['status_code'] = "error";
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>