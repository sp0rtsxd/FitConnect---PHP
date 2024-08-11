const toggleSwitch = document.querySelector(
        '.theme-switch input[type="checkbox"]'
      );
      const currentTheme = localStorage.getItem("theme");

      if (currentTheme) {
        document.documentElement.setAttribute("data-theme", currentTheme);
        if (currentTheme === "dark") {
          toggleSwitch.checked = true;
        }
      }

      function switchTheme(e) {
        if (e.target.checked) {
          document.documentElement.setAttribute("data-theme", "dark");
          localStorage.setItem("theme", "dark");
        } else {
          document.documentElement.setAttribute("data-theme", "light");
          localStorage.setItem("theme", "light");
        }
      }

      toggleSwitch.addEventListener("change", switchTheme, false);

      document
        .getElementById("loginForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          // Add your login logic here
          console.log("Login attempted");
          simulateLogin();
        });

      function simulateLogin() {
        const storedUserData = JSON.parse(localStorage.getItem("userData"));

        // Get entered credentials
        const enteredEmail = document.querySelector(
          'input[type="email"]'
        ).value;
        const enteredPassword = document.querySelector(
          'input[type="password"]'
        ).value;

        // Compare credentials (in a real app, hash the entered password before comparison)
        if (
          storedUserData &&
          storedUserData.email === enteredEmail &&
          storedUserData.password === enteredPassword
        ) {
          // Successful login
          alert("Login successful!");
          window.location.href = "dashboard.html"; // Redirect to dashboard
        } else {
          // Invalid credentials
          alert("Invalid email or password.");
        }
      }

      // Add floating animation to shapes
      const shapes = document.querySelectorAll(".shape");
      shapes.forEach((shape) => {
        shape.style.animationDelay = `${Math.random() * 2}s`;
      });

      // Add subtle hover effect to social login buttons
      const socialButtons = document.querySelectorAll(".social-login a");
      socialButtons.forEach((button) => {
        button.addEventListener("mouseenter", () => {
          button.style.transform = "translateY(-3px)";
          button.style.boxShadow = "0 4px 8px rgba(0,0,0,0.2)";
        });
        button.addEventListener("mouseleave", () => {
          button.style.transform = "translateY(0)";
          button.style.boxShadow = "none";
        });
      });

      // Add a pulsating effect to the login button on hover
      const loginButton = document.querySelector(".btn-login");
      loginButton.addEventListener("mouseenter", () => {
        loginButton.classList.add("pulse");
      });
      loginButton.addEventListener("mouseleave", () => {
        loginButton.classList.remove("pulse");
      });