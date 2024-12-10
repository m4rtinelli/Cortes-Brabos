// Seleciona todos os containers de imagem
const imgContainers = document.querySelectorAll(".img-gallery-container");

// Adiciona um evento de hover em cada container
imgContainers.forEach((container) => {
  const workInfo = container.querySelector(".gallery-work-info");

  container.addEventListener("mouseenter", () => {
    container.classList.add("gallery-hover");
    if (workInfo) {
      workInfo.classList.add("active");
    }
  });

  container.addEventListener("mouseleave", () => {
    container.classList.remove("gallery-hover");
    if (workInfo) {
      workInfo.classList.remove("active");
    }
  });
});
