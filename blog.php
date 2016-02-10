<?php include('template.php'); ?>


	<div class="video-popup">
		<i class="close-popup"></i>

		<div class="popup-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="wrapper">
							<iframe allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
				<div class="hero-content blog">
					<div class="container">
						<h1 class="heading">Nuggets of wisdom and fun</h1>
					</div>
				</div>
			</section>

			<!-- Blog Section -->
			<section class="section-blog">
				<div class="container">
					<div class="blog-posts-list">
						<div class="row isotope-container">
							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post image-post">
									<div class="post-cover">
										<a href="blogpost_1.html">
											<img src="img/blog-post-1.jpg" alt="blog post cover" />
										</a>
									</div>

									<div class="post-body">
										<h3 class="post-title"><a href="blogpost_1.html">Is it worth becoming a CPA?</a></h3>

										<span class="post-date">7 July 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post noimage-post">
									<div class="post-body">
										<h3 class="post-title"><a href="blogpost_2.html">The unstoppable passion</a></h3>

										<p class="post-excerpt">Find out from the man behind Crosswalk himself how it all came to be</p>

										<span class="post-date">23 June 2015</span>
									</div>
								</div>
							</div>

<!-- 							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post image-post">
									<div class="post-cover">
										<a href="blogpost.html">
											<img src="img/blog-post-1.jpg" alt="blog post cover" />
										</a>
									</div>

									<div class="post-body">
										<h3 class="post-title"><a href="blogpost.html">Wordpress security: what community thinks</a></h3>

										<span class="post-date">7 July 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post noimage-post">
									<div class="post-body">
										<h3 class="post-title"><a href="blogpost.html">TRICKS ON DEVELOPING COOL SHOPPING CART DESIGNS</a></h3>

										<p class="post-excerpt">Here are the estimates for how much 20 years of childhood in Manhattan adds or takes away from child's income.</p>

										<span class="post-date">23 June 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post video-post">
									<div class="post-cover">
										<div class="post-body">
											<h3 class="post-title"><a href="blogpost.html">TOP 10 WEB DESIGN TRENDS TO WATCH IN 2014</a></h3>

											<span class="post-date">04 July 2015</span>
										</div>

										<a href="#" class="play-button btn theme-btn-1" data-media-src="https://player.vimeo.com/video/88883554">
											<span class="button">
												<i class="icon-play1"></i>
											</span>
										</a>

										<img src="img/video-post-cover.jpg" alt="video post cover" />
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post video-post">
									<div class="post-cover">
										<div class="post-body">
											<h3 class="post-title"><a href="blogpost.html">TTHE IMPORTANCE OF TYPOGRAPHY IN A WEBSITE</a></h3>

											<span class="post-date">04 July 2015</span>
										</div>

										<a href="#" class="play-button btn theme-btn-1" data-media-src="https://player.vimeo.com/video/123360341">
											<span class="button">
												<i class="icon-play1"></i>
											</span>
										</a>

										<img src="img/video-post-cover-2.jpg" alt="video post cover" />
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post audio-post">
									<div class="post-body">
										<h3 class="post-title">
											<a href="blogpost.html">Audio post<br />Eminem - Phenomenal (Audio Only)</a>
										</h3>

										<div class="post-player"></div>

										<span class="post-date">27 june 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post image-post">
									<div class="post-cover">
										<a href="blogpost.html">
											<img src="img/blog-post-2.jpg" alt="blog post cover" />
										</a>
									</div>

									<div class="post-body">
										<h3 class="post-title"><a href="blogpost.html">WORDPRESS SECURITY: WHAT COMMUNITY THINKS</a></h3>

										<span class="post-date">8 August 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post noimage-post">
									<div class="post-body">
										<h3 class="post-title"><a href="blogpost.html">WILL IPHONE 6 BE THE GAME CHANGER IN WEB DESIGN?</a></h3>

										<p class="post-excerpt">"Nulla im mi sed tellus porta mollis vitae ut libero id tempor augue, id scelensque."</p>

										<span class="post-date">19 July 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post image-post">
									<div class="post-cover">
										<a href="blogpost.html">
											<img src="img/blog-post-3.jpg" alt="blog post cover" />
										</a>
									</div>

									<div class="post-body">
										<h3 class="post-title"><a href="blogpost.html">GHOST OR WORDPRESS, WHICH ONE SHOULD I CHOOSE?</a></h3>

										<span class="post-date">25 August 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post image-post">
									<div class="post-cover">
										<a href="blogpost.html">
											<img src="img/blog-post-4.jpg" alt="blog post cover" />
										</a>
									</div>

									<div class="post-body">
										<h3 class="post-title"><a href="blogpost.html">3 WAYS TO MAKE YOUR WORDPRESS BLOG EVEN MORE VALUABLE</a></h3>

										<span class="post-date">3 August 2015</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12 isotope-item">
								<div class="blog-post noimage-post">
									<div class="post-body">
										<h3 class="post-title"><a href="blogpost.html">Enhance Your Career and Employability Skills</a></h3>

										<p class="post-excerpt">Learn how to make effective decisions about your future career and how to take control of your professional development.</p>

										<span class="post-date">23 July 2015</span>
									</div>
								</div>
							</div>
						</div>

						<div class="main-loader">
							<div class="loader-front">
								<img src="img/loader-front.png" alt="loader front" />
							</div>
						</div>

						<div class="btn-wrapper">
							<a href="#" class="btn theme-btn-1 load-more">
								<span class="button">Load more</span>
							</a>
 -->						</div>
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
	