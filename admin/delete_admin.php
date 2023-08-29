<?php
include_once('constant/security.php');

$sql = "DELETE FROM tb_aregister WHERE aid='" . $_GET["aid"] . "'";

if (mysqli_query($conn, $sql)) {
    header('location:register.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>