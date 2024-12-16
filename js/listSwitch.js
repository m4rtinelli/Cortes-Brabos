document.addEventListener("DOMContentLoaded", () => {
  const listSelector = document.querySelectorAll(".list-switch span");

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
});
