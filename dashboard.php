<?php
$pageTitle = "Dashboard - FitConnect";
$currentPage = 'dashboard'; 
$extraScripts = ['https://cdn.jsdelivr.net/npm/chart.js', 'js/dashboard.js']; 
$extraStylesheets = ['css/dashboard.css']; 
include 'includes/header.php'; 
?>

    <div class="dashboard-container">
      <div class="sidebar">
        <h3><i class="fas fa-user me-2"></i> Welcome, [User Name]!</h3>
        <hr />
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#workout"
              ><i class="fas fa-dumbbell me-2"></i>Workout Plans</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#progress"
              ><i class="fas fa-chart-line me-2"></i>Progress Tracking</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nutrition"
              ><i class="fas fa-utensils me-2"></i>Nutrition Guidance</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#community"
              ><i class="fas fa-users me-2"></i>Community Forum</a
            >
          </li>
        </ul>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fas fa-running me-2"></i> Activity Today
                </h5>
                <h2 class="display-4">8,750</h2>
                <p class="card-text text-muted">Steps Taken</p>
                <div class="progress">
                  <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: 75%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fas fa-heartbeat me-2"></i> Calories Burned
                </h5>
                <h2 class="display-4">480</h2>
                <p class="card-text text-muted">kcal</p>
                <div class="progress">
                  <div
                    class="progress-bar bg-warning"
                    role="progressbar"
                    style="width: 55%"
                    aria-valuenow="55"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fas fa-chart-line me-2"></i> Weekly Progress
                </h5>
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>