<?php

// Function to generate the next appointment code
function generateAppointmentCode($apt_id) {
    return "APT" . str_pad($apt_id, 5, '0', STR_PAD_LEFT);
}

?>
