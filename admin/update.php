<?php
include_once('constant/security.php');

if (isset($_GET["apt_id"])) {
    // For update admin records
    $apt_id = intval($_GET["apt_id"]);

    $sql = "UPDATE tb_appointment_list SET status = 1 WHERE apt_id='" . $apt_id . "'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Status Updated";
        $_SESSION['status_code'] = "success";
        header('location: appointment.php');
    } else {
        $_SESSION['status'] = "Status Not Updated";
        $_SESSION['status_code'] = "error";
        echo "Error updating status: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
