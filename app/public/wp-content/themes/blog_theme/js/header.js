const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".menu-container");

hamburger.addEventListener("click", () => {
	menu.classList.toggle("open");
});

document.addEventListener("click", (e) => {
	!menu.contains(e.target) && !hamburger.contains(e.target) && menu.classList.remove("open");
});
