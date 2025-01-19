<?php
// Template Name: Single Principais
?>

<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <meta name="theme-color" content="  #8387a3">

  <title>Cortes Brabos</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>./style.css">
</head>

<body>
  <header class="hd-pg-work">
    <div class="seletor-linguagem">
      <span class="pt leng-selected">▪Pt</span>
      <span class="en">En</span>
    </div>

    <div class="header-logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="">
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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="">

        <img class="close-icon-hd-mob" src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/close-icon.svg" alt="">
      </div>

      <div class="mobile-menu">
      <span class="selected"><a href="/home/">Home</a></span>
      <span class=""><a href="/galeria/">Galeria</a></span>
      <span class=""><a href="/sobre/">Sobre</a></span>
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

  <main class="layout-wrapper">

    <div class="work-info-wrapper">
      <a href="./galeria.html" class="back-button-mobile">
        ⮠ Voltar
      </a>

      <h1 class="work-title">
        <?php the_title() ?>
      </h1>

      <span class="work-date">2024, SP.</span>
    </div>

    <div class="work-date-mobile">
      <span>2024, SP.</span>
    </div>

    <section class="work-description-wrapper">

      <h2 class="work-description-title">
      <?php the_field2('subtitulo_principais'); ?>
      </h2>

 <p>
 <?php echo wpautop(get_field2('descricao_principais')); ?>
 </p>

    </section>

    <section class="work-carrossel-wrapper swiper">

      <div class="work-carrossel-nav">
        <img class="car-work-nav-back" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/arrow_right_alt.svg" alt="navigation back arrow">

        <img class="car-work-nav-front" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/arrow_right_alt-2.svg" alt="navigation forward arrow">
      </div>

      <ul class="carrossel-wrapper swiper-wrapper">
      <?php 
    $imagens_principais_page = get_field2('imagens_w_principais');

if(isset($imagens_principais_page)) { foreach($imagens_principais_page as $imagem_principal_page) {

    ?>
      <li class="swiper-slide">
          <img src="<?php echo $imagem_principal_page['imagem_w_principal']; ?>" alt="imagem do trabalho">
        </li>

    <?php 
}}
    ?>
      
  

      </ul>

      <div class="work-carrossel-nav nav-mobile">
        <img class="car-work-nav-back" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/arrow_right_alt.svg" alt="navigation back arrow">

        <img class="car-work-nav-front" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/arrow_right_alt-2.svg" alt="navigation forward arrow">
      </div>

    </section>




  </main>

  <footer class="footer-home ft-work-page">

    <div class="footer-contact">
      <a href="mailto:cortesbraboss@gmail.com">cortesbraboss@gmail.com</a>
      <a href="https://www.instagram.com/cortesbrab0s/" target="_blank">@cortesbrab0s</a>
    </div>

    <div class=" footer-wrapper">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
    
    </div>

  </footer>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!--  -->

  <!-- <script src="script.js"></script>
  <script src="./js/langSelect.js"></script>
  <script src="./js/mobileHeader.js"></script> -->

  <?php endwhile; else : endif; ?>
  <?php get_footer(); ?>
