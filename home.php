<?php 
  include('constant/security.php');
  include('constant/topbar.php');
  include('admin/constant/scripts.php');
?>

<?php
  if(isset($_SESSION['access']) && $_SESSION['access'] !=''){
  echo "<script>
      swal({

        title: 'Access Denied';,
        text: 'Here's my error message!',
        type: 'error',
        confirmButtonText: 'Cool'
      });

    </script>";
    // echo '<h6 class=" text-justify text-bg-danger"> '.$_SESSION["access"].' </h6>';
    unset($_SESSION['access']);
  }
?>
  
  <!-- Carousel -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000" >
        <img src="./admin/assets/img/hero-bg.jpg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./admin/assets/img/lab.jpg" class="d-block w-100" alt="">
      </div>
      <!-- <div class="carousel-item">
        <img src="." class="d-block w-100" alt="">
      </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


</body>
</html>








