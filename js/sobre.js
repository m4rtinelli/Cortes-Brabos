document.addEventListener("DOMContentLoaded", () => {
  const img = document.querySelector(".imagem-sobre-container img");

  // Força o navegador a recalcular o estilo antes de remover a classe
  setTimeout(() => {
    img.classList.remove("animate");
  }, 100); // Pequeno delay para garantir a aplicação da animação
});
