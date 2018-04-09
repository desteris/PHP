<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="./css/bootstrap.css"> -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">

  <!-- Animation Turn On/Off -->
  <?php if(get_theme_mod('animation', 1)): ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
  <?php endif; ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <!-- <link href="./css/fontawesome-all.css" rel="stylesheet"> -->
  <style media="screen">
    .showcase{
      height: <?php echo get_theme_mod('showcase_height', 700); ?>px;
      background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>);
    }

    .banner{
      background: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url').'/img/banner.jpg'); ?> no-repeat center center);
    }
  </style>
  <title><?php bloginfo('name');?> | <?php bloginfo('title'); ?></title>
  <?php wp_head(); ?>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <?php
        wp_nav_menu( array(
            'theme_location'	=> 'primary',
            'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
          	'container'			=> 'div',
          	'container_class'	=> 'collapse navbar-collapse',
          	'container_id'		=> 'navbarColor03',
          	'menu_class'		=> 'navbar-nav ml-auto',
            'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
            'walker'			=> new WP_Bootstrap_Navwalker()
        ) );
        ?>


    </div>

  </nav>
