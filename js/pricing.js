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

// Add hover effect to pricing cards
const pricingCards = document.querySelectorAll(".pricing-card");
pricingCards.forEach((card) => {
	card.addEventListener("mouseenter", () => {
		card.style.transform = "translateY(-10px)";
	});
	card.addEventListener("mouseleave", () => {
		card.style.transform = "translateY(0)";
	});
});
