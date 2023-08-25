<?php
	include('constant/topbar.php');
?>

<main id="main" class="main">
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center align-items-center h-100">
				<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="assets/img/apple-touch-icon.png" alt="logo" width="100">
            			<h1 class="fs-4 card-title fw-bold mb-4 text-white">Avica Diagnostics Center</h1> 
					</div>

					<div class="card shadow-lg">
						<div class="card-body p-3">
							<h1 class="fs-4 card-title fw-bold mb-4">Admin Login</h1>

							<?php
							if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
								echo '<h4 class="bg-danger test-white">'.$_SESSION['status'].'</h4';
								unset($_SESSION['status']);
							}
							?>

							<form method="POST" action="php-action/loginaction.php" >
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email Address</label>
									<input type="email" class="form-control" name="login_email" value="" required autofocus>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Password</label>
									<input type="password" class="form-control" name="login_pass" required>
								</div>

								<div class="d-flex align-items-center">
									<button type="submit" name="login" class="btn btn-primary ms-auto">
										Login
									</button>
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