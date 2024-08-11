<?php
$pageTitle = "FitConnect - Blog";
$currentPage = 'blog'; 
$extraScripts = ['js/blog.js']; 
$extraStylesheets = ['css/blog.css']; 
include 'includes/header.php'; 
?>

		<header class="hero-section text-center">
			<div class="container">
				<h1 class="display-4 mb-4" data-aos="fade-up">FitConnect Blog</h1>
				<p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
					Stay informed, motivated, and inspired on your fitness journey
				</p>
			</div>
		</header>

		<section class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-md-6 mb-4" data-aos="fade-up">
								<div class="blog-card h-100">
									<img
										src="Meal prep.png"
										class="card-img-top"
										alt="Meal Prepping"
									/>
									<div class="card-body">
										<span class="badge blog-category">NUTRITION</span>
										<h3 class="card-title post-title">
											The Ultimate Guide to Meal Prepping
										</h3>
										<p class="blog-meta">
											<i class="far fa-calendar-alt me-2"></i>May 15, 2024
											<i class="far fa-user ms-3 me-2"></i>By John Doe
										</p>
										<p class="card-text">
											Learn how to save time and stay on track with your
											nutrition goals through effective meal prepping
											strategies.
										</p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div
								class="col-md-6 mb-4"
								data-aos="fade-up"
								data-aos-delay="100"
							>
								<div class="blog-card h-100">
									<img
										src="Yoga poses.png"
										class="card-img-top"
										alt="Yoga Poses"
									/>
									<div class="card-body">
										<span class="badge blog-category">WORKOUTS</span>
										<h3 class="card-title post-title">
											5 Yoga Poses for Better Flexibility
										</h3>
										<p class="blog-meta">
											<i class="far fa-calendar-alt me-2"></i>May 12, 2024
											<i class="far fa-user ms-3 me-2"></i>By Jane Smith
										</p>
										<p class="card-text">
											Improve your flexibility and reduce muscle tension with
											these beginner-friendly yoga poses.
										</p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-4" data-aos="fade-up">
								<div class="blog-card h-100">
									<img
										src="Exercise and mental health.png"
										class="card-img-top"
										alt="Exercise and Mental Health"
									/>
									<div class="card-body">
										<span class="badge blog-category">MENTAL HEALTH</span>
										<h3 class="card-title post-title">
											The Connection Between Exercise and Mental Health
										</h3>
										<p class="blog-meta">
											<i class="far fa-calendar-alt me-2"></i>May 8, 2024
											<i class="far fa-user ms-3 me-2"></i>By Dr. Emily Johnson
										</p>
										<p class="card-text">
											Discover how regular physical activity can boost your
											mood, reduce stress, and improve overall mental
											well-being.
										</p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div
								class="col-md-6 mb-4"
								data-aos="fade-up"
								data-aos-delay="100"
							>
								<div class="blog-card h-100">
									<img
										src="Motivation.png"
										class="card-img-top"
										alt="Motivation"
									/>
									<div class="card-body">
										<span class="badge blog-category">MOTIVATION</span>
										<h3 class="card-title post-title">
											5 Strategies to Stay Motivated on Your Fitness Journey
										</h3>
										<p class="blog-meta">
											<i class="far fa-calendar-alt me-2"></i>May 5, 2024
											<i class="far fa-user ms-3 me-2"></i>By Michael Brown
										</p>
										<p class="card-text">
											Learn practical tips to maintain your motivation and
											overcome obstacles in your fitness journey.
										</p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
						</div>

						<nav aria-label="Blog pagination" class="mt-4">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a
										class="page-link"
										href="#"
										tabindex="-1"
										aria-disabled="true"
										>Previous</a
									>
								</li>
								<li class="page-item active" aria-current="page">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-4">
						<aside class="blog-sidebar">
							<div class="card mb-4" data-aos="fade-left">
								<div class="card-body">
									<h4 class="card-title">Search</h4>
									<form class="search-form">
										<div class="input-group">
											<input
												type="text"
												class="form-control"
												placeholder="Search blog posts..."
											/>
											<button class="btn btn-primary" type="submit">
												<i class="fas fa-search"></i>
											</button>
										</div>
									</form>
								</div>
							</div>
							<div class="card mb-4" data-aos="fade-left" data-aos-delay="100">
								<div class="card-body">
									<h4 class="card-title">Categories</h4>
									<ul class="category-list list-unstyled">
										<li>
											<a href="#"
												>Workouts
												<span class="badge bg-primary float-end">12</span></a
											>
										</li>
										<li>
											<a href="#"
												>Nutrition
												<span class="badge bg-primary float-end">8</span></a
											>
										</li>
										<li>
											<a href="#"
												>Mental Health
												<span class="badge bg-primary float-end">5</span></a
											>
										</li>
										<li>
											<a href="#"
												>Motivation
												<span class="badge bg-primary float-end">7</span></a
											>
										</li>
										<li>
											<a href="#"
												>Equipment
												<span class="badge bg-primary float-end">4</span></a
											>
										</li>
									</ul>
								</div>
							</div>
							<div class="card mb-4" data-aos="fade-left" data-aos-delay="200">
								<div class="card-body">
									<h4 class="card-title">Recent Posts</h4>
									<ul class="list-unstyled">
										<li class="mb-3">
											<a href="#" class="text-decoration-none"
												>The Benefits of Morning Workouts</a
											>
											<br />
											<span class="post-date">May 1, 2024</span> <br />
										</li>
										<li class="mb-3">
											<a href="#" class="text-decoration-none"
												>Healthy Snacks for Pre and Post Workout</a
											>
											<br />
											<span class="post-date">April 28, 2024</span> <br />
										</li>
										<li>
											<a href="#" class="text-decoration-none"
												>How to Choose the Right Running Shoes</a
											>
											<br />
											<span class="post-date">April 25, 2024</span> <br />
										</li>
									</ul>
								</div>
							</div>
							<div class="card" data-aos="fade-left" data-aos-delay="300">
								<div class="card-body">
									<h4 class="card-title">Tags</h4>
									<div class="tag-cloud">
										<a href="#" class="tag">Fitness</a>
										<a href="#" class="tag">Nutrition</a>
										<a href="#" class="tag">Weightloss</a>
										<a href="#" class="tag">Yoga</a>
										<a href="#" class="tag">Cardio</a>
										<a href="#" class="tag">Strength</a>
										<a href="#" class="tag">Meditation</a>
										<a href="#" class="tag">Wellness</a>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>