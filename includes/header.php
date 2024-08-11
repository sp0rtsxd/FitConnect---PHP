<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title> <!-- Dynamic page title -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <?php if (isset($extraStylesheets)) : ?>
        <?php foreach ($extraStylesheets as $stylesheet) : ?>
            <link rel="stylesheet" href="<?php echo $stylesheet; ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" class="d-inline-block align-top me-2">
                    <defs>
                        <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color: #45a049; stop-opacity: 1" />
                            <stop offset="100%" style="stop-color: #4caf50; stop-opacity: 1" />
                        </linearGradient>
                    </defs>
                    <rect x="1" y="1" width="22" height="22" rx="4" fill="url(#bgGradient)" />
                    <path d="M5,6 h3 a1,1 0 0 1 1,1 v10 a1,1 0 0 1 -1,1 h-3 a1,1 0 0 1 -1,-1 v-10 a1,1 0 0 1 1,-1 z 
                         M16,6 h3 a1,1 0 0 1 1,1 v10 a1,1 0 0 1 -1,1 h-3 a1,1 0 0 1 -1,-1 v-10 a1,1 0 0 1 1,-1 z 
                         M8,10 h8 a1,1 0 0 1 1,1 v2 a1,1 0 0 1 -1,1 h-8 a1,1 0 0 1 -1,-1 v-2 a1,1 0 0 1 1,-1 z" fill="#ffffff" />
                    <path d="M5,7 h3 v10 h-3 v-10 z M16,7 h3 v10 h-3 v-10 z M8,11 h8 v2 h-8 v-2 z" fill="#e6e6e6" opacity="0.3" />
                </svg>
                FitConnect
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'index') ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'about') ? 'active' : ''; ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'pricing') ? 'active' : ''; ?>" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'blog') ? 'active' : ''; ?>" href="blog.php">Blog</a>
                    </li>
                    <!-- "More" Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?php echo ($currentPage === 'faq') ? 'active' : ''; ?>" href="faq.php">FAQ</a></li>
                            <li><a class="dropdown-item <?php echo ($currentPage === 'terms') ? 'active' : ''; ?>" href="terms.php">Terms</a></li>
                            <li><a class="dropdown-item <?php echo ($currentPage === 'privacy') ? 'active' : ''; ?>" href="privacy.php">Privacy</a></li>
                            <li><a class="dropdown-item <?php echo ($currentPage === 'our-service') ? 'active' : ''; ?>" href="our-service.php">Our Service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                    </li>
                    <?php if ($currentPage !== 'dashboard' && $currentPage !== 'profile' && $currentPage !== 'settings') : ?>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="signup.php">Sign Up</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item theme-switch-item">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider">
                                    <i class="fas fa-sun icon sun"></i>
                                    <i class="fas fa-moon icon moon"></i>
                                </div>
                            </label>
                        </div>
                    </li>
                    <?php if ($currentPage === 'dashboard' || $currentPage === 'profile' || $currentPage === 'settings') : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>