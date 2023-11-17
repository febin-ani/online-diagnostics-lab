<?php
include_once('constant/securityhome.php');

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    echo $id;
    
    $sql = "DELETE FROM `tb_appointment_list` WHERE apt_id='" . $id . "'";
    
    if (mysqli_query($conn, $sql)) {
        header('location: view.php');
    } else {
        echo "Error deleting appointment record: " . mysqli_error($conn);
    }
}