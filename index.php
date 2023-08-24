<?php 
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


<div class="container">
    <div class="row ">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Admin</h6>
                    <h2 class="text-end"><i class="ri-nurse-fill f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        $sql = "SELECT aid FROM tb_aregister ORDER BY aid";
                        $query = mysqli_query($conn,$sql);

                        $row = mysqli_num_rows($query);
                        echo $row;
                    ?>
                    </span>
                    </h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Tests</h6>
                    <h2 class="text-end"><i class="ri-test-tube-fill f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        $sql = "SELECT test_id FROM tb_test ORDER BY test_id";
                        $query = mysqli_query($conn,$sql);

                        $row = mysqli_num_rows($query);
                        echo $row;
                    ?>
                    </span>
                    </h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders Received</h6>
                    <h2 class="text-end"><i class="fa fa-refresh f-left"></i>
                        <span>
                        <!-- <?php 
                            include('constant/config.php');

                            $sql = "SELECT test_id FROM tb_test ORDER BY test_id";
                            $query = mysqli_query($conn,$sql);

                            $row = mysqli_num_rows($query);
                            echo $row;
                        ?> -->
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders Received</h6>
                    <h2 class="text-end"><i class="fa fa-credit-card f-left"></i><span>486</span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
	</div>
</div>


</main><!-- End #main -->

<?php 
  include('constant/scripts.php');
  include('constant/footer.php'); 
?>