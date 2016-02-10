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
				<div class="hero-content cart-page">
					<div class="container">
						<h1 class="heading">Shopping cart</h1>
					</div>
				</div>
			</section>

			<!-- Cart Section -->
			<section class="section-cart">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="cart-products">
								<div class="product">
									<div class="product-description">
										<div class="cover-image">
											<img src="img/cart-prod-1.jpg" alt="product cover" />
										</div>

										<div class="title">
											<h4><a href="course.html">Best measurement course in the world</a></h4>
										</div>

										<div class="product-info">
											<span class="price">$59</span>

											<a class="remove-from-cart" href="#">Remove</a>
										</div>
									</div>
								</div>

								<div class="product">
									<div class="product-description">
										<div class="cover-image">
											<img src="img/cart-prod-2.jpg" alt="product cover" />
										</div>

										<h4><a href="course.html">Become an artistic genius</a></h4>

										<div class="product-info">
											<span class="price">$49</span>

											<a class="remove-from-cart" href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>

							<div class="cart-totals">
								<p>2 course(s), <span>Subtotal:<span class="sum">$108</span></span></p>
							</div>

							<div class="cart-action">
								<div class="apply-coupon">
									<label>
										<input type="text" class="form-input js-input" name="username" />
										<span>Coupon code</span>
									</label>

									<a class="update-cart-btn" href="#"><i class="icon icon-updateicon"></i><span>Update</span></a>
								</div>

								<div class="checkout">
									<a href="courses-list.html">Return Shopping</a>

									<a href="#" class="checkout-btn btn theme-btn-1">
										<span class="button">Checkout</span>
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="related-courses-box">
								<h3 class="box-title">Folks also bought</h3>

								<div class="row row-fit-10">
									<div class="col-xs-6 col-md-12">
										<div class="single-course grid-course">
											<div class="course-thumbnail">
												<a href="course.html" class="cover-info">
													<div class="text">
														<h4>Don't miss this course</h4>
														<p>These cases are perfectly simple and easy to distinguish. In a free hour.</p>
													</div>
												</a>

												<img src="img/sidebar-related.jpg" alt="course thumbnail" />
											</div>

											<div class="course-details">
												<h3 class="title">
													<a href="course.html">Masterclass from top chefs</a>
												</h3>
											</div>
										</div>
									</div>

									<div class="col-xs-6 col-md-12">
										<div class="single-course grid-course">
											<div class="course-thumbnail">
												<a href="course.html" class="cover-info">
													<div class="text">
														<h4>Don't miss this course</h4>
														<p>These cases are perfectly simple and easy to distinguish. In a free hour.</p>
													</div>
												</a>

												<img src="img/sidebar-related-2.jpg" alt="course thumbnail" />
											</div>

											<div class="course-details">
												<h3 class="title">
													<a href="course.html">Programming for everybody</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="checkout">
						<div id="payment-type" class="payment-type">
							<h4>Choose payment system</h4>

							<div class="payment-options">
								<a href="https://www.paypal.com/" target="blank" class="btn paypal">Paypal</a>

								<a href="#" class="btn credit-card credit-card-btn">Credit card</a>
							</div>

							<div class="payment-showcase">
								<span class="icon-PayPal"></span>
								<span class="icon-MasterCard"></span>
								<span class="icon-Visa"></span>
							</div>
						</div>

						<div id="credit-card-payment" class="credit-card-payment">
							<h4>Credit card</h4>

							<form class="credit-card-form">
								<div class="row">
									<div class="col-sm-6 right">
										<label>
											<span>First name</span>
											<input type="text" name="first-name" class="js-input" />
										</label>
									</div>

									<div class="col-sm-6 left">
										<label>
											<span>Last name</span>
											<input type="text" name="last-name" class="js-input" />
										</label>
									</div>

									<div class="col-sm-6 right">
										<label>
											<span>Credit card number</span>
											<input type="text" name="credit-card" class="js-input nr-only" />
										</label>
									</div>

									<div class="col-sm-6 left">
										<label class="short">
											<span>Exp.</span>
											<input type="text" name="card-exp" class="js-input" />
										</label>

										<label class="short">
											<span>CCV</span>
											<input type="text" name="card-ccv" class="js-input nr-only" />
										</label>
									</div>
								</div>

								<div class="btn-wrapper">
									<button class="btn theme-btn-1">
										<span class="button">Enroll now</span>
									</button>
								</div>
							</form>
						</div>
					</div>
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
