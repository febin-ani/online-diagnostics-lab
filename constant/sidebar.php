 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="ri-todo-line"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="register.php">
      <i class="ri-nurse-line"></i>
      <span>Manage Admin</span>
    </a>
  </li>
  <!-- End Admin Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#test-nav" data-bs-toggle="collapse" href="#">
      <i class="ri-test-tube-line"></i><span>Tests</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="test-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="./addtest.php">
          <i class="bi bi-circle"></i><span>Add Test</span>
        </a>
      </li>
      <li>
        <a href="./managetest.php">
          <i class="bi bi-circle"></i><span>Manage Test</span>
        </a>
      </li>
    </ul>
  </li><!-- End Test Nav -->
</ul>

</aside><!-- End Sidebar-->