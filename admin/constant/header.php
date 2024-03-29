<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Avica Diagnostics Lab System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
  
  <!-- Info Cards  -->
  <style>
    .order-card {
      color: #fff;
    }
    
    .bg-c-blue {
      background: linear-gradient(45deg,#4099ff,#73b4ff);
    }
    
    .bg-c-green {
      background: linear-gradient(45deg,#2ed8b6,#59e0c5);
    }
    
    .bg-c-yellow {
      background: linear-gradient(45deg,#FFB64D,#ffcb80);
    }
    
    .bg-c-pink {
      background: linear-gradient(45deg,#FF5370,#ff869a);
    }
    
    .bg-c-orange {
      background: linear-gradient(45deg,#FF7F40,#FFA973);
    }
    
    .bg-c-violet {
      background: linear-gradient(45deg,#D840FF,#DB73FF);
    }

    .bg-c-darkviolet {
      background: linear-gradient(45deg,#5F40FF,#7773FF);
    }

    .bg-c-darkpink {
      background: linear-gradient(45deg,#FF40A9,#FF73C7);
    }
    
    .card {
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
      box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
      border: none;
      margin-bottom: 30px;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }
    
    .card .card-block {
      padding: 25px;
    }
    
    .order-card i {
      font-size: 26px;
    }
    
    .f-left {
      float: left;
    }
    
    .f-right {
      float: right;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Avica Diagnostics</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="https://github.com/febin-ani.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
            <?php echo "<span class='text-uppercase'>" .$_SESSION['usertype']. "</span>"; ?> 
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
              Email id
              </h6>
              <span> <?php echo $_SESSION['username']; ?> </span>
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
              <form action="./php-action/logoutaction.php" method="POST">
                <button type="submit" name="logout" class="dropdown-item" >
                  <span>Sign Out</span>
                </button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
