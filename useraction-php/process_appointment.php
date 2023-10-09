
<?php
include('../constant/securityhome.php');


              
if (isset($_POST['create_appointment'])) {

    include_once '../constant/function.php';

    // Get the ID of the logged-in user
    $user_id = $_SESSION['id'];
    $schedule = $_POST['schedule'];
    $test_id = $_POST['test_id'];

    // Generate the appointment code
    $appointment_code = generateAppointmentCode($conn);

    // Insert a new appointment record into tb_appointment_list
    $sql = "INSERT INTO tb_appointment_list (test_id, user_id, code, schedule) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $test_id, $user_id, $appointment_code, $schedule );
    
    if ($stmt->execute()) {
        $_SESSION['status'] = "Appointment Added";
        $_SESSION['status_code'] = "success";
        header('Location:../viewappointment.php');
    } else {
        $_SESSION['status'] = "Appointment Not Added";
        $_SESSION['status_code'] = "error";
        header('Location:../appointment.php');  
    }
    $stmt->close(); // Close the prepared statement
}

$conn->close(); // Close the database connection
?>
