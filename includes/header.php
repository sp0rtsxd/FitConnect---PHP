<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title>
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
    <style>
        :root {
            --primary-color: #4caf50;
            --secondary-color: #45a049;
            --text-color: #333;
            --light-color: #f4f4f4;
            --dark-bg-color: #121212;
            --dark-text-color: #f4f4f4;
            --link-color: #2196f3;
            --bg-color: #ffffff;
            --card-bg: #f8f9fa;
        }

        body {
            font-family: "Alexandria", sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: var(--bg-color);
            padding: 1rem 2rem;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-brand,
        .navbar-light .nav-link {
            color: var(--text-color) !important;
        }

        .navbar-light .nav-link:hover {
            color: var(--link-color) !important;
        }

        .theme-switch-wrapper {
            display: flex;
            align-items: center;
        }

        .theme-switch {
            display: inline-block;
            height: 34px;
            position: relative;
            width: 60px;
        }

        .theme-switch input {
            display: none;
        }

        .slider {
            background-color: #ccc;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: 0.4s;
            border-radius: 34px;
        }

        .slider:before {
            background-color: #fff;
            bottom: 4px;
            content: "";
            height: 26px;
            left: 4px;
            position: absolute;
            transition: 0.4s;
            width: 26px;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #2196f3;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        .slider .icon {
            color: #f39c12;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            transition: opacity 0.3s ease;
            font-size: 18px;
        }

        .slider .sun {
            left: 6px;
        }

        .slider .moon {
            right: 6px;
            opacity: 0;
        }

        input:checked+.slider .sun {
            opacity: 0;
        }

        input:checked+.slider .moon {
            opacity: 1;
        }

        .dark-mode {
            --text-color: #e9e9e9;
            --bg-color: #121212;
            --card-bg: #212529;
        }

        .dark-mode .navbar {
            background-color: var(--card-bg);
        }

        .dark-mode .text-muted {
            color: #adb5bd !important;
        }

        @keyframes liftDumbbell {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-2px) rotate(-3deg); }
            75% { transform: translateY(-2px) rotate(3deg); }
        }

        @keyframes pumpIron {
            0%, 100% { transform: scaleX(1); }
            50% { transform: scaleX(1.1); }
        }

        @keyframes glowPulse {
            0%, 100% { filter: drop-shadow(0 0 2px rgba(76, 175, 80, 0.5)); }
            50% { filter: drop-shadow(0 0 8px rgba(76, 175, 80, 0.8)); }
        }

        @keyframes colorShift {
            0%, 100% { stop-color: #4caf50; }
            50% { stop-color: #45a049; }
        }

        .navbar-brand svg {
            transition: all 0.3s ease;
        }

        .navbar-brand:hover svg {
            transform: scale(1.1);
        }

        .navbar-brand svg rect {
            animation: glowPulse 2s infinite;
        }

        .navbar-brand svg #bgGradient stop {
            animation: colorShift 4s infinite alternate;
        }

        .navbar-brand svg path[fill="#ffffff"] {
            animation: liftDumbbell 2s ease-in-out infinite;
        }

        .navbar-brand:hover svg path[fill="#ffffff"] {
            animation: liftDumbbell 0.5s ease-in-out infinite;
        }

        .navbar-brand svg path[fill="#e6e6e6"] {
            animation: pumpIron 2s ease-in-out infinite;
        }

        .navbar-brand:hover svg path[fill="#e6e6e6"] {
            animation: pumpIron 0.5s ease-in-out infinite;
        }

        .navbar-brand svg {
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover svg {
            transform: perspective(100px) rotateX(5deg) rotateY(-5deg) scale(1.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
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