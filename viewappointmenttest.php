<?php 
  include('constant/securityhome.php');
  include('constant/topbar.php');
  include('constant/header.php');
?>

  <section class="section">
    
    <div class="row">
        <div class="col-lg-12 mt-5">

    
        <h1 class="text-center fs-5 mt-3 fw-bold">View Appointment Details</h1>

        <table class="table">
        <thead>
            <tr class="text-center ">
            <th scope="col">Appointment Code</th>
            <th scope="col">Tests Name</th>
            <th scope="col">Appointment Date & Time</th>
            <th scope="col">Prescription</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

        <?php
          $id = $_SESSION['id'];

          $sql = "SELECT
                      al.*,
                      GROUP_CONCAT(DISTINCT t.test_name ORDER BY t.test_id) AS test_names
                  FROM
                      tb_appointment_list AS al
                  LEFT JOIN
                      tb_appointment AS a ON al.code = a.apt_code
                  LEFT JOIN
                      tb_test AS t ON a.test_id = t.test_id
                  WHERE
                      al.user_id = $id
                  GROUP BY al.code
                  ORDER BY al.schedule";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // Output data of each row

            while ($row = $result->fetch_assoc()) {

              echo '<tr class="text-center">';
              echo '<td>' . $row["code"] . '</td>';
              echo '<td>' . $row["test_names"] . '</td>'; 
              echo '<td>' . $row["schedule"] . '</td>';
              // Prescription
              echo "<td>" ?> 
              <?php
              $pres=$row["pres"];
              if($pres!==""){
              ?>
                <a class="d-flex justify-content-center link-dark" href=<?php echo "assets/upload/".$row["pres"]; ?> >  <i class="ri-eye-fill"></i></a>
              <?php
              } else {
              ?>
                <i  class="ri-eye-off-fill d-flex justify-content-center "></i>
              <?php
              }
              "</td>";

              echo '<td>' . $row["price"] . '</td>';

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
                "</td>";
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
