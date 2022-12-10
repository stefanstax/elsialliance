<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Start cookieyes banner -->
  <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/c152666f40c8a6fdc2f2f88a/script.js"></script> <!-- End cookieyes banner -->
  <!-- End cookieyes banner -->
  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <style>
    :root {
      --leaf-green: #425f4b;
      --dark-green: #1a2e2e;
      --sooth-green: #3a595c;
      --washed-green: #7ba9a9;
      --pale-green: #bcd9d7;
      --white-green: #edeef0;
      --navy-blue: #00004d;
    }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

    <?php get_template_part('template-parts/header/main-navigation', "part"); ?>

    <div id="content" class="staxy__container">
      <div id="staxy__page" class="staxy__xlcontainer">
        <main id="main" class="site-main" role="main">