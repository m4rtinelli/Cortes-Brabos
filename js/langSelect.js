document.addEventListener("DOMContentLoaded", () => {
  const languageOptions = document.querySelectorAll(".seletor-linguagem span");

  languageOptions.forEach((option) => {
    option.addEventListener("click", () => {
      // Remover o símbolo '▪' de todos os itens
      languageOptions.forEach((opt) => {
        opt.textContent = opt.textContent.replace("▪", "").trim();
        opt.classList.remove("leng-selected");
      });

      // Adicionar o símbolo '▪' ao elemento clicado
      option.textContent = `▪${option.textContent}`;
      option.classList.add("leng-selected");
    });
  });
});
