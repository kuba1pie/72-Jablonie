<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /style/style.css" type="text/css"
    media="screen" />

  <?php wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <div class="page-logo">
      <a href="<?php echo home_url(); ?>"> <img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt=""></a>
    </div>
    <nav class="navigation-menu">
      <?php  { wp_nav_menu(array( 'theme_location' => 'menu_pl')); } ?>
    </nav>
    <?php  wp_nav_menu(array( 'theme_location' => 'menu_cat')); ?>
  </header>

  <main class="content">