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

// Scroll to top button
const scrollToTopBtn = document.getElementById("scrollToTop");

window.addEventListener("scroll", () => {
	if (window.pageYOffset > 100) {
		scrollToTopBtn.classList.add("active");
	} else {
		scrollToTopBtn.classList.remove("active");
	}
});

scrollToTopBtn.addEventListener("click", (e) => {
	e.preventDefault();
	window.scrollTo({ top: 0, behavior: "smooth" });
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

// Add hover effect to service cards
const serviceCards = document.querySelectorAll(".service-card");
serviceCards.forEach((card) => {
	card.addEventListener("mouseenter", () => {
		card.style.transform = "scale(1.05) translateY(-10px)";
		card.style.boxShadow = "0 20px 40px rgba(0, 0, 0, 0.2)";
	});

	card.addEventListener("mouseleave", () => {
		card.style.transform = "scale(1) translateY(0)";
		card.style.boxShadow = "none";
	});
});

// Add parallax effect to hero shapes
document.addEventListener("mousemove", (e) => {
	const shapes = document.querySelectorAll(".hero-shape");
	const x = e.clientX / window.innerWidth;
	const y = e.clientY / window.innerHeight;

	shapes.forEach((shape, index) => {
		const speed = (index + 1) * 0.2;
		const xOffset = (window.innerWidth / 2 - e.clientX) * speed;
		const yOffset = (window.innerHeight / 2 - e.clientY) * speed;
		shape.style.transform = `translate(${xOffset}px, ${yOffset}px) rotate(${
			xOffset * 0.02
		}deg)`;
	});
});
