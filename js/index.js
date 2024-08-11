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
	updateChartColors(); // Update chart colors on theme switch
	// Update map tiles for dark mode
	tileLayer.setUrl(
		getComputedStyle(document.documentElement).getPropertyValue(
			"--map-tile-url"
		)
	);
	updateMapTiles(); // Update map tiles on theme switch
}

toggleSwitch.addEventListener("change", switchTheme, false);

// Goal Calculator
document.getElementById("goalForm").addEventListener("submit", function (e) {
	e.preventDefault();
	const weight = parseFloat(document.getElementById("weight").value);
	const height = parseFloat(document.getElementById("height").value);
	const age = parseFloat(document.getElementById("age").value);
	const goal = document.getElementById("goal").value;

	if (isNaN(weight) || isNaN(height) || isNaN(age)) {
		alert("Please enter valid numbers for weight, height, and age.");
		return;
	}
	const bmr = 10 * weight + 6.25 * height - 5 * age + 5;
	let recommendation = "";

	switch (goal) {
		case "lose":
			recommendation = `To lose weight, aim for a daily calorie intake of ${Math.round(
				bmr * 0.85
			)} calories.`;
			break;
		case "gain":
			recommendation = `To gain muscle, aim for a daily calorie intake of ${Math.round(
				bmr * 1.15
			)} calories.`;
			break;
		case "maintain":
			recommendation = `To maintain your weight, aim for a daily calorie intake of ${Math.round(
				bmr
			)} calories.`;
			break;
		default:
			recommendation = "Please select a valid goal.";
	}

	document.getElementById(
		"result"
	).innerHTML = `<p class="alert alert-success">${recommendation}</p>`;
});

const map = L.map("gymMap").setView([51.505, -0.09], 13);
let tileLayer = L.tileLayer(
	getComputedStyle(document.documentElement).getPropertyValue("--map-tile-url"),
	{
		attribution: "© OpenStreetMap contributors",
	}
).addTo(map);

// Add sample gym markers
const gymIcon = L.icon({
	iconUrl:
		"https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png",
	shadowUrl:
		"https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png",
	iconSize: [25, 41],
	iconAnchor: [12, 41],
	popupAnchor: [1, -34],
	shadowSize: [41, 41],
});

L.marker([51.5, -0.09], { icon: gymIcon })
	.addTo(map)
	.bindPopup("FitZone Gym<br>Open 24/7")
	.openPopup();

L.marker([51.51, -0.1], { icon: gymIcon })
	.addTo(map)
	.bindPopup("PowerLift Center<br>5AM - 11PM");

// Update map tiles for dark mode
function updateMapTiles() {
	tileLayer.setUrl(
		getComputedStyle(document.documentElement).getPropertyValue(
			"--map-tile-url"
		)
	);
}

// Progress Chart
const ctx = document.getElementById("progressChart").getContext("2d");
const progressChart = new Chart(ctx, {
	type: "line",
	data: {
		labels: ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5", "Week 6"],
		datasets: [
			{
				label: "Weight (kg)",
				data: [80, 79, 78, 77.5, 76.8, 76],
				backgroundColor: "rgba(75, 192, 192, 0.2)",
				borderColor: "rgb(75, 192, 192)",
				borderWidth: 2,
				tension: 0.4,
			},
		],
	},
	options: {
		responsive: true,
		scales: {
			y: {
				beginAtZero: false,
				grid: {
					color: "rgba(0, 0, 0, 0.1)", // Default grid color
				},
			},
			x: {
				grid: {
					color: "rgba(0, 0, 0, 0.1)", // Default grid color
				},
			},
		},
	},
});

// Update chart colors based on theme
function updateChartColors() {
	const isDarkMode = document.body.classList.contains("dark-mode");
	progressChart.data.datasets[0].backgroundColor = isDarkMode
		? "rgba(75, 192, 192, 0.4)"
		: "rgba(75, 192, 192, 0.2)";
	progressChart.data.datasets[0].borderColor = isDarkMode
		? "rgb(100, 255, 255)"
		: "rgb(75, 192, 192)";
	progressChart.options.scales.y.grid.color = isDarkMode
		? "rgba(255, 255, 255, 0.1)"
		: "rgba(0, 0, 0, 0.1)";
	progressChart.options.scales.x.grid.color = isDarkMode
		? "rgba(255, 255, 255, 0.1)"
		: "rgba(0, 0, 0, 0.1)";
	progressChart.update();
}

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

// Add typing effect to hero tagline
const heroTagline = document.querySelector(".hero-section .lead");
const taglineText = heroTagline.textContent;
heroTagline.textContent = "";
let charIndex = 0;

function typeTagline() {
	if (charIndex < taglineText.length) {
		heroTagline.textContent += taglineText.charAt(charIndex);
		charIndex++;
		setTimeout(typeTagline, 50);
	}
}

setTimeout(typeTagline, 1000);

// Add animation to service icons
function animateServiceIcons() {
	const icons = document.querySelectorAll(".service-icon i");
	icons.forEach((icon) => {
		icon.style.transform = "scale(1.2)";
		setTimeout(() => {
			icon.style.transform = "scale(1)";
		}, 200);
	});
}

setInterval(animateServiceIcons, 3000);

// Initialize tooltip
var tooltipTriggerList = [].slice.call(
	document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Add scroll reveal animation
const observerOptions = {
	root: null,
	rootMargin: "0px",
	threshold: 0.1,
};

const observer = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.add("animate__animated", "animate__fadeInUp");
			observer.unobserve(entry.target);
		}
	});
}, observerOptions);

document
	.querySelectorAll(
		".service-card, .coach-card, .testimonial-item, .blog-preview"
	)
	.forEach((el) => {
		observer.observe(el);
	});
