<body>
  <!-- Top -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
  <div class="container d-flex justify-content-center">
  <div class="contact-info d-flex align-items-center">
    <i class="bi bi-phone"></i> +91 9947550817
    <i class="ps-3 bi bi-envelope"></i> <a style="text-decoration:none" class="text-light" href="mailto:contactavica@gmail.com">contactavica@gmail.com</a>
  </div>
  </div>
  </div>

  <header id="header" class="fixed-top">
  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <div class="container">
      <a href="home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="assets/img/apple-touch-icon.png" width="50">
        <h4 class="ps-2 pt-2">Avica Diagnostic Center</h4>
      </a>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-lg-auto mt-1 mb-2 mb-lg-0 mx-lg-5">
          <li><a href="home.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#about" class="nav-link px-2 text-white">About</a></li>
        </ul>
        
        <a href="appointment.php" class="appointment-btn scrollto">
          <span class="d-none d-md-inline">Make an </span>Appointment
        </a>
        <?php
        if(isset($_SESSION['usertype'])){
        ?>
        <div class="nav-item dropdown ps-2">
          <a class=" d-flex nav-link align-items-center pe-0" data-bs-toggle="dropdown" >
            <img src="https://github.com/febin-ani.png" width="40" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2 text-white text-decoration-none" >
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
      <?php
        }
        else{
      ?>
       
        <a href="admin/login.php" class="appointment-btn scrollto">
          <span class="d-none d-md-inline">Register</span>
        </a>
        <a href="admin/login.php" class="appointment-btn scrollto">
          <span class="d-none d-md-inline">Login </span>
        </a>

      <?php
        }
        ?>


      </div>
        
    </div>
  </nav>
  </header>
  