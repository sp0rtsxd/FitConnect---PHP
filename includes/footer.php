<footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>FitConnect</h5>
                    <p>Empowering your fitness journey with expert guidance and community support.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Home</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                        <li><a href="blog.php" class="text-white">Blog</a></li>
                        <li><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <address>
                        <p><i class="fas fa-map-marker-alt me-2"></i>123 Fitness Street, Healthy City, FC 12345</p>
                        <p><i class="fas fa-phone me-2"></i>(123) 456-7890</p>
                        <p><i class="fas fa-envelope me-2"></i>info@fitconnect.com</p>
                    </address>
                </div>
            </div>
            <hr class="my-4" />
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p>© 2024 FitConnect. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="terms.php" class="text-white me-3">Terms of Service</a>
                    <a href="privacy.php" class="text-white">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <?php if (isset($extraScripts)) : ?>
        <?php foreach ($extraScripts as $script) : ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>