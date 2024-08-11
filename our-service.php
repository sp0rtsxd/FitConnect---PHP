<?php
$pageTitle = "FitConnect - Our Services";
$currentPage = 'our-service'; 
$extraScripts = ['js/our-service.js']; 
$extraStylesheets = ['css/our-service.css']; 
include 'includes/header.php'; 
?>

		<header class="hero-section text-white text-center">
			<div class="hero-content">
				<h1 class="display-4 mb-4" data-aos="fade-up">Our Services</h1>
				<p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
					Discover how FitConnect can help you achieve your fitness goals
				</p>
			</div>
			<div class="hero-shapes">
				<div class="hero-shape"></div>
				<div class="hero-shape"></div>
				<div class="hero-shape"></div>
			</div>
		</header>

		<main class="container my-5">
			<div class="services-container">
				<!-- Personal Training -->
				<div class="service-card" data-aos="fade-up">
					<div class="service-content">
						<div class="service-icon">
							<i class="fas fa-dumbbell"></i>
						</div>
						<h3 class="service-title">Personal Training</h3>
						<p class="service-description">
							Get one-on-one guidance from certified trainers to achieve your
							fitness goals faster and more effectively.
						</p>
					</div>
					<div class="service-overlay">
						<a href="#" class="service-cta">Learn More</a>
					</div>
				</div>

				<!-- Nutrition Planning -->
				<div class="service-card" data-aos="fade-up" data-aos-delay="100">
					<div class="service-content">
						<div class="service-icon">
							<i class="fas fa-utensils"></i>
						</div>
						<h3 class="service-title">Nutrition Planning</h3>
						<p class="service-description">
							Receive customized meal plans and nutrition advice to fuel your
							workouts and support your health goals.
						</p>
					</div>
					<div class="service-overlay">
						<a href="#" class="service-cta">Learn More</a>
					</div>
				</div>

				<!-- Group Classes -->
				<div class="service-card" data-aos="fade-up" data-aos-delay="200">
					<div class="service-content">
						<div class="service-icon">
							<i class="fas fa-users"></i>
						</div>
						<h3 class="service-title">Group Classes</h3>
						<p class="service-description">
							Join our energetic group fitness classes for a fun and motivating
							workout experience with like-minded individuals.
						</p>
					</div>
					<div class="service-overlay">
						<a href="#" class="service-cta">Learn More</a>
					</div>
				</div>

				<!-- Mobile App -->
				<div class="service-card" data-aos="fade-up">
					<div class="service-content">
						<div class="service-icon">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<h3 class="service-title">Mobile App</h3>
						<p class="service-description">
							Track your progress, access workout plans, and connect with
							trainers anytime, anywhere with our mobile app.
						</p>
					</div>
					<div class="service-overlay">
						<a href="#" class="service-cta">Learn More</a>
					</div>
				</div>

				<!-- Health Monitoring -->
				<div class="service-card" data-aos="fade-up" data-aos-delay="100">
					<div class="service-content">
						<div class="service-icon">
							<i class="fas fa-heartbeat"></i>
						</div>
						<h3 class="service-title">Health Monitoring</h3>
						<p class="service-description">
							Keep track of your vital health metrics and receive personalized
							insights to optimize your overall well-being.
						</p>
					</div>
					<div class="service-overlay">
						<a href="#" class="service-cta">Learn More</a>
					</div>
				</div>

				<!-- Mindfulness & Meditation -->
				<div class="service-card" data-aos="fade-up" data-aos-delay="200">
					<div class="service-content">
						<div class="service-icon">
							<i class="fas fa-brain"></i>
						</div>
						<h3 class="service-title">Mindfulness & Meditation</h3>
						<p class="service-description">
							Enhance your mental well-being with guided meditation sessions and
							mindfulness exercises.
						</p>
					</div>
					<div class="service-overlay">
						<a href="#" class="service-cta">Learn More</a>
					</div>
				</div>
			</div>
		</main>

<?php include 'includes/footer.php'; ?>