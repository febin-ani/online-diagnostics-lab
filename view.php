<?php 
  include('constant/securityhome.php');
  include('constant/topbar.php');
  include('constant/header.php');
?>

<style>
    
    .row-container {
        max-width: 65%;
        margin: 0 auto;
    }
    .row {
        border: 3px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        margin: 10px 0;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .containercenter {
        text-align: center
    }

    .view{
        border:1px solid #ccc;
        border-radius: 10px;
        padding:10px 1px;
    }

</style>

<h1 class="containercenter">Appointment</h1><br><br><br>

<div class="row-container ">
    <h1 class="containercenter">View Appointment</h1>  
    <?php

    $id = $_SESSION['id'];

    $sql = "SELECT
                al.*,
                GROUP_CONCAT(DISTINCT t.test_name ORDER BY t.test_id) AS testNames
            FROM
                tb_appointment_list AS al
            LEFT JOIN
                tb_appointment AS a ON al.code = a.apt_code
            LEFT JOIN
                tb_test AS t ON a.test_id = t.test_id
            WHERE
                al.user_id = $id
            GROUP BY al.code
            ORDER BY al.schedule";

    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            $name = $row['name'];
            $code = $row['code'];
            $testNames = $row['testNames'];
            $schedule = $row['schedule'];
            $pres = $row['pres'];
            $price = $row['price'];
            $status = $row['status'];
            $paymentStatus = $row['payment_status'];
            $dateCreated = $row['date_created'];
            ?>
            
            <div class="row">
                <span><b>Appointment Code:
                    <?php echo $code ?>
                </b></span>
                <br>
                <span><b>Date of Appointment:</b> 
                    <?php echo $schedule; ?>
                </span>

                <br>
                <div class="mt-3 view">
                    <h6 class="ms-3">Appointment Details</h6>
                    <span class="ms-4"><b>Name:</b>
                        <?php echo $name; ?>
                    </span>
                    <br>
                    <span class="ms-4"><b>Test Names:</b>
                        <?php echo $testNames; ?>
                    </span>
                    <br>
                    <span class="ms-4"><b>Prescription: </b>
                        <?php if($pres!==""){
                        ?>
                            <a class=" link-dark" href=<?php echo "assets/upload/".$row["pres"]; ?> >  <i class="ri-eye-fill"></i></a>
                        <?php
                        } else {
                        ?>
                            <i  class="ri-eye-off-fill"></i>
                        <?php
                        }?>
                    </span>
                    <br>
                    <span class="ms-4"><b>Appiontment Status:</b>
                        <?php if($status==0){
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
                        } ?>
                    </span>
                    <br>
                    <span class="ms-4"><b>Date Created:</b>
                        <?php echo $dateCreated ?>
                    </span>
                </div>        

                <div class="mt-3 d-flex justify-content-between">
                <span ><b>Payment Status:</b>
                    <?php if($paymentStatus==0){
                    ?>
                        Pending
                        <?php if($status >= 1){
                        ?>
                            <button class="ms-2 btn btn-danger btn-sm">Pay Now [Online]</button>
                        <?php } ?>
                    <?php
                    } else {
                    ?>
                        Completed
                    <?php
                    } ?>
                </span>

                <span><b>Total Amount:</b> ₹ 
                    <?php echo $price ; 
                    if($status == "2"){ ?>
                    <button class="ms-2 btn btn-danger btn-sm">Print Reciept</button>
                    <?php } ?>
                </span>

                </div>
            </div>

        <?php } 
        } else {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo 'No Records Found' ?>
            </div>
        <?php
        }
        ?>




</div>

<?php
include('constant/scripts.php');
include('constant/footer.php');
?>
