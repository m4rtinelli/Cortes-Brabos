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
