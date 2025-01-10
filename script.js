document.addEventListener("DOMContentLoaded", () => {
  new Swiper(".carrossel-limiter", {
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: ".works-nav-forw",
      prevEl: ".works-nav-back",
    },

    breakpoints: {
      1000: {
        slidesPerView: 2,
        spaceBetween: 12,
      },
      // when window width is >= 320px
      1233: {
        slidesPerView: 3,
        spaceBetween: 12,
      },
      // when window width is >= 480px
      1460: {
        slidesPerView: 4,
        spaceBetween: 12,
      },
      // when window width is >= 640px
      1712: {
        slidesPerView: 5,
        spaceBetween: 12,
      },
    },
  });

  new Swiper(".work-carrossel-wrapper", {
    loop: false,
    slidesPerView: "auto",

    freeMode: {
      enabled: true,
      sticky: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: ".car-work-nav-front",
      prevEl: ".car-work-nav-back",
    },
  });

  // posteriormente descobrir como alterar dinamicamente as infos de texto de cada slide do carrossel da home

  const imageInfos = [
    "Sinto Muito – Pelo Tosco, 2024.",
    "Desfile Maxwell Alexandre + Pedra preta, 2023.",
    "Cortes de cabelo, anos variados.",
  ];

  const swiper = new Swiper(".home-container", {
    loop: true,
    slidesPerView: "1",

    freeMode: {
      enabled: false,
      sticky: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: "#nav-right",
      prevEl: "#nav-left",
    },
  });

  const imageInfoElement = document.querySelector(".image-home-info");

  // Atualiza o conteúdo do texto sempre que o slide mudar
  swiper.on("slideChange", () => {
    const currentIndex = swiper.realIndex; // Índice do slide atual (desconsiderando os duplicados do loop)
    imageInfoElement.textContent = imageInfos[currentIndex];
  });

  // Define o texto inicial ao carregar a página
  imageInfoElement.textContent = imageInfos[swiper.realIndex];
});
