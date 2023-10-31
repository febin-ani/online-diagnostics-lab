<?php 
	include('constant/security.php');
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<main id="main" class="main">

  <!-- Modal -->
  <div class="modal fade" id="addprofile" tabindex="-1" role="dialog" aria-labelledby="addprofile" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addprofile">Add User Data</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="php-action/useraction.php" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label> Username </label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
              <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="pass" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
              <label>Role</label>
              <select name="usertype" class="form-control">
                <option selected>Select Role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <!-- <input type="hidden" name="usertype" value="user"> -->
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
      <h1>Users Details</h1>
      <!-- Button trigger modal -->
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addprofile">
            Add Profile
        </button>  
      </div>
    </div><!-- End Page Title -->




    <section class="section">
      <div class="row">
        <div class="col-lg-12">    
          <table class="table">
            <thead>
              <tr class="text-center">
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

              $res=mysqli_query($conn,"SELECT * FROM `tb_user`");
              
              if (mysqli_num_rows($res) > 0 ) {
                  while($row=mysqli_fetch_array($res)){
                      echo "<tr class='text-center'>";
                      // echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['username']."</td>";
                      echo "<td>".$row['email']."</td>";
                      echo "<td>".$row['pass']."</td>";
                      echo "<td>".$row['usertype']."</td>";
                      echo "<td>";
                      ?>
                        <button class="btn btn-success btn-sm">
                          <a class="link-light" href="updateuser.php?id=<?php echo $row["id"]; ?>">UPDATE</a>
                        </button>
                      <?php 
                        echo "</td>";

                        echo "<td>";
                      ?>
                        <button class="btn btn-danger btn-sm" >
                          <a class="link-light" href="delete.php?id=<?php echo $row["id"]; ?>">DELETE
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