<?php 
	include('constant/security.php');
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment Details</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <table class="table">
            <thead>
              <tr class="text-center ">
                <th scope="col">Appointment Code</th>
                <th scope="col">User Name</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Tests Name</th>
                <th scope="col">Appointment Date & Time</th>
                <th scope="col">Prescription</th>
                <th scope="col">Status</th>
                <th scope="col">DELETE</th>
                <th scope="col">ACTION</th>
               
              </tr>
            </thead>
            <tbody>

            <?php
              // Retrieve appointment data from tb_appointment_list table
              $sql = "SELECT 
                          al.*,u.*,
                          GROUP_CONCAT(DISTINCT t.test_name ORDER BY t.test_id) AS testNames
                          FROM
                              tb_appointment_list AS al
                          LEFT JOIN
                              tb_appointment AS a ON al.code = a.apt_code
                          LEFT JOIN
                              tb_test AS t ON a.test_id = t.test_id
                          LEFT JOIN
                              tb_user AS u ON al.user_id = u.id
                          GROUP BY al.code";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<tr class="text-center ">';
                  echo '<td>' . $row["code"] . '</td>';
                  echo '<td>' . $row["username"] . '</td>';
                  echo '<td>' . $row["name"] . '</td>';
                  echo '<td>' . $row["testNames"] . '</td>';
                  echo '<td>' . $row["schedule"] . '</td>';
                  // Prescription
                  echo "<td>" ?> 
                  <?php
                  $pres=$row["pres"];
                  if($pres!==""){
                  ?>
                    <a class="d-flex justify-content-center link-dark" href=<?php echo "../assets/upload/".$row["pres"]; ?> >  <i class="ri-eye-fill"></i></a>
                  <?php
                  } else {
                  ?>
                    <i  class="ri-eye-off-fill d-flex justify-content-center "></i>
                  <?php
                  }
                  "</td>";
                  // Status
                  echo "<td>" ?>                 
                  <?php
                  $status=$row['status'];
                  if($status==0){
                    ?>
                    Pending
                    <?php
                  } elseif($status==1) {
                    ?>
                    Approved
                    <?php
                  } else {
                    ?>
                    Completed
                    <?php
                  }
                  ?>
                  <?php "</td>";

                  echo "<td>";
                  ?>
                    
                    <button class="btn btn-danger btn-sm">
                      <a class="link-light" href="delete.php?apt_id=<?php echo $row["apt_id"]; ?>">Canceled</a>
                    </button>
                  
                  <?php "</td>";

                    echo "<td>";
                    $status=$row['status'];
                    if($status==0){
                  ?>

                  <button class="btn btn-primary btn-sm">
                    <a class="link-light" href="update.php?apt_id=<?php echo $row["apt_id"]; ?>">Approve</a>
                  </button>
                
                  <?php
                    } elseif($status==1) {
                  ?>

                  <button class="btn btn-success btn-sm">
                    <a class="link-light" href="update.php?apt_id=<?php echo $row["apt_id"]; ?>">Complete</a>
                  </button>

                  <?php
                    } else {
                  ?>

                  <button class="btn btn-warning btn-sm">
                    <a class="link-light" href="result.php?apt_id=<?php echo $row["apt_id"]; ?>">Result</a>
                  </button>

                  <?php
                    }
                  echo "</td>";

                  echo "</tr>";
                }
              } else { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo 'No Records Found' ?>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                  <?php
              }
            ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php
include('constant/scripts.php');
include('constant/footer.php');
?>