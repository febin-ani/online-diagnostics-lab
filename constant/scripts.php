
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="assets/js/sweetalert.min.js"></script>


  <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    ?>
      <script>
        swal({
          title: "<?php echo $_SESSION['status']; ?>",
          // text: "You clicked the button!",
          icon: "<?php echo $_SESSION['status_code']; ?>",
        });
      </script>
    <?php
      unset($_SESSION['status']);
    }
  ?>