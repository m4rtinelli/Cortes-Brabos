<?php
// Template Name: Sobre
?>

<?php get_header(); ?>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <meta name="theme-color" content="#ccde65">
  <title>Cortes Brabos</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>./style.css">
</head>

<body>

  <header class="header-sobre">
    <div class="seletor-linguagem">
      <span class="pt leng-selected">▪Pt</span>
      <span class="en">En</span>
    </div>

    <div class="header-logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/CortesBrabos-logo.svg" alt="">
    </div>

    <div class="header-menu">
      <span class="selected"><a href="/home/">Home</a></span>
      <span class=""> <a href="/galeria/">Galeria</a></span>
      <span class=""><a href="/sobre/">▪Sobre</a></span>
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
      <span class="selected"><a href="/home/">Home</a></span>
      <span class=""> <a href="/galeria/">Galeria</a></span>
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

  <main class="sobre-container">
    <section class="bio-container">
      <p>
<?php the_field2('biografia');?>
        
      </p>

      <div class="e-mail-container">
        <a href="mailto:<?php the_field2('email');?>"><?php the_field2('email');?></a>
      </div>
    </section>

    <div class="contato">
      <div class="telefone-wrapper">
        <span>Contato:</span>
        <a href="tel:<?php the_field2('telefone');?>"><?php the_field2('telefone');?></a>
      </div>

      <div class="insta-wrapper">
        <span>Instagram:</span>
        <a href="<?php the_field2('instagram_link');?>" target="_blank"><?php the_field2('instagram_arroba');?></a>
      </div>
    </div>

    <div class="imagem-sobre-container">
      <img src="<?php the_field2('imagem_bio');?>" alt="Foto Do Autor" class="animate">
    </div>

    <div class="e-mail-container-mobile">
      <a href="mailto:cortesbraboss@gmail.com">cortesbraboss@gmail.com</a>
    </div>

  </main>


  <!--  -->
  <!-- <script src="script.js"></script> -->
  <!--  -->
  <!-- <script src="./js/langSelect.js"></script>
  <script src="./js/sobre.js"></script>
  <script src="./js/mobileHeader.js"></script>]
  
  -->
  <?php endwhile; else : endif; ?>
  <?php get_footer(); ?>
