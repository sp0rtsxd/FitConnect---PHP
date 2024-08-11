<?php
$pageTitle = "Contact Us - FitConnect";
$currentPage = 'contact'; 
$extraScripts = ['https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', 'js/contact.js']; 
$extraStylesheets = ['css/contact.css']; 
include 'includes/header.php'; 
?>

		<header class="hero-section text-white text-center">
			<div class="hero-content">
				<h1 class="display-4 mb-4">Get in Touch</h1>
				<p class="lead">
					We'd love to hear from you! Whether you have a question, feedback, or
					just want to say hello, please don't hesitate to reach out.
				</p>
			</div>
			<div class="hero-shapes">
				<div class="hero-shape"></div>
				<div class="hero-shape"></div>
				<div class="hero-shape"></div>
			</div>
		</header>

		<section class="contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mb-4">
						<div class="contact-form">
							<h2>Send Us a Message</h2>
							<form id="contactForm">
								<div class="mb-3">
									<label for="name" class="form-label">Your Name</label>
									<input
										type="text"
										class="form-control"
										id="name"
										placeholder="Enter your name"
										required
									/>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label">Email Address</label>
									<input
										type="email"
										class="form-control"
										id="email"
										placeholder="Enter your email"
										required
									/>
								</div>
								<div class="mb-3">
									<label for="message" class="form-label">Message</label>
									<textarea
										class="form-control"
										id="message"
										rows="5"
										placeholder="Enter your message"
										required
									></textarea>
								</div>
								<button type="submit" class="btn btn-primary">
									Send Message
								</button>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-info">
							<h2>Contact Information</h2>
							<ul>
								<li>
									<i class="fas fa-map-marker-alt"></i>
									<span>
										123 Fitness Street, Healthy City, FC 12345, United States
									</span>
								</li>
								<li>
									<i class="fas fa-phone-alt"></i>
									<span>(123) 456-7890</span>
								</li>
								<li>
									<i class="fas fa-envelope"></i>
									<span>info@fitconnect.com</span>
								</li>
							</ul>
						</div>
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>