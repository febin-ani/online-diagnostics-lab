

<?php
include('../constant/securityhome.php');

if (isset($_POST['create_appointment'])) {
    include_once '../constant/function.php';

    // Get the ID of the logged-in user
    $user_id = $_SESSION['id'];
    $schedule = $_POST['schedule'];
    $test_id = $_POST['test_id'];
    $pres = $_FILES['pres']['name'];

    // Insert a new appointment record into tb_appointment_list
    $sql = "INSERT INTO tb_appointment_list (test_id, user_id, schedule, pres) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $test_id, $user_id, $schedule, $pres);

    if ($stmt->execute()) {
        // Generate the appointment code based on the auto-incremented apt_id
        $appointment_id = $stmt->insert_id;
        $appointment_code = generateAppointmentCode($appointment_id);

        // Update the appointment record with the generated code
        $update_sql = "UPDATE tb_appointment_list SET code = ? WHERE apt_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("si", $appointment_code, $appointment_id);
        $update_stmt->execute();

        // Move the uploaded file
        move_uploaded_file($_FILES['pres']['tmp_name'], "../assets/upload/" . $pres);

        $_SESSION['status'] = "Appointment Added";
        $_SESSION['status_code'] = "success";
        header('Location:../viewappointment.php');
    } else {
        $_SESSION['status'] = "Appointment Not Added";
        $_SESSION['status_code'] = "error";
        header('Location:../appointment.php');
    }
    $stmt->close(); // Close the prepared statement
    $update_stmt->close(); // Close the update prepared statement
}

$conn->close(); // Close the database connection
?>
