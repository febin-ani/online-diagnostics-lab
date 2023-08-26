<?php
include_once('../constant/config.php');

$sql = "DELETE FROM tb_test WHERE test_id='" . $_GET["test_id"] . "'";

if (mysqli_query($conn, $sql)) {
    header('location:../managetest.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>