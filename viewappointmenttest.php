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
                  FROM tb_appointment s
                  INNER JOIN tb_test cu  
                  ON cu.test_id = s.test_id 
                  INNER JOIN tb_appointment_list AS ci
                  ON ci.code = s.apt_code WHERE ci.user_id = $id;";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // Output data of each row

            while ($row = $result->fetch_assoc()) {

              echo '<tr class="text-center">';
              echo '<td class="nn">' . $row["apt_code"] . '</td>';
              // echo '<td>' . 
              //   . '</td>';
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