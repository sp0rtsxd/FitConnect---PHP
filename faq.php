<?php
$pageTitle = "FAQ - FitConnect";
$currentPage = 'faq'; 
$extraScripts = ['js/faq.js']; 
$extraStylesheets = ['css/faq.css']; 
include 'includes/header.php'; 
?>

		<section class="hero-section">
			<div class="container">
				<h1 class="display-4 mb-4 text-center">Frequently Asked Questions</h1>
				<p class="lead text-center mb-5">
					Find answers to common questions about FitConnect
				</p>
				<div class="search-container">
					<input
						type="text"
						class="search-input"
						placeholder="Search FAQs..."
						id="faqSearch"
					/>
				</div>
			</div>
			<div class="hero-shapes">
				<div class="hero-shape"></div>
				<div class="hero-shape"></div>
			</div>
		</section>

		<section class="py-5">
			<div class="container">
				<div class="category-filter mb-4">
					<button class="category-btn active" data-category="all">All</button>
					<button class="category-btn" data-category="account">Account</button>
					<button class="category-btn" data-category="workouts">
						Workouts
					</button>
					<button class="category-btn" data-category="nutrition">
						Nutrition
					</button>
					<button class="category-btn" data-category="billing">Billing</button>
				</div>
				<div class="accordion faq-accordion" id="faqAccordion">
					<div class="accordion-item" data-category="account">
						<h2 class="accordion-header">
							<button
								class="accordion-button collapsed"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#faq1"
							>
								How do I create a FitConnect account?
							</button>
						</h2>
						<div
							id="faq1"
							class="accordion-collapse collapse"
							data-bs-parent="#faqAccordion"
						>
							<div class="accordion-body">
								To create a FitConnect account, simply click on the "Sign Up"
								button on our homepage. Fill in your personal details, choose a
								username and password, and you're ready to start your fitness
								journey!
							</div>
						</div>
					</div>
					<div class="accordion-item" data-category="workouts">
						<h2 class="accordion-header">
							<button
								class="accordion-button collapsed"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#faq2"
							>
								How often should I work out?
							</button>
						</h2>
						<div
							id="faq2"
							class="accordion-collapse collapse"
							data-bs-parent="#faqAccordion"
						>
							<div class="accordion-body">
								The frequency of your workouts depends on your fitness goals and
								current level. Generally, we recommend 3-5 workouts per week,
								but our personalized plans will provide specific recommendations
								tailored to your needs.
							</div>
						</div>
					</div>
					<div class="accordion-item" data-category="nutrition">
						<h2 class="accordion-header">
							<button
								class="accordion-button collapsed"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#faq3"
							>
								Do you provide meal plans?
							</button>
						</h2>
						<div
							id="faq3"
							class="accordion-collapse collapse"
							data-bs-parent="#faqAccordion"
						>
							<div class="accordion-body">
								Yes, we offer customized meal plans as part of our premium
								subscription. Our nutrition experts create plans that align with 								your fitness goals, dietary preferences, and any restrictions
								you may have.
							</div>
						</div>
					</div>
					<div class="accordion-item" data-category="billing">
						<h2 class="accordion-header">
							<button
								class="accordion-button collapsed"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#faq4"
							>
								How do I cancel my subscription?
							</button>
						</h2>
						<div
							id="faq4"
							class="accordion-collapse collapse"
							data-bs-parent="#faqAccordion"
						>
							<div class="accordion-body">
								To cancel your subscription, log into your account, go to the
								'Subscription' tab in your profile settings, and click on
								'Cancel Subscription'. Follow the prompts to complete the
								cancellation process. If you need assistance, our support team
								is always ready to help.
							</div>
						</div>
					</div>
					<!-- Add more FAQ items as needed -->
				</div>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>