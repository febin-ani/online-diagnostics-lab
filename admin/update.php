<?php
include_once('constant/security.php');

if (isset($_GET["apt_id"])) {

    $apt_id = intval($_GET["apt_id"]);
    $status_sql = "SELECT * FROM tb_appointment_list"; 
    $query = mysqli_query($conn,$status_sql);
    while ($stat = $query->fetch_assoc()) {
        
        $status = $stat['status'];

        if($status=='0'){
            $sql = "UPDATE tb_appointment_list SET status = 1 WHERE apt_id='" . $apt_id . "'";
        } elseif($status=='1' AND $status!='0') {
            $sql = "UPDATE tb_appointment_list SET status = 2 WHERE apt_id='" . $apt_id . "'";
        } else {
            $sql = "SELECT * FROM tb_appointment_list ";  
        }
        if (mysqli_query($conn, $sql)) {
            $_SESSION['status'] = "Updated";
            $_SESSION['status_code'] = "success";
            header('location: appointment.php');
        } else {
            $_SESSION['status'] = "Not Updated";
            $_SESSION['status_code'] = "error";
            echo "Error updating status: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
