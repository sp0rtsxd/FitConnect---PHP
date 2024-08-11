// Theme Switch Logic
document.addEventListener("DOMContentLoaded", function () {
	const toggleSwitch = document.querySelector(
		'.theme-switch input[type="checkbox"]'
	);
	const body = document.body;

	const currentTheme = localStorage.getItem("theme");
	if (currentTheme) {
		document.documentElement.setAttribute("data-theme", currentTheme);
		if (currentTheme === "dark") {
			toggleSwitch.checked = true;
			body.classList.add("dark-mode");
		}
	}

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

	// Sample Chart.js Implementation (Replace with your data)
	const ctx = document.getElementById("myChart").getContext("2d");
	const myChart = new Chart(ctx, {
		type: "line",
		data: {
			labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
			datasets: [
				{
					label: "Steps",
					data: [12000, 9000, 7000, 11000, 8000, 10000, 6000],
					borderColor: "rgba(79, 160, 79, 1)",
					borderWidth: 2,
					fill: false,
				},
			],
		},
		options: {
			scales: {
				y: {
					beginAtZero: true,
				},
			},
		},
	});

	// Retrieve and display user data
	const userData = JSON.parse(localStorage.getItem("userData"));

	if (userData && userData.fullName) {
		const welcomeMessage = document.querySelector(".sidebar h3");
		welcomeMessage.textContent = `Welcome, ${userData.fullName}!`;
	}
});
