<?php
$pageTitle = "FitConnect - Transform Your Body, Transform Your Life";
$currentPage = 'index'; 
$extraScripts = [
    'https://cdn.jsdelivr.net/npm/chart.js',
    'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js',
    'js/index.js' 
];
$extraStylesheets = ['css/index.css']; 
include 'includes/header.php'; 
?>

    <header class="hero-section text-white text-center">
      <div class="hero-content">
        <h1 class="display-4 mb-4" data-aos="fade-up">
          Transform Your Body, Transform Your Life
        </h1>
        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
          Connect with expert coaches, find nearby gyms, and achieve your
          fitness goals with FitConnect.
        </p>
        <a
          href="#signup"
          class="btn btn-light btn-lg pulse-button"
          data-aos="fade-up"
          data-aos-delay="200"
          >Start Your Journey</a
        >
      </div>
      <div class="hero-shapes">
        <div class="hero-shape"></div>
        <div class="hero-shape"></div>
        <div class="hero-shape"></div>
      </div>
    </header>

    <section id="services" class="py-5">
      <div class="container">
        <h2 class="section-title" data-aos="fade-up">Our Services</h2>
        <div class="services-container">
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

          <div class="service-card" data-aos="fade-up" data-aos-delay="200">
            <div class="service-content">
              <div class="service-icon">
                <i class="fas fa-users"></i>
              </div>
              <h3 class="service-title">Group Classes</h3>
              <p class="service-description">
                Join our energetic group fitness classes for a fun and
                motivating workout experience with like-minded individuals.
              </p>
            </div>
            <div class="service-overlay">
              <a href="#" class="service-cta">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="goal-calculator" class="py-5">
      <div class="container">
        <h2 class="section-title" data-aos="fade-up">
          Fitness Goal Calculator
        </h2>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card shadow-sm">
              <div class="card-body p-4">
                <form id="goalForm">
                  <div class="mb-3">
                    <label for="weight" class="form-label"
                      >Current Weight (kg)</label
                    >
                    <input
                      type="number"
                      class="form-control"
                      id="weight"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="height" class="form-label">Height (cm)</label>
                    <input
                      type="number"
                      class="form-control"
                      id="height"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input
                      type="number"
                      class="form-control"
                      id="age"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="goal" class="form-label">Goal</label>
                    <select class="form-select" id="goal" required>
                      <option value="lose">Lose Weight</option>
                      <option value="gain">Gain Muscle</option>
                      <option value="maintain">Maintain Weight</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    Calculate
                  </button>
                </form>
                <div id="result" class="mt-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="coaches" class="py-5">
      <div class="container">
        <h2 class="section-title" data-aos="fade-up">Our Top Coaches</h2>
        <div class="row">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="coach-card">
              <img
                src="https://i.pinimg.com/736x/d7/14/a5/d714a533ba7c2b569229d866a3a53eb1.jpg"
                alt="Coach 1"
                class="card-img-top"
                style="width: 400; height: 250"
              />
              <div class="card-body">
                <h5 class="card-title">Sarah Johnson</h5>
                <p class="card-text">
                  Specializes in HIIT and Strength Training
                </p>
                <a href="#" class="btn btn-outline-primary">View Profile</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="coach-card">
              <img
                src="https://i.pinimg.com/564x/26/f9/46/26f946bcbc5fbc98ae9fbf10cf2a3ce9.jpg"
                alt="Coach 2"
                class="card-img-top"
                style="width: 400; height: 250"
              />
              <div class="card-body">
                <h5 class="card-title">Mike Thompson</h5>
                <p class="card-text">Expert in Nutrition and Weight Loss</p>
                <a href="#" class="btn btn-outline-primary">View Profile</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="coach-card">
              <img
                src="https://i.pinimg.com/736x/a6/dd/32/a6dd3248a8493372bd324363f7ccf5e9.jpg"
                alt="Coach 3"
                class="card-img-top"
                style="width: 400; height: 250"
              />
              <div class="card-body">
                <h5 class="card-title">Emma Rodriguez</h5>
                <p class="card-text">Yoga and Mindfulness Instructor</p>
                <a href="#" class="btn btn-outline-primary">View Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="py-5">
      <div class="container">
        <h2 class="section-title" data-aos="fade-up">What Our Members Say</h2>
        <div class="row">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="testimonial-item p-4">
              <p class="mb-0">
                "FitConnect helped me achieve my fitness goals faster than I
                ever thought possible!"
              </p>
              <div class="d-flex align-items-center mt-3">
                <img
                  src="https://i.pinimg.com/736x/d7/14/a5/d714a533ba7c2b569229d866a3a53eb1.jpg"
                  alt="John Doe"
                  class="rounded-circle me-3"
                  style="width: 50px; height: 50px"
                />
                <div>
                  <h5 class="mb-0">John Doe</h5>
                  <small class="text-muted">Lost 30 lbs in 3 months</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item p-4">
              <p class="mb-0">
                "The nutrition guidance has been a game-changer for my overall
                health and energy levels."
              </p>
              <div class="d-flex align-items-center mt-3">
                <img
                  src="https://i.pinimg.com/736x/12/b8/6d/12b86d35073704e2f956ef442fdd3e07.jpg"
                  alt="Jane Smith"
                  class="rounded-circle me-3"
                  style="width: 50px; height: 50px"
                />
                <div>
                  <h5 class="mb-0">Jane Smith</h5>
                  <small class="text-muted">Improved energy and vitality</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item p-4">
              <p class="mb-0">
                "Finding the perfect gym near me was so easy with FitConnect.
                Highly recommended!"
              </p>
              <div class="d-flex align-items-center mt-3">
                <img
                  src="https://i.pinimg.com/564x/d9/f8/be/d9f8be58d36e5dbd1bc7a0c76d2f2d87.jpg"
                  alt="Mike Johnson"
                  class="rounded-circle me-3"
                  style="width: 50px; height: 50px"
                />
                <div>
                  <h5 class="mb-0">Mike Johnson</h5>
                  <small class="text-muted">Found his ideal workout spot</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="find-gym" class="py-5">
      <div class="container">
        <h2 class="section-title" data-aos="fade-up">Find a Gym Near You</h2>
        <div id="gymMap" data-aos="zoom-in"></div>
      </div>
    </section>

    <section id="blog" class="py-5">
      <div class="container">
        <h2 class="section-title" data-aos="fade-up">
          Fitness Tips & Articles
        </h2>
        <div class="row">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="blog-preview">
              <img
                src="https://i.pinimg.com/564x/1e/a6/43/1ea6435ea27fd63aa045c8cab7d0b604.jpg"
                alt="Blog 1"
                class="card-img-top"
                style="width: 400px; height: 250px"
              />
              <div class="card-body">
                <h5 class="card-title">The Ultimate Guide to Meal Prepping</h5>
                <p class="card-text">
                  Learn how to save time and stay on track with your nutrition
                  goals through effective meal prepping strategies.
                </p>
                <a href="#" class="btn btn-link">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="blog-preview">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkc4MWICH01ijXjdsLiFRJmMKkpbrGpfdM0Q&s"
                alt="Blog 2"
                class="card-img-top"
                style="width: 400px; height: 250px"
              />
              <div class="card-body">
                <h5 class="card-title">
                  5 Strategies to Stay Motivated on Your Fitness Journey
                </h5>
                <p class="card-text">
                  Learn practical tips to maintain your motivation and overcome
                  obstacles in your fitness journey.
                </p>
                <a href="#" class="btn btn-link">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="blog-preview">
              <img
                src="https://static.scientificamerican.com/sciam/cache/file/8D40D99B-CD17-4327-8074FA00EFFBA06B_source.jpg"
                alt="Blog 3"
                class="card-img-top"
                style="width: 400px; height: 250px"
              />
              <div class="card-body">
                <h5 class="card-title">Mindfulness and Fitness</h5>
                <p class="card-text">
                  Learn how incorporating mindfulness into your fitness routine
                  can enhance your results.
                </p>
                <a href="#" class="btn btn-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="progress" class="py-5">
      <div class="container">
        <h2 class="section-title" data-aos="fade-up">Track Your Progress</h2>
        <div class="card shadow-sm">
          <div class="card-body">
            <canvas id="progressChart"></canvas>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="cta-section">
      <div class="container text-center">
        <h2 class="mb-4">Ready to Start Your Fitness Journey?</h2>
        <a href="#signup" class="btn btn-light btn-lg">Join FitConnect Today</a>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>