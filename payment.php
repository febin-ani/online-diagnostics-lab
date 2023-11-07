
<?php 
  include('constant/securityhome.php');
  include('constant/topbar.php');
  include('constant/header.php');
?>

<style>
    
    .nrow-container {
        max-width: 50%;
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
    <?php

    $id = $_SESSION['id'];
?>
<!--<div class="containercenter">
    <div class="row">
        <div class="mb-3">
            <b class="form-label" >Card Holder Name:</b>
            <div class="col-sm-6 input">
                <input class="form-control" type="text" name="">
            </div>
        </div>
        <div class="mb-3">
            <b class="form-label" >Card Number:</b> 
            <div class="col-sm-6 input">
                <input class="form-control" type="text" name="">
            </div>
        </div>
        <div class="mb-3">
            <b class="form-label" >Exp.Date:</b>
            <div class="col-sm-3">
                <input class="form-control" type="text" name="">
            </div>
        </div>
        <div class="mb-3">
            <b class="form-label" >CVV:</b> 
            <div class="col-sm-3">
                <input class="form-control" type="text" name="">
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary mb-3 mt-3" type="submit">Pay</button>
        </div>
    </div>
-->

<div class="nrow">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
</form>
</div>


</div>

<?php
include('constant/scripts.php');
include('constant/footer.php');
?>
