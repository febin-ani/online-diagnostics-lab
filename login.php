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
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Admin Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email Address</label>
									<input id="email" type="email" class="form-control" name="aemail" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<!-- <a href="forgot.html" class="float-end">
											Forgot Password?
										</a> -->
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
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