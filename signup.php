<?php
$pageTitle = "Join FitConnect - Transform Your Fitness Journey";
$currentPage = 'signup'; 
$extraScripts = ['js/signup.js']; 
$extraStylesheets = ['css/signup.css']; 
include 'includes/header.php'; 
?>

    <div class="signup-container">
      <div class="left-panel">
        <i
          class="fas fa-dumbbell fitness-element"
          style="top: 10%; left: 20%"
        ></i>
        <i
          class="fas fa-heartbeat fitness-element"
          style="top: 30%; right: 15%"
        ></i>
        <i
          class="fas fa-running fitness-element"
          style="bottom: 25%; left: 10%"
        ></i>
        <i
          class="fas fa-bicycle fitness-element"
          style="bottom: 10%; right: 20%"
        ></i>

        <h1>Transform Your Life</h1>
        <p class="lead mb-5">Join FitConnect and unleash your full potential</p>

        <div class="testimonial">
          "FitConnect changed my life! I've never felt healthier." - Sarah K.
        </div>
        <div class="testimonial">
          "The personalized workouts are amazing!" - Mike T.
        </div>

        <div class="social-proof">
          <i class="fas fa-user-circle me-2"></i>
          <i class="fas fa-user-circle me-2"></i>
          <i class="fas fa-user-circle me-2"></i>
          <i class="fas fa-user-circle me-2"></i>
          <p class="mb-0">
            Join 10,000+ members already crushing their fitness goals!
          </p>
        </div>
      </div>
      <div class="right-panel">
        <form class="signup-form" id="signupForm">
          <h2>Create Your Account</h2>

          <div class="form-group">
            <i class="fas fa-user input-icon"></i>
            <input
              type="text"
              class="form-control"
              id="fullName"
              placeholder="Full Name"
              required
            />
          </div>
          <div class="form-group">
            <i class="fas fa-envelope input-icon"></i>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Email Address"
              required
            />
            <div
              id="emailHelp"
              class="form-text invalid-feedback"
              style="display: none"
            >
              Please enter a valid email address.
            </div>
          </div>
          <div class="form-group">
            <i class="fas fa-lock input-icon"></i>
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="Password"
              required
            />
            <div
              id="passwordHelp"
              class="form-text invalid-feedback"
              style="display: none"
            >
              Password must be at least 8 characters long.
            </div>
          </div>
          <div class="form-group">
            <i class="fas fa-lock input-icon"></i>
            <input
              type="password"
              class="form-control"
              id="confirmPassword"
              placeholder="Confirm Password"
              required
            />
            <div
              id="confirmPasswordHelp"
              class="form-text invalid-feedback"
              style="display: none"
            >
              Passwords do not match.
            </div>
          </div>

          <button type="submit" class="btn btn-signup">
            Start Your Journey
          </button>
          <p class="mt-3 text-center">
            Already a member? <a href="login.php">Log In</a>
          </p>
        </form>
      </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <div id="checkmark" class="text-center mb-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="80"
                height="80"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#4caf50"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="checkmark-icon"
              >
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <h3 class="modal-title mb-3">Signup successful!</h3>
            <p class="lead">
              You will be redirected to the login page shortly.
            </p>
          </div>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>