const menuToggle = document.querySelector(".menu-toggle");
const mobileMenuOverlay = document.querySelector(".mobile-menu-overlay");
const closeMenuButton = document.querySelector(".close-icon-hd-mob");

menuToggle.addEventListener("click", () => {
  mobileMenuOverlay.style.display = "flex";
  mobileMenuOverlay.classList.remove("slide-up");
});

closeMenuButton.addEventListener("click", () => {
  mobileMenuOverlay.classList.add("slide-up");

  setTimeout(() => {
    mobileMenuOverlay.style.display = "none";
  }, 500); // O tempo deve coincidir com o tempo da animação que esta definido no css
});
