<?php
include('constant/securityhome.php');
include('constant/topbar.php');
include('constant/header.php');
?>


<main id="main" class="main">
    <section class="section mt-5">
        <div class="row">
            <div class="mt-5 mx-auto col-10 col-md-8 col-lg-6">
                <form class="row g-3" method="POST" action="useraction-php/process_appointment.php" enctype="multipart/form-data">
                    <div class="text-center fs-4 ">
                        <h4>Make Appointment</h4>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="schedule" class="form-label">Appointment Date and Time:</label>
                        <input type="datetime-local" class="form-control" name="schedule" min="<?php echo date('Y-m-d\TH:i'); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="test_id" class="form-label">Select Diagnostic Tests:</label><br>
                        <?php
                        // Retrieve test data from the tb_test table
                        $sql = "SELECT test_id, test_name FROM tb_test";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $test_id = $row['test_id'];
                                $test_name = $row['test_name'];
                        ?>
                        <input type="checkbox" name="test[]" value=" <?php echo $test_id; ?>"> <?php echo $test_name; ?><br>
                        <?php
                            }
                        } else {
                            echo "Error fetching test data: " . mysqli_error($conn);
                        } ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="pres" class="form-label">Prescription</label>
                        <input type="file" class="form-control" name="pres">
                    </div>
                
                    <?php
                    if (isset($_SESSION['id'])) {

                    ?>
                        <button type="submit" class="btn btn-primary" name="create_appointment">Create Appointment</button>

                    <?php
                    } else {
                    ?>
                        <a href="admin/login.php" class="btn btn-primary" name="create_appointment">Create Appointment</a>
                    <?php
                        $_SESSION['success'] = "You Need Login to Continue";
                    }
                    ?>
                </form>
        </div>
        </div>
    </section>
</main>


<?php
include('constant/scripts.php');
include('constant/footer.php');
?>