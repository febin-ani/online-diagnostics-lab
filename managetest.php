<?php 
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Test Details</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <table class="table">
            <thead>
              <tr>
                <!-- <th scope="col">Test ID</th> -->
                <th scope="col">Test Name</th>
                <th scope="col">Test Description</th>
                <th scope="col">Price</th>
                <th scope="col">UPDATE</th>
                <th scope="col">DELETE</th>
              </tr>
            </thead>
            <tbody>

            <?php
              include('constant/config.php');

              $res=mysqli_query($conn,"SELECT * FROM `tb_test`");
              
              if (mysqli_num_rows($res) > 0 ) {
                  while($row=mysqli_fetch_array($res)){
                      echo "<tr>";
                      // echo "<td>".$row['test_id']."</td>";
                      echo "<td>".$row['test_name']."</td>";
                      echo "<td>".$row['test_desc']."</td>";
                      echo "<td>".'$'.$row['price']."</td>";
                      echo "<td>";
                      ?>
                      <button  class="btn btn-success btn-sm">
                        <a class="link-light" href="modify/update-test.php?test_id=<?php echo $row["test_id"]; ?>">UPDATE</button>
                      <?php
                      echo "</td>";

                      echo "<td>";
                      ?>
                      <button class="btn btn-danger btn-sm">
                        <a class="link-light" href="modify/delete-test.php?test_id=<?php echo $row["test_id"]; ?>">DELETE</button>
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