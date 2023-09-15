<?php
include_once('constant/security.php');

if (isset($_GET["id"])) {
    // For deleting admin records
    $id = intval($_GET["id"]);
    
    $sql = "DELETE FROM tb_admin WHERE id='" . $id . "'";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Admin Deleted";
        $_SESSION['status_code'] = "success";
        header('location: register.php');
    } else {
        $_SESSION['status'] = "Admin Not Deleted";
        $_SESSION['status_code'] = "error";
        echo "Error deleting admin record: " . mysqli_error($conn);
    }
} elseif (isset($_GET["test_id"])) {
    // For deleting test records
    $test_id = intval($_GET["test_id"]);
    
    $sql = "DELETE FROM tb_test WHERE test_id='" . $test_id . "'";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Test Deleted";
        $_SESSION['status_code'] = "success";
        header('location: managetest.php');
    } else {
        $_SESSION['status'] = "Test Not Deleted";
        $_SESSION['status_code'] = "error";
        echo "Error deleting test record: " . mysqli_error($conn);
    }
} elseif (isset($_GET["apt_id"])) {
    // For deleting appointment records
    $apt_id = intval($_GET["apt_id"]);
    
    $sql = "DELETE FROM tb_appointment_list WHERE apt_id='" . $apt_id . "'";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Appointment Deleted";
        $_SESSION['status_code'] = "success";
        header('location: appointment.php');
    } else {
        $_SESSION['status'] = "Appointment Not Deleted";
        $_SESSION['status_code'] = "error";
        echo "Error deleting appointment record: " . mysqli_error($conn);
    }
} else {
    
    // Handle the case when either of the isset is not provided
    $_SESSION['status'] = "ID not provided";
    $_SESSION['status_code'] = "error";
    header('location: index.php'); 
}

mysqli_close($conn);
?>

