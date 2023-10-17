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
          <form class="row g-3" method="POST" action="php-action/testaction.php?id=<?php echo $_REQUEST['id'];?>">
            <?php
                $id = $_GET["id"];
                $sql="SELECT * FROM `tb_test` WHERE test_id='$id'";
              
                $res=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($res))
                {
            ?>
            <div class="card mb-4">
              <div class="card-header"><strong>Update Test</strong><span class="small ms-1"></span></div>
              <div class="card-body">
                <div class="example">
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1252">
                      <div class="mb-3">
                        <label class="form-label" for="test_name">Enter Test Name</label>
                        <input class="form-control" id="test_name" name="test_name" type="text" value="<?php echo $row['test_name']; ?>">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="test_desc">Enter Test Description</label>
                        <textarea class="form-control" type="text" name="test_desc" rows="3"  ><?php echo $row['test_desc']; ?></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="price">Price</label>
                        <input class="form-control" type="number" name="price" id="price"  value="<?php echo $row['price']; ?>" >
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

  </main><!-- End #main -->

<?php 
  include('constant/scripts.php');
  include('constant/footer.php'); 
?>