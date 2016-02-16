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
				<div class="hero-content courses-list">
					<div class="container">
						<h1 class="heading">Courses list</h1>
					</div>
				</div>
			</section>

			<!-- Courses Section -->
			<section class="section-courses">
			<!--	<div class="filters-box">
					<div class="box-heading">
						<div class="container">
							<ul class="courses-filters">
								<li>
									<a class="current" href="#" data-target="list-all"><span>All courses</span></a>
								</li>

								<li>
									<a href="#" data-target="list-online"><span>Online</span></a>
								</li>

								<li>
									<a href="#" data-target="list-offline"><span>Offline</span></a>
								</li>
							</ul>
							
							<div class="advanced-filters-toggle">
								<a href="#">
									<p>Show advanced filters</p>
								</a>

								<span class="icon">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</span>
							</div>
						</div>
					</div>

					<div class="advanced-filters-box">
						<div class="container">
							<h2>Advanced filters</h2>

							<div class="row">
								<div class="col-xs-6 col-md-3">
									<div class="filter-input-box">
										<span class="caption">Course category</span>
										<div class="input-box selext-box">
											<input type="text" value="" readonly class="js-input no-select" data-selection="all" placeholder="All categories (95)" name="course-category" />

											<div class="dropdown">
												<ul class="list">
													<li data-option="all">All categories <span>(95)</span></li>
													<li data-option="culinary">Culinary <span>(34)</span></li>
													<li data-option="web-design">Web design <span>(17)</span></li>
													<li data-option="technology">Technology <span>(11)</span></li>
													<li data-option="sport">Sports <span>(9)</span></li>
													<li data-option="education">Education <span>(7)</span></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="filter-input-box">
										<span class="caption">Sort by</span>
										<div class="input-box selext-box">
											<input type="text" value="" readonly class="js-input no-select" data-selection="new" placeholder="Newest courses" name="course-sorting" />

											<div class="dropdown">
												<ul class="list">
													<li data-option="new">Newest courses</li>
													<li data-option="low-to-high">Price low to high</li>
													<li data-option="high-to-low">Price high to low</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-6 col-md-3">
									<div class="filter-input-box">
										<span class="caption">Keywords</span>
										<div class="input-box">
											<input type="text" value="" class="js-input" name="course-keywords" />
										</div>
									</div>

									<div class="filter-input-box">
										<span class="caption">Offline courses by date</span>
										<div class="input-box selext-box date-select">
											<input type="text" value="" readonly class="js-input no-select" data-selection="new" placeholder="Newest courses" name="course-date" />

											<div class="dropdown">
												<div id="calendar" class="calendar"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-6 col-md-3">
									<div class="filter-input-box">
										<span class="caption">Course instructor</span>
										<div class="input-box selext-box">
											<input type="text" value="" readonly class="js-input no-select" data-selection="all" placeholder="All instructors" name="course-instructor" />

											<div class="dropdown">
												<ul class="list">
													<li data-option="zack">Zack Thoumb</li>
													<li data-option="john">John Isner</li>
													<li data-option="barry">Barry Allen</li>
													<li data-option="armstrong">Joe Armstrong</li>
													<li data-option="cage">Elena Cage</li>
													<li data-option="chase">Alexandr Chase</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-6 col-md-3">
									<div class="filters-action">
										<a href="#" class="apply btn theme-btn-1 blue">
											<span class="button">Apply filters</span>
										</a>
										<a class="reset" href="#">Reset filters</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->

				<div class="projects">
					<div class="container">
						<div class="main-loader">
							<div class="loader-front">
								<img src="img/loader-front.png" alt="loader front" />
							</div>
						</div>

						<div class="ajax-target">
                            
							<div class="single-course list-course">
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="course-thumbnail">
											<a  class="cover-info">
												<div class="text">
													<h4>Auditing and Attestation</h4>
													<p>Auditing procedures, generally accepted auditing standards and other standards related to attest engagements.</p>
												</div>
											</a>

											<img src="img/list-course-1.jpg" alt="course thumbnail" />
										</div>
									</div>

									<div class="col-md-4 col-sm-6">
										<div class="course-details">
											<h3 class="title">
												<a>Auditing and Attestation</a>
											</h3>

											<ul class="course-meta">
												<li><span>Instructor:</span> Vipul Mittal</li>
												<li><span>Type:</span> Online</li>
												<li><span>Category:</span> CPA</li>
											</ul>

<!--
											<div class="course-action">
												<a href="courses-course.html" class="btn theme-btn-1 register-btn">
													<span class="button">Register</span>
												</a>

												<span class="price">$39</span>
											</div>
-->
										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="course-description">
											<p>The AUD section tests auditing procedures, generally accepted auditing standards and other standards related to attest engagements. This section also tests knowledge of professional responsibilities of certified public accountants, including ethics and independence.<br><br>The AUD section is generally considered the hardest section of all the 4 sections. This section does not test the memory skills but tests the knowledge of the candidate in applying the audit and attestation knowledge in solving problems. The differences between ISAs and U.S. auditing standards are included on the AUD Exam.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="single-course list-course">
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="course-thumbnail">
											<a class="cover-info">
												<div class="text">
													<h4>Regulation</h4>
													<p>Federal taxation, professional and legal responsibilities, ethics, and business law, and the skills required to apply that knowledge.</p>
												</div>
											</a>

											<img src="img/list-course-2.jpg" alt="course thumbnail" />
										</div>
									</div>

									<div class="col-md-4 col-sm-6">
										<div class="course-details">
											<h3 class="title">
												<a>Regulation</a>
											</h3>

											<ul class="course-meta">
												<li><span>Instructor:</span> Vipul Mittal</li>
												<li><span>Type:</span> Online</li>
												<li><span>Category:</span> CPA</li>
											</ul>

