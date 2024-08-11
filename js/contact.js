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

// Leaflet Map (Replace with your map initialization code)
var map = L.map("map").setView([40.7128, -74.006], 13); // Replace with your desired coordinates

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution:
		'© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

var marker = L.marker([40.7128, -74.006]).addTo(map); // Replace with your desired coordinates
marker.bindPopup("<b>FitConnect</b><br>123 Fitness Street").openPopup();

// Form submission (Local handling - replace with your logic)
document.getElementById("contactForm").addEventListener("submit", function (e) {
	e.preventDefault();
	// Add your logic here to handle the form data locally
	// For example, you can display a thank you message or store the data
	alert("Thank you for your message! We will get back to you soon.");
	this.reset();
});
