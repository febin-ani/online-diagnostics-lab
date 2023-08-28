<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./admin/assets/css/style.css">
  
  <title>Home</title>

  <!-- Favicons -->
  <link href="admin/assets/img/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<body>
  <!-- Top -->
  <div class="contact-info d-block py-1 text-center align-items-center text-light "
        style="background-color: rgba(71,69,136,255);">
    <i class="bi bi-phone"></i> +91 9947550817
    <i class="ps-3 bi bi-envelope"></i> <a class="text-light" href="mailto:contactavica@gmail.com">contactavica@gmail.com</a>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <div class="container">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="./admin/assets/img/apple-touch-icon.png" width="50">
        <h4 class="ps-2 pt-2">Avica Diagnostic Center</h4>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-lg-auto mt-1 mb-2 mb-lg-0 mx-lg-5">
          <li><a href="home.html" class="nav-link px-2 text-secondary">Home</a></li>
          <li>
            <a href="#" class="nav-link px-2 text-white">
              <span>Appointment</span>
            </a>
          </li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
        
        <div class="dropdown ps-2">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="https://github.com/febin-ani.png" width="40" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2 text-light">
            <?php echo "<span class='text-uppercase'>" .$_SESSION['role']. "</span>"; ?> 
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
              Email id
              </h6>
              <span> <?php echo $_SESSION['auname']; ?> </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="admin/php-action/logoutaction.php" method="POST">
                <button type="submit" name="logout" class="dropdown-item" >
                  <span>Sign Out</span>
                </button>
              </form>
            </li>

          </ul>
        </div>
      </div>
        
    </div>
  </nav>