<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>FitConnect</h5>
        <p>Empowering your fitness journey with expert guidance and community support.</p>
        <div class="social-icons">
          <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="about.php" class="text-white">About Us</a></li>
          <li><a href="our-service.php" class="text-white">Our Services</a></li>
          <li><a href="faq.php" class="text-white">FAQ</a></li>
          <li><a href="contact.php" class="text-white">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <address>
          <p><i class="fas fa-map-marker-alt me-2"></i> 123 Fitness Street, Healthy City, FC 12345</p>
          <p><i class="fas fa-phone me-2"></i> (123) 456-7890</p>
          <p><i class="fas fa-envelope me-2"></i> info@fitconnect.com</p>
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
<script>
  // Theme Switch Logic
  document.addEventListener("DOMContentLoaded", function() {
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    const body = document.body;

    const currentTheme = localStorage.getItem("theme");
    if (currentTheme) {
      document.documentElement.setAttribute("data-theme", currentTheme);
      if (currentTheme === "dark") {
        toggleSwitch.checked = true;
        body.classList.add("dark-mode");
      }
    }

    toggleSwitch.addEventListener("change", function() {
      if (this.checked) {
        document.documentElement.setAttribute("data-theme", "dark");
        localStorage.setItem("theme", "dark");
        body.classList.add("dark-mode");
      } else {
        document.documentElement.setAttribute("data-theme", "light");
        localStorage.setItem("theme", "light");
        body.classList.remove("dark-mode");
      }
    });
  });
</script>
</body>
</html>