<?php
// Template Name: Galeria
?>

<?php get_header(); ?>

  <meta name="theme-color" content="#ffffff">
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!--  -->
  <title>Cortes Brabos</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>./style.css">
</head>

<body>
  <header class="header-galeria">
    <div class="seletor-linguagem">
      <span class="pt leng-selected">▪Pt</span>
      <span class="en">En</span>
    </div>

    <div class="header-logo">
      <img src="./assets/imagens/CortesBrabos-logo.svg" alt="">
    </div>

    <div class="header-menu">
      <span class="selected"><a href="/home/">Home</a></span>
      <span class=""> <a href="/galeria/">▪Galeria</a></span>
      <span class=""><a href="/sobre/">Sobre</a></span>
    </div>

    <div class="menu-toggle">
      <span>Menu</span>
    </div>

    <div class="mobile-menu-overlay">

      <div class="header-logo-mobile">
        <img src="./assets/imagens/CortesBrabos-logo.svg" alt="">

        <img class="close-icon-hd-mob" src="./assets/imagens/close-icon.svg" alt="">
      </div>

      <div class="mobile-menu">
        <span><a href="/home">Home</a></span>
        <span><a href="/galeria">Galeria</a></span>
        <span><a href="/sobre/">Sobre</a></span>
      </div>


      <div class="header-ft-mob">

        <div class="mobile-lang-selector">
          <span class="pt-mob leng-selected">▪Pt</span>
          <span class="en-mob">En</span>
        </div>

        <a href="https://www.instagram.com/cortesbrab0s/" target="_blank">@cortesbrab0s</a>
        <a href="mailto:cortesbraboss@gmail.com">cortesbraboss@gmail.com</a>
      </div>
    </div>
  </header>

  <!-- galeria de imagens  -->
  <div class="list-switch">
    <span id="li-toggle">Lista</span>
    <span id="img-toggle" class="selected">▪Imagens</span>
  </div>

  <main class="main-gallery">
    <div class="gallery-wrapper">

      <div class="img-gallery-container">
        <a href="./page-trabalho.html"><img src="./assets/imagens/galeria/galeria-1.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-2.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-3.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <!--  -->
      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-4.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-5.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-6.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <!--  -->
      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-7.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-8.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>

      <div class="img-gallery-container">
        <a href=""><img src="./assets/imagens/galeria/galeria-9.jpg" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p>Nome do Trabalho</p>
          <p>2000</p>
        </div>
      </div>
    </div>

  </main>

  <section class="extra-works-wrapper">
    <div class="carrossel-title">
      <p>Outros projetos</p>
    </div>
    <div class="nav-slider-container swiper">
      <div class="works-nav-back">
        <img src="./assets/imagens/arrow_right_alt.svg" alt="">
      </div>
      <div class="carrossel-limiter">
        <ul class="works-slider-container swiper-wrapper">

          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-1.jpg" alt=""></a>
          </li>
          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-2.png" alt=""></a>
          </li>
          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-3.jpg" alt=""></a>
          </li>
          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-4.jpg" alt=""></a>
          </li>
          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-5.jpg" alt=""></a>
          </li>
          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-5.jpg" alt=""></a>
          </li>
          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-5.jpg" alt=""></a>
          </li>
          <li class="work-item swiper-slide"><a href=""><img src="./assets/imagens/galeria extra/extra-5.jpg" alt=""></a>
          </li>
        </ul>

      </div>


      <div class="works-nav-forw ">
        <img src="./assets/imagens/arrow_right_alt-2.svg" alt="">
      </div>

    </div>


  </section>

  <!-- listmode -->
  <section class="list-mode display-none">
    <ul class="work-listmode-wrapper">

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-1.jpg"><a href="">Desfile Maxwell Alexandre + Pedra Preta</a></li>

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-2.jpg"><a href="">Desfile Dystopic Core Lab</a></li>

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-3.jpg"><a href="">Esportes que abandonei</a></li>

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-4.jpg"><a href="">DJ Bassan</a></li>

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-5.jpg"><a href="">DJ Alírio</a></li>

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-6.jpg"><a href="">Sinto Muito - Pelo Tosco</a></li>

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-7.jpg"><a href="">SKINS Pirygótik</a></li>

      <li class="work-listmode-item" data-img="./assets/imagens/galeria/galeria-8.jpg"><a href="">ROMA</a></li>



    </ul>

    <div class="plus-icon-button">
      <img src="./assets/imagens/plus-icon.svg" alt="Plus icon">
    </div>

    <div class="hover-image"><img src="" alt=""></div>

  </section>
  <!-- end listmode -->

  <footer class="footer-home ft-galeria">

    <div class="footer-contact">
      <a href="mailto:cortesbraboss@gmail.com">cortesbraboss@gmail.com</a>
      <a href="https://www.instagram.com/cortesbrab0s/" target="_blank">@cortesbrab0s</a>
    </div>

    <div class=" footer-wrapper">
      <img src="./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
    </div>

  </footer>

  <!-- swiper -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="script.js"></script>
  <!--  -->
  <script src="./js/langSelect.js"></script>
  <script src="./js/gallery.js"></script>
  <script src="./js/listSwitch.js"></script>
  <script src="./js/mobileHeader.js"></script>






  <?php get_footer(); ?>
