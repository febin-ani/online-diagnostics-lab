<?php
include('constant/securityhome.php');
include('constant/topbar.php');
include('constant/header.php');
$id = $_SESSION["id"];
?>


<main id="main" class="main">
    <section class="section mt-5">
        <div class="row">
            <div class="mt-5 mx-auto col-10 col-md-8 col-lg-6">
                <form class="row g-3" method="POST" action="admin/php-action/useraction.php?id=<?php echo $_SESSION['id'];?>">
                    <?php
                        
                        $sql="SELECT * FROM `tb_user` WHERE id='$id'";
                        
                        $res=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($res))
                        {
                    ?>
                    <div class="text-center fs-4 ">
                        <h4>User Profile</h4>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"> First Name:</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>" >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"> Last Name:</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" >
                    </div>
                    <div class="col-md-3">
                    <label class="form-label">Gender:</label>
                        <select name="gender" class="form-select">
                            <option selected>Choose...</option>
                            <option value="male" <?php if ($row['gender'] === "male") echo "selected"; ?>>Male</option>
                            <option value="female" <?php if ($row['gender'] === "female") echo "selected"; ?>>female</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label"> DOB:</label>
                        <input class="form-control" type="date" name="dob" value="<?php echo $row['dob']; ?>" >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"> Contact Number:</label>
                        <input type="number" class="form-control" name="contact" value="<?php echo $row['contact']; ?>" >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"> User Name:</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" >
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"> Email:</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Address:</label>
                        <textarea class="form-control" rows="3" name="address" value="<?php echo $row['address']; ?>"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="update_profile">Update Profile</button>
                    <?php
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