const menuToggle = document.querySelector(".menu-toggle");
const mobileMenuOverlay = document.querySelector(".mobile-menu-overlay");
const closeMenuButton = document.querySelector(".close-icon-hd-mob");

const metaThemeColor = document.querySelector('meta[name="theme-color"]');

const metaThemeBaseColor = metaThemeColor.content;

// Função para alterar a cor da barra de status
function changeThemeColor(color) {
  if (metaThemeColor) {
    metaThemeColor.setAttribute("content", color);
  } else {
    metaThemeColor = document.createElement("meta");
    metaThemeColor.setAttribute("name", "theme-color");
    metaThemeColor.setAttribute("content", color);
    document.head.appendChild(metaThemeColor);
  }
}

menuToggle.addEventListener("click", () => {
  mobileMenuOverlay.style.display = "flex";
  mobileMenuOverlay.classList.remove("slide-up");

  // Alterar a cor para laranja ao abrir o menu
  changeThemeColor("#ff6b42");
});

closeMenuButton.addEventListener("click", () => {
  mobileMenuOverlay.classList.add("slide-up");

  setTimeout(() => {
    mobileMenuOverlay.style.display = "none";

    // Alterar a cor para branco ao fechar o menu
    changeThemeColor(metaThemeBaseColor);
  }, 500); // O tempo deve coincidir com o tempo da animação no CSS
});
