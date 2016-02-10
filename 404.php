<?php include('template.php'); ?>

	<!-- Page Wrapper -->
	<div id="page">
		<!-- Register Poup -->
		<div class="register-popup">
			<div class="popup-wrapper">
				<span class="close-popup-btn icon-cross"></span>

				<form id="register-form">
					<div class="section-header">
						<h1>Register</h1>
					</div>

					<label>
						<span>First Name *</span>
						<input type="text" class="js-input" name="register-first-name" />
					</label>

					<label>
						<span>Last Name *</span>
						<input type="text" class="js-input" name="register-last-name" />
					</label>

					<label>
						<span>E-mail address *</span>
						<input type="text" class="js-input" name="register-email" />
					</label>

					<label>
						<span>Password *</span>
						<input type="password" class="js-input" name="register-password" />
					</label>

					<label>
						<span>Confirm Password *</span>
						<input type="password" class="js-input" name="register-password" />
					</label>

					<div class="btn-wrapper">
						<button class="btn theme-btn-3">Register</button>
					</div>

					<div class="section-header small">
						<h1><span>or</span></h1>
					</div>

					<div class="social-buttons">
						<a href="#" class="facebook">facebook</a>
						<a href="#" class="google-plus">google+</a>
					</div>

					<p><a href="#" class="forgot-password">Forgot password?</a></p>
					<p>Have an account already? <a href="#" class="login-btn">Login here</a></p>
				</form>

				<form id="login-form">
					<div class="section-header">
						<h1>Login</h1>
					</div>

					<label>
						<span>E-mail address *</span>
						<input type="text" class="js-input" name="login-email" />
					</label>

					<label>
						<span>Password *</span>
						<input type="password" class="js-input" name="login-password" />
					</label>

					<div class="btn-wrapper">
						<button class="btn theme-btn-3">Login</button>
					</div>

					<div class="section-header small">
						<h1><span>or</span></h1>
					</div>

					<div class="social-buttons">
						<a href="#" class="facebook">facebook</a>
						<a href="#" class="google-plus">google+</a>
					</div>
					
					<p><a href="#" class="forgot-password">Forgot password?</a></p>
					<p>Don't have an account? <a href="#" class="register-btn">Register here</a></p>
				</form>
			</div>
		</div>
		

		<!-- Main Content -->
		<div class="content-wrapper">
			<!-- Hero Section -->
			<section class="section-hero">
				<div class="hero-content error-404">
					<div class="container">
						<h1 class="heading"> </h1>
					</div>
				</div>
			</section>

			<!-- 404 Section -->
			<section class="section-404">
				<div class="container">
					<p>the page you are looking for can't be found</p>

					<!-- 
<form class="search-form">
						<input class="search-input js-input" type="text" name="error-input" />
						<input class="search-submit" type="submit" value="Search" />
					</form>
 -->
				</div>
			</section>

			<!-- Call to Action Box -->
			<div class="call-to-action-box" data-parallax-bg="img/call-to-action-bg.jpg">
				<div class="box-img"><span></span></div>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<h2>Enjoy our courses Today</h2>
						</div>

						<div class="col-md-5">
							<div class="button-wrapper">
								<a href="#" class="btn theme-btn-3">Get in touch</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php include('footer.php'); ?>
