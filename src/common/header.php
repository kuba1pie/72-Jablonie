<!DOCTYPE html>
<html lang="pl">
<head>
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php
      $var1 = home_url();
      $var2 = "https://restauracjajablonie.pl";
      $gtmRestauracja = "GTM-TPZQBBT";
      $gtmZajazd = "GTM-5VGRKF6";
      if (strcmp($var1, $var2) !== 0) {
          $gtm = $gtmZajazd;
      }
      else {
        $gtm = $gtmRestauracja;
      }
      echo $gtm
    ?>');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="thumbnail" content="https://restauracjajablonie.pl/restauracjaJablonie/thumbnails/thumbnail.jpg" />
  <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /style/style.css" type="text/css"
    media="screen" />
  <link rel="preload" as="font" href="https://fonts.googleapis.com/css2?family=Italianno&family=Raleway:wght@100;200;300;400&display=swap">
  <?php wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php
      $var1 = home_url();
      $var2 = "https://restauracjajablonie.pl";
      $gtmRestauracja = "GTM-TPZQBBT";
      $gtmZajazd = "GTM-5VGRKF6";
      if (strcmp($var1, $var2) !== 0) {
          $gtm = $gtmZajazd;
      }
      else {
        $gtm = $gtmRestauracja;
      }
      echo $gtm
    ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <button class="hamburger__button" onclick="toggleMenu()">&#9776;</button>
    <nav class="navigation-menu" id="nav">
      <?php  { wp_nav_menu(array( 'theme_location' => 'menu_left')); } ?>
      <div id="page-logo" class="page-logo">
        <a href="<?php echo home_url(); ?>">
          <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
          ?>
        </a>
      </div>
      <?php  { wp_nav_menu(array( 'theme_location' => 'menu_right')); } ?>
      <?php  { wp_nav_menu(array( 'theme_location' => 'menu_mobile')); } ?>
      <button class="close__button" onclick="toggleMenu()">
        <img src="<?php bloginfo('template_directory'); ?>/img/close.svg" alt="">
      </button>
    </nav>
  </header>
  <script>
    function toggleMenu() {
      document.getElementById("nav").classList.toggle("open");
    }
  </script>
  <main class="content">