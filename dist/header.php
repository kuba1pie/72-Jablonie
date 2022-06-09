<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /style/style.css" type="text/css"
    media="screen" />
  <link rel="preload" as="font" href="https://fonts.googleapis.com/css2?family=Italianno&family=Raleway:wght@100;200;300;400&display=swap">
  <?php wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-TPZQBBT');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPZQBBT" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="page-logo">
      <a href="<?php echo home_url(); ?>"> <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt=""></a>
    </div>
    <button class="hamburger" onclick="toggleMenu()">&#9776;</button>
    <nav class="navigation-menu" id="nav">
      <?php  { wp_nav_menu(array( 'theme_location' => 'menu_main')); } ?>
      <button class="close" onclick="toggleMenu()"><img src="<?php bloginfo('template_directory'); ?>/img/close.svg"
          alt=""></button>

    </nav>
  </header>
  <script>
  function toggleMenu() {
    document.getElementById("nav").classList.toggle("open");
  }
  </script>
  <main class="content">