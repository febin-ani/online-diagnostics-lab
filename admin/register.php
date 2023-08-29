<?php 
	include('constant/security.php');
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<main id="main" class="main">

<!-- Modal -->
  <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="addadminprofile" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addadminprofile">Add Admin Data</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="php-action/addadminaction.php" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label> Username </label>
              <input type="text" name="auname" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="aemail" class="form-control checking_email" placeholder="Enter Email">
              <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="apass" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
            </div>
            <input type="hidden" name="usertype" value="admin">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="register" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>


    <div class="pagetitle">
      <h1>View Admin Details</h1>
      <!-- Button trigger modal -->
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addadminprofile">
            Add Admin Profile
        </button>  
      </div>
    </div><!-- End Page Title -->
    
    <?php
      if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
        echo '<h6 class="text-danger"> '.$_SESSION["status"].' </h6>';
        unset($_SESSION['status']);
      }
    ?>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">    
          <table class="table">
            <thead>
              <tr>
                <!-- <th scope="col">Test ID</th> -->
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th scope="col">UPDATE</th>
                <th scope="col">DELETE</th>
              </tr>
            </thead>
            <tbody>

            <?php

              $res=mysqli_query($conn,"SELECT * FROM `tb_aregister`");
              
              if (mysqli_num_rows($res) > 0 ) {
                  while($row=mysqli_fetch_array($res)){
                      echo "<tr>";
                      // echo "<td>".$row['aid']."</td>";
                      echo "<td>".$row['auname']."</td>";
                      echo "<td>".$row['aemail']."</td>";
                      echo "<td>".$row['apass']."</td>";
                      echo "<td>".$row['usertype']."</td>";
                      echo "<td>";
                      ?>
                        <button type="submit" class="btn btn-success btn-sm" name = "user_update">
                          <a class="link-light" href="update_admin.php?aid=<?php echo $row["aid"]; ?>">
                          UPDATE
                        </button>
                      <?php 
                        echo "</td>";

                        echo "<td>";
                      ?>
                        <button class="btn btn-danger btn-sm" name = "user_delete">
                        <a class="link-light" href="delete_admin.php?aid=<?php echo $row["aid"]; ?>">DELETE
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