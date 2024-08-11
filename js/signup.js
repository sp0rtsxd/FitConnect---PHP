document.addEventListener("DOMContentLoaded", function () {
	const toggleSwitch = document.querySelector(
		'.theme-switch input[type="checkbox"]'
	);
	const body = document.body;

	// Check for a saved theme preference in localStorage
	const currentTheme = localStorage.getItem("theme");
	if (currentTheme) {
		document.documentElement.setAttribute("data-theme", currentTheme);
		if (currentTheme === "dark") {
			toggleSwitch.checked = true;
			body.classList.add("dark-mode");
		}
	}

	// Add an event listener to the theme switch
	toggleSwitch.addEventListener("change", function () {
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

	// Form validation
	const form = document.getElementById("signupForm");

	form.addEventListener("submit", function (event) {
		event.preventDefault(); // Prevent default form submission

		// Get form input values
		const fullName = document.getElementById("fullName").value;
		const email = document.getElementById("email").value;
		const password = document.getElementById("password").value;
		const confirmPassword = document.getElementById("confirmPassword").value;

		// Reset error messages
		document.getElementById("emailHelp").style.display = "none";
		document.getElementById("passwordHelp").style.display = "none";
		document.getElementById("confirmPasswordHelp").style.display = "none";

		// Basic Validation
		if (!validateEmail(email)) {
			showError("emailHelp", "Please enter a valid email address.");
			return; // Stop if email is invalid
		}

		if (password.length < 8) {
			showError("passwordHelp", "Password must be at least 8 characters.");
			return;
		}

		if (password !== confirmPassword) {
			showError("confirmPasswordHelp", "Passwords do not match.");
			return;
		}

		// If all validation passes, proceed with signup logic
		simulateSignup();
	});

	function validateEmail(email) {
		// You can use a more robust regular expression for email validation
		return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
	}

	function showError(fieldId, message) {
		const errorElement = document.getElementById(fieldId);
		errorElement.textContent = message;
		errorElement.style.display = "block";
	}

	function simulateSignup() {
		// Add a visual feedback (e.g., loading animation)
		const submitButton = document.querySelector(".btn-signup");
		submitButton.innerHTML =
			'<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Signing Up...';
		submitButton.disabled = true;

		// Simulate a delay (replace with actual signup logic)
		setTimeout(() => {
			// Show the success modal
			$("#successModal").modal("show");

			// Remove loading animation after the delay
			submitButton.innerHTML = "Start Your Journey";
			submitButton.disabled = false;

			// Redirect to the login page after the modal is shown
			setTimeout(() => {
				// Store user data in Local Storage
				const userData = {
					fullName: document.getElementById("fullName").value,
					email: document.getElementById("email").value,
					password: document.getElementById("password").value, // Consider hashing for security in a real app
				};
				localStorage.setItem("userData", JSON.stringify(userData));

				window.location.href = "login.html";
			}, 3000); // 3 seconds delay
		}, 2000); // 2 seconds delay
	}
});
