  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
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


  <!-- <script>
    swal({
      title: "Good job!",
      text: "You clicked the button!",
      icon: "success",
    });
  </script> -->
