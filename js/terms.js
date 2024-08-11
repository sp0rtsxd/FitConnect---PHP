// Initialize AOS
AOS.init({
	duration: 1000,
	once: true,
});

// Theme toggle
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
		document.body.classList.add("dark-mode");
		localStorage.setItem("theme", "dark");
	} else {
		document.documentElement.setAttribute("data-theme", "light");
		document.body.classList.remove("dark-mode");
		localStorage.setItem("theme", "light");
	}
}

toggleSwitch.addEventListener("change", switchTheme, false);

// Add smooth scrolling for sidebar navigation links
document.querySelectorAll('.terms-nav a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth",
		});
	});
});
