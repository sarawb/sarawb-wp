<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title><?php bloginfo('name'); ?>  | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">

  <!-- My styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/global.css"/>

  <!-- Typekit Code -->
  <script type="text/javascript" src="//use.typekit.net/tko8fpq.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>


  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->

</head>
<body <?php body_class($class); ?>>

<header class="site__header" role="banner">
  <div class="contain">
    <div class="site__branding left">
      <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/SWB_Logo.svg" alt="Sara Wachter-Boettcher" width="90"></a>
    </div>

    <div class="nav_and_search right">
      <div class="site__search right">
        <?php get_search_form(); ?>
      </div>
      <nav class="site__nav right" role="navigation">
        <ul>
          <li><a href="<?php bloginfo('url'); ?>/about">About</a></li>
          <li><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
        </ul>
      </nav>
    </div><!-- .nav_and_search -->
  </div><!-- .contain -->
</header>

<main class="site__content" role="main">
  <div class="contain">
