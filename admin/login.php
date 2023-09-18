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
					<img src="assets/img/apple-touch-icon.png" alt="logo" width="75">
					<p class="fs-5 card-title  mb-4 text-white">Avica Diagnostics Center</p> 
				</div>
				<div class="card shadow-lg">

					<div class="card-body p-3">
						<h1 class="fs-5 card-title fw-bold mb-2">
						<i class="ri-user-3-line"></i> Login
						</h1>

						<?php
							if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
								echo '<h6 class="text-success"> '.$_SESSION["success"].' </h6>';
								unset($_SESSION['success']);
							}
						?>

						<form method="POST" action="php-action/loginaction.php" >
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Email Address</label>
								<input type="email" class="form-control" name="login_email"required autofocus>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="password">Password</label>
								<input type="password" class="form-control" name="login_pass" required>
							</div>

							<?php
								if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
									echo '<h6 class="text-danger"> '.$_SESSION["status"].' </h6>';
									unset($_SESSION['status']);
								}
							?>

							<div class="d-flex align-items-center">
								<button type="submit" name="login" class="btn btn-primary ms-auto">
									Login
								</button>
							</div>

							<div class="credits">
								<h6 class="mb-2"> Don't Have An Account? <a class="link-primary" href="userregister.php">Sign Up</a> </h6>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>  
</section>

</main>

<?php
  include('constant/scripts.php');
  include('constant/footer.php');
?>