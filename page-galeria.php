<?php
// Template Name: Galeria
?>

<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="">
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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="">

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

    <?php 
    $args = array(
      'post_type' => 'principais',
       'order' => 'ASC'
    );

   

    $the_query = new WP_Query ( $args );
    ?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="img-gallery-container">
        <a href="<?php the_permalink(); ?>"><img src="<?php the_field2('imagem_thumb') ?>" alt="Foto do trabalho"></a>
        <div class="gallery-work-info">
          <p><?php the_title() ?></p>
          <p><?php the_field2('ano_principais') ?></p>
        </div>
      </div>
      <?php endwhile; else: endif; ?>

    </div>

  </main>

  <!-- extra works wrapper -->
  <section class="extra-works-wrapper">

    <div class="carrossel-title">
      <p>Outros projetos</p>
    </div>

    <div class="nav-slider-container swiper">

      <div class="works-nav-back">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/arrow_right_alt.svg" alt="">
      </div>

      <div class="carrossel-limiter">
        <ul class="works-slider-container swiper-wrapper">
          
<!-- trabalhos -->
        <?php 
    $args = array(
      'post_type' => 'trabalhos',
       'order' => 'ASC'
    );

    $the_query = new WP_Query ( $args );

    ?>

        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


          <li class="work-item swiper-slide"><a href="<?php the_permalink() ?>"><img src="<?php the_field2('trabalho_thumb') ?>" alt=""></a>
         
          <?php endwhile; else: endif; ?>


          <!-- principais -->

          <?php 
         $args = array(
         'post_type' => 'principais',
        'order' => 'ASC'
       );

   

        $the_query = new WP_Query ( $args );
       ?>

       <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

       <li class="work-item swiper-slide"><a href="<?php the_permalink() ?>"><img src="<?php the_field2('imagem_thumb') ?>" alt=""></a>

       <?php endwhile; else: endif; ?>



        </ul>

      </div>


      <div class="works-nav-forw ">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/arrow_right_alt-2.svg" alt="">
      </div>

    </div>
<!-- fim extra works -->

  </section>

  <!-- listmode -->
  <section class="list-mode display-none">
    <ul class="work-listmode-wrapper">

<!-- trabalhos principais -->
    <?php 
    $args = array(
      'post_type' => 'principais',
       'order' => 'ASC'
    );

   

    $the_query = new WP_Query ( $args );
    ?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <li class="work-listmode-item" data-img="<?php the_field2('imagem_thumb') ?>"><a href=""><?php the_title() ?> </a></li>

      <?php endwhile; else: endif; ?>



  <!-- //  trabalhos -->
  <?php 
    $args = array(
      'post_type' => 'trabalhos',
       'order' => 'ASC'
    );
    $the_query = new WP_Query ( $args );
    ?>

   <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

   <li class="work-listmode-item" data-img="<?php the_field2('trabalho_thumb') ?>"><a href=""><?php the_title() ?> </a></li>

   <?php endwhile; else: endif; ?>

    </ul>

    <div class="plus-icon-button">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/plus-icon.svg" alt="Plus icon">
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
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="Logo Cortes Brabos">
    
    </div>

  </footer>

  <!-- swiper -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- <script src="script.js"></script> -->
  <!--  -->
  <!-- <script src="./js/langSelect.js"></script>
  <script src="./js/gallery.js"></script>
  <script src="./js/listSwitch.js"></script>
  <script src="./js/mobileHeader.js"></script> -->



  <?php endwhile; else : endif; ?>


  <?php get_footer(); ?>
