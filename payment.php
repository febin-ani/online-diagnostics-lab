
<?php 
  include('constant/securityhome.php');
  include('constant/topbar.php');
  include('constant/header.php');
?>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

<style>
    .nrow-container {
        max-width: 30%;
        margin: 0 auto;
    }
    .nrow {
        border: 3px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        margin: 10px 0;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .containercenter {
        text-align: center;

    }

    .input{
    margin: auto;
    display: block;

    }

    .view{
        border:1px solid #ccc;
        border-radius: 10px;
        padding:10px 1px;
    }
    
</style>

<h1 class="containercenter">Appointment</h1><br><br><br>

<div class="nrow-container ">
    <h1 class="containercenter">Payment</h1>  
    <div class="nrow">
        <form class="row g-3" onsubmit="return pay(this);">
            <div class="col-12">
                <label for="name" >Card Holder's Name:</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="cardnum" class="form-label">Card Account Number:</label>
                <input type="number" class="form-control" placeholder="**** **** **** ****" maxlength="16" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Expiry Month</label>
                <input type="month" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">CVV</label>
                <input type="number" class="form-control" maxlength="3" required>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Pay</button>
            </div>

        </form>
    </div>
</div>

<script>
    function pay(form){
        swal({
            title: "Payment Successful!",
            icon: "success",
        })
        .then((isOkey) => {
            if (isOkey) {
                form.submit();
            }
        });
        return false;
    }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
include('constant/scripts.php');
include('constant/footer.php');
?>

