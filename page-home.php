<?php
// Template Name: Home
?>

<?php get_header(); ?>

  <meta name="theme-color" content="#ffffff">
  <title>Cortes Brabos</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>./style.css">
</head>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<body>
  <header>
    <div class="seletor-linguagem">
      <span class="pt leng-selected">▪Pt</span>
      <span class="en">En</span>
    </div>

    <div class="header-logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="">
    </div>

    <div class="header-menu">
    <span class="selected"><a href="/home/">▪Home</a></span>
      <span class=""> <a href="/galeria/">Galeria</a></span>
      <span class=""><a href="/sobre/">Sobre</a></span>
    </div>

    <div class="menu-toggle">
      <span>Menu</span>
    </div>

    <div class="mobile-menu-overlay">

      <div class="header-logo-mobile">
        <img src="./assets/imagens/CortesBrabos-logo.svg" alt="">

        <img class="close-icon-hd-mob" src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/close-icon.svg" alt="close icon">
      </div>

      <div class="mobile-menu">
        <span><a href="/home/">Home</a></span>
        <span><a href="/galeria/">Galeria</a></span>
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

  <div class="carrossel-nav">
    <img id="nav-left" src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/arrow_right_alt.svg" alt="navigation left">
    <img id="nav-right" src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/arrow_right_alt-2.svg" alt="navigation right">
  </div>

  <main class="home-container swiper">
    <div class="home-carrossel swiper-wrapper">


    <?php 
    $imagens_home = get_field2('imagens_home_group');

if(isset($imagens_home)) { foreach($imagens_home as $imagem_home) {

    ?>

      <div class="image-home-wrapper swiper-slide">
        <img src="<?php echo $imagem_home['imagem_home']; ?>" alt="Imagem Home">
      </div>

    <?php 
}}
    ?>
 


    </div>
    

    <p class="image-home-info">Sinto Muito – Pelo Tosco, 2024.</p>
  </main>

  <footer class="footer-home">

    <div class="footer-contact">
      <a href="mailto:cortesbraboss@gmail.com">cortesbraboss@gmail.com</a>
      <a href="https://www.instagram.com/cortesbrab0s/" target="_blank">@cortesbrab0s</a>
    </div>

    <div class=" footer-wrapper">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">

    </div>

  </footer>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!--  -->
  <script src="./script.js"></script>
  <script src="./js/langSelect.js"></script>
  <script src="./js/mobileHeader.js"></script>

  <?php endwhile; else : endif; ?>
  <?php get_footer(); ?>
