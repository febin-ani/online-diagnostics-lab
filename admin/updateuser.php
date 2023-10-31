<?php 
  include('constant/security.php');
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="mx-auto col-lg-6">
         <!-- Test Block -->
          <form class="row g-3" method="POST" action="php-action/useraction.php?id=<?php echo $_REQUEST['id'];?>">
            <?php
                $id = $_GET["id"];
                $sql="SELECT * FROM `tb_user` WHERE id='$id'";
              
                $res=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($res))
                {
            ?>
            <div class="card mb-4">
              <div class="card-header"><strong>Update User Profile</strong><span class="small ms-1"></span></div>
              <div class="card-body">
                <div class="example">
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1252">
                        <div class="mb-3">
                            <label class="form-label" for="test_name">Enter User Name</label>
                            <input class="form-control" id="test_name" name="uname" type="text" value="<?php echo $row['username']; ?>">
                        </div>

                        
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="usertype" class="form-control">
                                <option value="user" <?php if ($row['usertype'] === "user") echo "selected"; ?>>User</option>
                                <option value="admin" <?php if ($row['usertype'] === "admin") echo "selected"; ?>>Admin</option>
                            </select>
                        </div>
                       
                        <div class="mb-3">
                            <label class="form-label" for="pass">Enter New Password</label>
                            <input class="form-control" type="password" name="pass" id="passInput" value="<?php echo $row['pass']; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="cpass">Confirm New Password</label>
                            <input class="form-control" type="password" name="cpass" id="confirmPassInput" value="<?php echo $row['pass']; ?>">
                        </div>

                        <div class="mb-3">
                            <input style="margin-right: 5px;" type="checkbox" onclick="showPass()">Show Password
                        </div>
                    
                        <div class="col-auto">
                      
                            <button type="submit" class="btn btn-primary mb-3" name="update">Update</button>
                            <button type="reset" class="btn btn-danger mb-3" name="cancel">Cancel</button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <?php
                }
            ?>
          </form><!-- Test Block End -->
        </div>
      </div>
    </section>

<script>
    function showPass() {
        var passInput = document.getElementById("passInput");
        var confirmPassInput = document.getElementById("confirmPassInput");

        if (passInput.type === "password") {
            passInput.type = "text";
            confirmPassInput.type = "text";
        } else {
            passInput.type = "password";
            confirmPassInput.type = "password";
        }
    }
</script>

  </main><!-- End #main -->

<?php 
  include('constant/scripts.php');
  include('constant/footer.php'); 
?>