<!--
											<div class="course-action">
												<a href="#" class="btn theme-btn-1 enroll-btn">
													<span class="button">Enroll</span>
												</a>
												<span class="price">$19</span>
												<span class="save-btn icon-heart5"><span class="popup">saved</span></span>
											</div>
-->
										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="course-description">
											<p>REG covers federal taxation, professional and legal responsibilities, ethics, and business law. <br><br>REG is a difficult section for the CPA exams. The section is vast and focuses on knowledge and understanding of the concepts. Federal taxation can be up to 60% of the exam score. Business law topics test knowledge and understanding of the legal implications of business transactions, to the extent they relate to auditing and financial reporting. Most of the question on professional ethics relate to tax practice issues.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="single-course list-course">
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="course-thumbnail">
											<a class="cover-info">
												<div class="text">
													<h4>Financial Accounting and Reporting</h4>
													<p>Accounting principles for business enterprises, not-for- profit organizations, and governmental entities.</p>
												</div>
											</a>

											<img src="img/list-course-3.jpg" alt="course thumbnail" />
										</div>
									</div>

									<div class="col-md-4 col-sm-6">
										<div class="course-details">
											<h3 class="title">
												<a>Financial Accounting and Reporting</a>
											</h3>

											<ul class="course-meta">
												<li><span>Instructor:</span> Vipul Mittal</li>
												<li><span>Type:</span> Offline</li>
												<li><span>Category:</span> CPA</li>
											</ul>

<!--
											<div class="course-action">
												<a href="courses-course.html" class="btn theme-btn-1 register-btn">
													<span class="button">Register</span>
												</a>

												<span class="price">$42</span>
											</div>
-->
										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="course-description">
											<p>FAR covers generally accepted accounting principles (GAAP) for business enterprises, not-for- profit organizations, and governmental entities. GAAP include standards issued by the FASB, IASB, SEC and GASB. <br><br>FAR is the most recognizable section for students. It covers material from nearly every financial accounting course in college. Both US GAAP and IFRS are included on the FAR Exam and the candidates need to be familiar with both. Governmental and non-profit accounting can be up to 25% of the exam score. </p>
										</div>
									</div>
								</div>
							</div>

							<div class="single-course list-course">
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="course-thumbnail">
											<a  class="cover-info">
												<div class="text">
													<h4>Business Environment and Concepts</h4>
													<p>That candidates should know in order to understand the business reasons for and accounting implications of transactions.</p>
												</div>
											</a>

											<img src="img/list-course-4.jpg" alt="course thumbnail" />
										</div>
									</div>

									<div class="col-md-4 col-sm-6">
										<div class="course-details">
											<h3 class="title">
												<a>Business Environment and Concepts</a>
											</h3>

											<ul class="course-meta">
												<li><span>Instructor:</span> Vipul Mittal</li>
												<li><span>Type:</span> Online</li>
												<li><span>Category:</span> CPA</li>
											</ul>

<!--
											<div class="course-action">
												<a href="courses-course.html" class="btn theme-btn-1 register-btn">
													<span class="button">Register</span>
												</a>

												<span class="price">$49</span>
											</div>
-->
										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="course-description">
											<p>REG covers federal taxation, professional and legal responsibilities, ethics, and business law. <br><br>REG is a difficult section for the CPA exams. The section is vast and focuses on knowledge and understanding of the concepts. Federal taxation can be up to 60% of the exam score. Business law topics test knowledge and understanding of the legal implications of business transactions, to the extent they relate to auditing and financial reporting. Most of the question on professional ethics relate to tax practice issues.</p>
										</div>
									</div>
								</div>
							</div>


<!--
							<ul class="page-numbers">
								<li>
									<a href="#" class="page-numbers">1</a>
								</li>

								<li>
									<span class="page-numbers">2</span>
								</li>

								<li>
									<a class="page-numbers" href="#">3</a>
								</li>
							</ul>
-->
						</div>
					</div>
				</div>
			</section>

			<!-- Call to Action Box -->
			<div class="call-to-action-box" data-parallax-bg="img/call-to-action-bg.jpg">
				<div class="box-img"><span></span></div>
				<div class="container">
					<div class="row">
					<div class="col-md-3"></div>
						<div class="col-md-4">
							<h2>START FREE TRAIL</h2>
						</div>
					
                        <!-- 
                        <div class="col-md-3">
                                <input type="text" placeholder="Email Address" style="width:100%; margin-top:10px; height:35px;  border-radius:3px; padding:5px"/>
                        </div>
                        -->

						<div class="col-md-2">
							<div class="button-wrapper">
								<a href="404.php" class="btn theme-btn-3">DEMO</a>
							</div>
						</div>
						
						<div class="col-md-3"></div>
					</div>
				</div>
			</div>
		</div>
	
	</div>


		
<?php include('footer.php'); ?>
