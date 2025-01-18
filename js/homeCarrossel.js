document.addEventListener("DOMContentLoaded", () => {
  const carrossel = document.querySelector(".home-carrossel");
  const slides = document.querySelectorAll(".image-home-wrapper");
  const navLeft = document.getElementById("nav-left");
  const navRight = document.getElementById("nav-right");

  let currentIndex = 0; // Índice do slide atual
  const totalSlides = slides.length;

  // Função para atualizar a posição do carrossel
  const updateCarrossel = () => {
    const offset = -currentIndex * 100; // Calcula o deslocamento
    carrossel.style.transform = `translateX(${offset}%)`;
    carrossel.style.transition = "transform 0.5s ease-in-out"; // Animação suave
  };

  // Event listener para o botão da direita
  navRight.addEventListener("click", () => {
    if (currentIndex < slides.length - 1) {
      currentIndex++;
    } else {
      currentIndex = 0; // Voltar ao primeiro slide ao chegar no final
    }
    updateCarrossel();
  });

  // Event listener para o botão da esquerda
  navLeft.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = slides.length - 1; // Ir para o último slide se estiver no primeiro
    }
    updateCarrossel();
  });
});
