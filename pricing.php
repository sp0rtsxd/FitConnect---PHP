<?php
$pageTitle = "Pricing - FitConnect";
$currentPage = 'pricing'; 
$extraScripts = ['js/pricing.js']; 
$extraStylesheets = ['css/pricing.css']; 
include 'includes/header.php'; 
?>

		<section class="pricing-section">
			<div class="container">
				<div class="pricing-header">
					<h2 class="display-4 fw-bold mb-4">
						Check out our <span class="text-primary">amazing plans</span>
					</h2>
					<p class="lead">Best pricing for coaches and users</p>
				</div>

				<h2 class="section-title">User</h2>

				<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
					<div class="col-lg-4">
						<div class="pricing-card">
							<h3 class="fw-bold">Standard</h3>
							<p>Weekly plan</p>
							<div class="price">$15/week</div>
							<ul class="list-unstyled mb-4">
								<li class="mb-2">
									✓ Access to +1000 of qualities premade video from coaches
								</li>
								<li class="mb-2">
									✓ Free online tracking include daily progress tracker and
									calories tracker
								</li>
								<li class="mb-2">
									✓ Free nutrition tutorial and meal recommendation
								</li>
								<li class="mb-2">
									✓ Access to live coaches Q&A sessions and events
								</li>
								<li>
									✓ Access to coaches 1 on 1 sessions and community service
								</li>
							</ul>
							<a href="#" class="btn btn-gradient mt-auto">Subscribe</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pricing-card featured">
							<span class="badge bg-primary mb-2">MOST PICKED</span>
							<h3 class="fw-bold">Top picked</h3>
							<p>Monthly plan</p>
							<div class="price">$50/month</div>
							<p>
								<small class="text-muted"><s>$120</s></small>
							</p>
							<ul class="list-unstyled mb-4">
								<li class="mb-2">
									✓ Access to +1000 of qualities premade video from coaches
								</li>
								<li class="mb-2">
									✓ Free online tracking include daily progress tracker and
									calories tracker
								</li>
								<li class="mb-2">
									✓ Free nutrition tutorial and meal recommendation
								</li>
								<li class="mb-2">
									✓ Access to live coaches Q&A sessions and events
								</li>
								<li>
									✓ Access to coaches 1 on 1 sessions and community service
								</li>
							</ul>
							<a href="#" class="btn btn-gradient mt-auto">Subscribe</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pricing-card">
							<span class="badge bg-warning text-dark mb-2"
								>GOLDEN VERSION</span
							>
							<h3 class="fw-bold">Pro</h3>
							<p>Yearly plan</p>
							<div class="price">$200/year</div>
							<ul class="list-unstyled mb-4">
								<li class="mb-2">
									✓ Access to +1000 of qualities premade video from coaches
								</li>
								<li class="mb-2">
									✓ Free online tracking include daily progress tracker and
									calories tracker
								</li>
								<li class="mb-2">
									✓ Free nutrition tutorial and meal recommendation
								</li>
								<li class="mb-2">
									✓ Access to live coaches Q&A sessions and events
								</li>
								<li>
									✓ Access to coaches 1 on 1 sessions and community service
								</li>
							</ul>
							<a href="#" class="btn btn-gradient mt-auto">Subscribe</a>
						</div>
					</div>
				</div>

				<h2 class="section-title mt-5">Coaches</h2>

				<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">
					<div class="col-lg-4">
						<div class="pricing-card">
							<h3 class="fw-bold">Monthly Standard</h3>
							<div class="price">$30/month</div>
							<ul class="list-unstyled mb-4">
								<li class="mb-2">✓ Access to live coaching session</li>
								<li>✓ Access to coaching sessions and comments</li>
							</ul>
							<a href="#" class="btn btn-gradient mt-auto">Buy</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pricing-card">
							<h3 class="fw-bold">Yearly</h3>
							<div class="price">$100/year</div>
							<ul class="list-unstyled mb-4">
								<li class="mb-2">✓ Access to live coaching session</li>
								<li class="mb-2">✓ Access to coaching sessions and comments</li>
								<li>
									✓ Gain review and self portfolio building for higher chance in
									getting clients
								</li>
							</ul>
							<a href="#" class="btn btn-gradient mt-auto">Buy</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pricing-card">
							<h3 class="fw-bold">One time payment</h3>
							<div class="price">$250</div>
							<ul class="list-unstyled mb-4">
								<li class="mb-2">✓ Access to live coaching session</li>
								<li class="mb-2">✓ Access to coaching sessions and comments</li>
								<li class="mb-2">
									✓ Gain review and self portfolio building for higher chance in
									getting clients
								</li>
								<li>✓ One-time pay</li>
							</ul>
							<a href="#" class="btn btn-gradient mt-auto">Buy</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="cta-section">
			<div class="container">
				<h2 class="display-5 fw-bold mb-4">Not sure which plan suits you?</h2>
				<p class="lead mb-4">
					Contact us and we'll offer a one-time free coaching session on how 					things work here.
				</p>
				<a href="contact.html" class="btn btn-light btn-lg">Contact us</a>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>