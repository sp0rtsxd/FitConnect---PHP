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

// Privacy Risk Calculator
document
	.getElementById("privacyCalcForm")
	.addEventListener("submit", function (e) {
		e.preventDefault();
		const dataShared = parseInt(document.getElementById("dataShared").value);
		const passwordStrength = parseInt(
			document.getElementById("passwordStrength").value
		);
		const twoFactor = parseInt(document.getElementById("twoFactor").value);

		const riskScore = dataShared + passwordStrength + twoFactor;
		let riskLevel, advice;

		if (riskScore <= 4) {
			riskLevel = "Low";
			advice = "Great job! You're taking good care of your online privacy.";
		} else if (riskScore <= 7) {
			riskLevel = "Moderate";
			advice =
				"There's room for improvement. Consider strengthening your passwords and using two-factor authentication more often.";
		} else {
			riskLevel = "High";
			advice =
				"Your online privacy is at risk. Take immediate steps to reduce the amount of personal information you share and improve your security practices.";
		}

		document.getElementById("riskResult").innerHTML = `
    <h4 class="mt-4">Your Privacy Risk: ${riskLevel}</h4>
    <p>${advice}</p>
`;
	});

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
