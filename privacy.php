<?php
$pageTitle = "Privacy Policy - FitConnect";
$currentPage = 'privacy'; 
$extraScripts = ['js/privacy.js']; 
$extraStylesheets = ['css/privacy.css']; 
include 'includes/header.php'; 
?>

		<header class="hero-section text-white text-center">
			<div class="hero-content">
				<h1 class="display-4 mb-4" data-aos="fade-up">
					Our Privacy Policy
				</h1>
				<p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
					We value your privacy and are committed to protecting your
					personal information.
				</p>
			</div>
			<div class="hero-shapes">
				<div class="hero-shape"></div>
				<div class="hero-shape"></div>
				<div class="hero-shape"></div>
			</div>
		</header>

		<section id="privacy-content">
			<div class="container">
				<h2 class="section-title" data-aos="fade-up">
					Key Privacy Principles
				</h2>
				<div class="row">
					<div class="col-md-4 mb-4" data-aos="fade-up">
						<div class="card privacy-card h-100">
							<div class="card-body text-center">
								<i class="fas fa-shield-alt privacy-icon mb-3"></i>
								<h5 class="card-title">Data Protection</h5>
								<p class="card-text">
									We use industry-standard security measures to protect
									your personal information.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
						<div class="card privacy-card h-100">
							<div class="card-body text-center">
								<i class="fas fa-user-lock privacy-icon mb-3"></i>
								<h5 class="card-title">Transparency</h5>
								<p class="card-text">
									We are clear about what information we collect and how we
									use it.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
						<div class="card privacy-card h-100">
							<div class="card-body text-center">
								<i class="fas fa-check-circle privacy-icon mb-3"></i>
								<h5 class="card-title">User Control</h5>
								<p class="card-text">
									You have control over your data and can request access or
									deletion at any time.
								</p>
							</div>
						</div>
					</div>
				</div>

				<h2 class="section-title" data-aos="fade-up">
					Privacy Policy Details
				</h2>
				<div class="accordion" id="privacyAccordion">
					<div class="accordion-item" data-aos="fade-up">
						<h3 class="accordion-header" id="headingOne">
							<button
								class="accordion-button"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#collapseOne"
								aria-expanded="true"
								aria-controls="collapseOne"
							>
								1. Information We Collect
							</button>
						</h3>
						<div
							id="collapseOne"
							class="accordion-collapse collapse show"
							aria-labelledby="headingOne"
							data-bs-parent="#privacyAccordion"
						>
							<div class="accordion-body">
								<p>
									We may collect personal information that you provide, such
									as your name, email address, and any other details you
									submit through our website.
								</p>
								<p>
									We also collect usage data, including your IP address,
									browser type, and pages visited, to improve user
									experience.
								</p>
							</div>
						</div>
					</div>
					<div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
						<h3 class="accordion-header" id="headingTwo">
							<button
								class="accordion-button collapsed"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#collapseTwo"
								aria-expanded="false"
								aria-controls="collapseTwo"
							>
								2. How We Use Your Information
							</button>
						</h3>
						<div
							id="collapseTwo"
							class="accordion-collapse collapse"
							aria-labelledby="headingTwo"
							data-bs-parent="#privacyAccordion"
						>
							<div class="accordion-body">
								<ul>
									<li>To provide and maintain our services.</li>
									<li>To notify you about changes to our services.</li>
									<li>
										To allow you to participate in interactive features when
										you choose to do so.
									</li>
									<li>To provide customer support.</li>
									<li>
										To gather analysis or valuable information so that we can
										improve our services.
									</li>
									<li>To monitor the usage of our services.</li>
									<li>To detect, prevent and address technical issues.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
						<h3 class="accordion-header" id="headingThree">
							<button
								class="accordion-button collapsed"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#collapseThree"
								aria-expanded="false"
								aria-controls="collapseThree"
							>
								3. Disclosure of Your Information
							</button>
						</h3>
						<div
							id="collapseThree"
							class="accordion-collapse collapse"
							aria-labelledby="headingThree"
							data-bs-parent="#privacyAccordion"
						>
							<div class="accordion-body">
								<p>
									We may share your information with third parties to
									provide you with our services, comply with legal
									obligations, and protect our rights.
								</p>
							</div>
						</div>
					</div>
					<div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
						<h3 class="accordion-header" id="headingFour">
							<button
								class="accordion-button collapsed"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#collapseFour"
								aria-expanded="false"
								aria-controls="collapseFour"
							>
								4. Security of Your Personal Information
							</button>
						</h3>
						<div
							id="collapseFour"
							class="accordion-collapse collapse"
							aria-labelledby="headingFour"
							data-bs-parent="#privacyAccordion"
						>
							<div class="accordion-body">
								<p>
									The security of your personal information is important to
									us, but remember that no method of transmission over the
									Internet or method of electronic storage is 100% secure.
								</p>
							</div>
						</div>
					</div>
				</div>

				<h2 class="section-title" data-aos="fade-up">
					Privacy Risk Calculator
				</h2>
				<div id="privacyCalculator" data-aos="fade-up" data-aos-delay="100">
					<form id="privacyCalcForm">
						<div class="mb-3">
							<label for="dataShared" class="form-label"
								>How much personal data do you share online?</label
							>
							<select class="form-select" id="dataShared" required>
								<option value="">Select an option</option>
								<option value="1">Minimal - only necessary information</option>
								<option value="2">Moderate - some personal details</option>
								<option value="3">
									Extensive - lots of personal information
								</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="passwordStrength" class="form-label"
								>How strong are your passwords?</label
							>
							<select class="form-select" id="passwordStrength" required>
								<option value="">Select an option</option>
								<option value="3">Weak - short or common words</option>
								<option value="2">Moderate - mix of characters</option>
								<option value="1">Strong - long with special characters</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="twoFactor" class="form-label"
								>Do you use two-factor authentication?</label
							>
							<select class="form-select" id="twoFactor" required>
								<option value="">Select an option</option>
								<option value="3">Never</option>
								<option value="2">Sometimes</option>
								<option value="1">Always</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">
							Calculate Risk
						</button>
					</form>
					<div id="riskResult" class="mt-3"></div>
				</div>
			</div>
		</section>

		<section id="cta" class="cta-section">
			<div class="container text-center">
				<h2 class="mb-4">
					Have questions about our privacy policy?
				</h2>
				<a href="contact.html" class="btn btn-light btn-lg"
					>Contact Us</a
				>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>