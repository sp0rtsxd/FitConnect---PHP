// Dark mode toggle
const toggleSwitch = document.querySelector(
	'.theme-switch input[type="checkbox"]'
);
const currentTheme = localStorage.getItem("theme");

if (currentTheme) {
	document.documentElement.setAttribute("data-theme", currentTheme);
	if (currentTheme === "dark") {
		toggleSwitch.checked = true;
		document.body.classList.add("dark-mode");
	}
}

function switchTheme(e) {
	if (e.target.checked) {
		document.documentElement.setAttribute("data-theme", "dark");
		localStorage.setItem("theme", "dark");
		document.body.classList.add("dark-mode");
	} else {
		document.documentElement.setAttribute("data-theme", "light");
		localStorage.setItem("theme", "light");
		document.body.classList.remove("dark-mode");
	}
}

toggleSwitch.addEventListener("change", switchTheme, false);

// FAQ search functionality
const searchInput = document.getElementById("faqSearch");
const faqItems = document.querySelectorAll(".accordion-item");

searchInput.addEventListener("input", function () {
	const searchTerm = this.value.toLowerCase();
	faqItems.forEach((item) => {
		const question = item
			.querySelector(".accordion-button")
			.textContent.toLowerCase();
		const answer = item
			.querySelector(".accordion-body")
			.textContent.toLowerCase();
		if (question.includes(searchTerm) || answer.includes(searchTerm)) {
			item.style.display = "block";
		} else {
			item.style.display = "none";
		}
	});
});

// Category filter functionality
const categoryButtons = document.querySelectorAll(".category-btn");

categoryButtons.forEach((button) => {
	button.addEventListener("click", function () {
		const category = this.getAttribute("data-category");

		// Remove active class from all buttons
		categoryButtons.forEach((btn) => btn.classList.remove("active"));
		// Add active class to clicked button
		this.classList.add("active");

		faqItems.forEach((item) => {
			if (
				category === "all" ||
				item.getAttribute("data-category") === category
			) {
				item.style.display = "block";
			} else {
				item.style.display = "none";
			}
		});
	});
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth",
		});
	});
});
