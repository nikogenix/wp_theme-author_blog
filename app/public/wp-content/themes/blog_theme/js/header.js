const hamburger = document.querySelector(".hamburger");
const menuContainer = document.querySelector(".menu-container");
const menuLinks = document.querySelector(".menu-container .menu-primary-menu-container");
const form = document.querySelector(".menu-container form");

hamburger.addEventListener("click", () => {
	menuContainer.classList.toggle("open");
	const isExpanded = hamburger.getAttribute("aria-expanded") === "true";
	hamburger.setAttribute("aria-expanded", !isExpanded);
});

document.addEventListener("click", (e) => {
	!menuContainer.contains(e.target) && !hamburger.contains(e.target) && menuContainer.classList.remove("open");
});

function reorderMenu() {
	if (window.innerWidth <= 700) {
		if (form.nextElementSibling !== menuLinks) {
			menuContainer.insertBefore(form, menuLinks);
		}
	} else {
		if (menuLinks.nextElementSibling !== form) {
			menuContainer.insertBefore(menuLinks, form);
		}
	}
}

reorderMenu();

window.addEventListener("resize", reorderMenu);
