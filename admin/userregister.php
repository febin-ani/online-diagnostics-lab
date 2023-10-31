<?php
	session_start();
	include('constant/topbar.php');
?>

<main id="main" class="main">
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center align-items-center h-80">
				<div class="col-xxl-5 col-xl-4 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center mt-5 mb-3">
                        <img src="assets/img/logo.png" width="40">
            			<span class="fs-5 card-title  mb-4 text-white">Avica Diagnostics Center</span> 
					</div>
					<div class="card shadow-lg">

						<div class="card-body">
							<h1 class="fs-5 card-title fw-bold mb-2">
							<i class="ri-user-3-line"></i> User Register
							</h1>

							<form method="POST" action="php-action/useraction.php" >

                                <div class="mb-3">
									<label class="mb-2 text-muted">Username</label>
									<input type="test" class="form-control" name="register_user"required >
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted">Email Address</label>
									<input type="email" class="form-control" name="register_email"required >
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted">Password</label>
									<input type="password" class="form-control" name="register_pass" required>
								</div>

                                <div class="mb-3">
									<label class="mb-2 text-muted">Confirm Password</label>
									<input type="password" class="form-control" name="register_cpass" required>
								</div>

								
								<?php
								if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
									echo '<h6 class="text-danger"> '.$_SESSION["status"].' </h6>';
									unset($_SESSION['status']);
								}
								?>

								
                                <div>
                                    <input type="hidden" name="usertype" value="user">
                                </div>

								<div class="d-flex align-items-center">
									<button type="submit" name="userregister" class="btn btn-primary ms-auto">
										Sign Up
									</button>
								</div>

								<div class="credits">
									<h6 > Already Have An Account? <a class="link-primary" href="login.php">Login</a> </h6>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
     
  </section>

</main>

<?php
  include('constant/scripts.php');
  include('constant/footer.php');
?>