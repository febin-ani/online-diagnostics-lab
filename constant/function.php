<?php

// Function to generate the next appointment code
function generateAppointmentCode($conn) {
    $sql = "SELECT MAX(code) AS max_code FROM tb_appointment_list";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $max_code = $row['max_code'];

    if ($max_code) {
        $next_code = intval(substr($max_code, 3)) + 1;
    } else {
        $next_code = 1;
    }

    return "APT" . str_pad($next_code, 5, '0', STR_PAD_LEFT);
}

?>
