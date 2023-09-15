<?php 
	include('constant/security.php');
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Appointment Details</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Appointment Code</th>
                <th scope="col">User Name</th>
                <th scope="col">Tests Name</th>
                <th scope="col">Appointment Date</th>
                <th scope="col">Status</th>
                <th scope="col">UPDATE | DELETE</th>
              </tr>
            </thead>
            <tbody>

            <?php
              // Retrieve appointment data from tb_appointment_list table
              $sql = "SELECT 
                          al.code AS appointment_code,
                          u.username AS user_name,
                          t.test_name AS test_name,
                          al.schedule, al.status ,al.apt_id
                      FROM
                          tb_appointment_list al
                      JOIN
                          tb_user u ON al.user_id = u.id
                      JOIN
                          tb_test t ON al.test_id = t.test_id;";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<tr>';
                  echo '<td>' . $row["appointment_code"] . '</td>';
                  echo '<td>' . $row["user_name"] . '</td>';
                  echo '<td>' . $row["test_name"] . '</td>';
                  echo '<td>' . $row["schedule"] . '</td>';
                  echo "<td>" . $row['status'] . "</td>";

                  echo "<td>";
                    ?>
                    <button class="btn btn-success btn-sm">
                      <a class="link-light" href="update.php?apt_id=<?php echo $row["apt_id"]; ?>">UPDATE</a>
                    </button>
                    
                    <button class="btn btn-danger btn-sm">
                      <a class="link-light" href="delete.php?apt_id=<?php echo $row["apt_id"]; ?>">DELETE</a>
                    </button>
                    <?php
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