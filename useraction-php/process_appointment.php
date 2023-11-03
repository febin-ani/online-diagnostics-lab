

<?php
include('../constant/securityhome.php');

if (isset($_POST['create_appointment'])) {
    include_once '../constant/function.php';

    //get tests
    $test = $_POST['test'];
    // print_r($test);

    // Get the ID of the logged-in user
    $user_id = $_SESSION['id'];
    $schedule = $_POST['schedule'];
    // $test_id = $_POST['test_id'];
    $pres = $_FILES['pres']['name'];
    $date = new DateTime();
    $dateFormat = $date->format('Y-m-d H:i:s');


    // Insert a new appointment record into tb_appointment_list
    $sql = "INSERT INTO tb_appointment_list (user_id, schedule, pres, date_created) VALUES ( ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $user_id, $schedule, $pres, $dateFormat);

    if ($stmt->execute()) {
        // Generate the appointment code based on the auto-incremented apt_id
        $appointment_id = $stmt->insert_id;
        $appointment_code = generateAppointmentCode($appointment_id);

        // Update the appointment record with the generated code
        $update_sql = "UPDATE tb_appointment_list SET code = ? WHERE apt_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("si", $appointment_code, $appointment_id);
        $update_stmt->execute();

        $total = 0;
        foreach ($test as $value) {
            $sql = "SELECT price FROM tb_test WHERE test_id='$value' ";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $price = $row['price'];
            $total = $total + $price;

            // Inserting tests
            $sql = "INSERT INTO `tb_appointment`(`test_id`,`apt_code`) VALUES ('$value','$appointment_code') ";
            $res = mysqli_query($conn, $sql);
        }

        // Inserting Price
        $sql = "UPDATE `tb_appointment_list` SET price = '$total' WHERE apt_id='$appointment_id'";
        $res = mysqli_query($conn, $sql);

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
