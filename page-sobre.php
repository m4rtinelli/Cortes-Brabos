<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

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
        Yuri, também conhecido como <span class="negrito">Cortes Brab0s</span>, é cabeleireiro, videomaker e diretor criativo, além de fundador do Pelo Tosco, um espaço queer e subversivo em São Paulo. Natural de Campos dos Goytacazes, RJ, começou sua trajetória aos 14 anos ajudando sua mãe no salão de beleza. Desde então, desenvolveu um estilo único e experimental que desafia padrões estéticos, criando conexões entre cabelo, arte e identidade. Hoje, com anos de experiência, Yuri lidera projetos autorais e colaborações que misturam técnica, criatividade e uma visão ousada da beleza.
      </p>

      <div class="e-mail-container">
        <a href="mailto:cortesbraboss@gmail.com">cortesbraboss@gmail.com</a>
      </div>
    </section>

    <div class="contato">
      <div class="telefone-wrapper">
        <span>Contato:</span>
        <a href="tel:+5511975216813">+55 11 97521-6813</a>
      </div>

      <div class="insta-wrapper">
        <span>Instagram:</span>
        <a href="https://www.instagram.com/cortesbrab0s/" target="_blank">@cortesbrab0s</a>
      </div>
    </div>

    <div class="imagem-sobre-container">
      <img src="./assets/imagens/sobre/sobre-bio-img.jpg" alt="Foto Do Autor" class="animate">
    </div>

    <div class="e-mail-container-mobile">
      <a href="mailto:cortesbraboss@gmail.com">cortesbraboss@gmail.com</a>
    </div>

  </main>


  <!--  -->
  <script src="script.js"></script>
  <!--  -->
  <script src="./js/langSelect.js"></script>
  <script src="./js/sobre.js"></script>
  <script src="./js/mobileHeader.js"></script>]
  
  <?php get_footer(); ?>
