document.addEventListener("DOMContentLoaded", () => {
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

  // hover img list

  const workItems = document.querySelectorAll(".work-listmode-item");
  const hoverImage = document.querySelector(".hover-image");

  workItems.forEach((item) => {
    const imageSrc = item.getAttribute("data-img");

    item.addEventListener("mouseenter", () => {
      hoverImage.style.display = "block";
      hoverImage.style.backgroundImage = `url(${imageSrc})`;
      hoverImage.style.backgroundSize = "cover";
      hoverImage.style.backgroundPosition = "center";
    });

    item.addEventListener("mouseleave", () => {
      hoverImage.style.display = "none";
    });

    item.addEventListener("mousemove", (e) => {
      hoverImage.style.top = `${e.clientY + 10}px`; // Ajuste a posição para o hover
      hoverImage.style.left = `${e.clientX + 10}px`;
    });
  });

  //   // ----------------------------------------------------------
  //  funçao que faz o modo de lista mostrar mais trbalhos ao clicar no plus icon button
  // // --------------------------------------------------------
  const plusIconButton = document.querySelector(".plus-icon-button");

  const initialItemsToShow = 8;

  workItems.forEach((item, index) => {
    if (index >= initialItemsToShow) {
      item.style.display = "none";
    }
  });

  plusIconButton.addEventListener("click", () => {
    workItems.forEach((item) => {
      item.style.display = "block";
    });
  });
});
