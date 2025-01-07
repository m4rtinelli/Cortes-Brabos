document.addEventListener("DOMContentLoaded", () => {
  const listSelector = document.querySelectorAll(".list-switch span");
  const mainImageGallery = document.querySelector(".main-gallery");
  const listModeGallery = document.querySelector(".list-mode");
  const liToggle = document.getElementById("li-toggle");
  const imgToggle = document.getElementById("img-toggle");
  const extraWorksCarrossel = document.querySelector(".extra-works-wrapper");

  listSelector.forEach((item) => {
    item.addEventListener("click", () => {
      // Remove a classe "selected" e o caractere ▪ de todos os itens
      listSelector.forEach((el) => {
        el.classList.remove("selected");
        el.innerHTML = el.innerHTML.replace(/^▪\s*/, ""); // Remove ▪ caso esteja presente
      });

      // Adiciona a classe "selected" e o caractere ▪ ao item clicado
      item.classList.add("selected");
      item.innerHTML = `▪${item.innerHTML}`;
    });
  });

  // mudar o layout para aparecer as imagens ou a lista de trabalhos
  // -------
  liToggle.addEventListener("click", () => {
    if (listModeGallery.classList.contains("display-none")) {
      listModeGallery.classList.remove("display-none");
      mainImageGallery.classList.add("display-none");
      extraWorksCarrossel.classList.add("display-none");
    }
  });

  imgToggle.addEventListener("click", () => {
    if (mainImageGallery.classList.contains("display-none")) {
      mainImageGallery.classList.remove("display-none");
      listModeGallery.classList.add("display-none");
      extraWorksCarrossel.classList.remove("display-none");
    }
  });
});
