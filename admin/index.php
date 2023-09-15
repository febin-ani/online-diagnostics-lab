<?php 
	include('constant/security.php');
    
	include('constant/header.php');
	include('constant/sidebar.php');
?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Admin Dashboard</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->


<div class="container">
    <div class="row ">
        <!-- CARD 1 -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Admin Users</h6>
                    <h2 class="text-end"><i class="ri-nurse-fill f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        $sql = "SELECT id FROM tb_user WHERE usertype = 'admin' ORDER BY id";
                        $query = mysqli_query($conn,$sql);

                        $row = mysqli_num_rows($query);
                        echo $row;
                    ?>
                    </span>
                    </h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
        <!-- CARD 2 -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Client Users</h6>
                    <h2 class="text-end"><i class="ri-empathize-fill f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        $sql = "SELECT id FROM tb_user WHERE usertype = 'user' ORDER BY id";

                        $query = mysqli_query($conn,$sql);

                        $row = mysqli_num_rows($query);
                        echo $row;
                    ?>
                    </span>
                    </h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
        <!-- CARD 3 -->
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
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
        <!-- CARD 4 -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">
                        Active Appointment
                    </h6>
                    <h2 class="text-end"><i class="ri-file-paper-2-fill f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        $sql = "SELECT apt_id FROM tb_appointment_list ORDER BY apt_id";
                        $query = mysqli_query($conn,$sql);

                        $row = mysqli_num_rows($query);
                        echo $row;
                    ?>
                    </span>
                    </h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
	</div>
<!-- SEPERATED -->
    <div class="row ">
        <!-- CARD 5 -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-orange order-card">
                <div class="card-block">
                    <h6 class="m-b-20">
                        <!-- Title  -->
                    </h6>
                    <h2 class="text-end"><i class="fa fa-credit-card f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        // $sql = query ;
                        // $query = mysqli_query($conn,$sql);

                        // $row = mysqli_num_rows($query);
                        // echo $row;
                    ?>
                    </span>
                    </h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
        <!-- CARD 6 -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-violet order-card">
                <div class="card-block">
                    <h6 class="m-b-20">
                        <!-- Title  -->
                    </h6>
                    <h2 class="text-end"><i class="fa fa-credit-card f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        // $sql = query ;
                        // $query = mysqli_query($conn,$sql);

                        // $row = mysqli_num_rows($query);
                        // echo $row;
                    ?>
                    </span>
                    </h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
        <!-- CARD 7 -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-darkpink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">
                        <!-- Title  -->
                    </h6>
                    <h2 class="text-end"><i class="fa fa-credit-card f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        // $sql = query ;
                        // $query = mysqli_query($conn,$sql);

                        // $row = mysqli_num_rows($query);
                        // echo $row;
                    ?>
                    </span>
                    </h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                </div>
            </div>
        </div>
        <!-- CARD 8 -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-darkviolet order-card">
                <div class="card-block">
                    <h6 class="m-b-20">
                        <!-- Title  -->
                    </h6>
                    <h2 class="text-end"><i class="fa fa-credit-card f-left"></i>
                    <span>
                    <?php 
                        include('constant/config.php');

                        // $sql = query ;
                        // $query = mysqli_query($conn,$sql);

                        // $row = mysqli_num_rows($query);
                        // echo $row;
                    ?>
                    </span>
                    </h2>
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