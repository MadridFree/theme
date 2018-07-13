<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="es">
<head>
  <link rel="shortcut icon" href="<?php bloginfo( template_directory ); ?>/favicon.ico" type="image/png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php get_template_part('layout/header/tagmanager'); ?>
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
  <div class="header__wrap">
    <div class="header__logo">
      <a href="<?php bloginfo('url'); ?>" class="header__logo-link">
        madridfree
      </a>
    </div>
    <nav class="header__nav">
      <a href="" class="header__nav-link">
        Gratis
      </a>
      <a href="https://www.madridfree.org/category/restaurantes-madrid/" class="header__nav-link">
        Restaurantes
      </a>
      <a href="https://www.madridfree.org/category/teatro/" class="header__nav-link">
        Teatro y musicales
      </a>
      <a href="https://www.madridfree.org/category/musica/" class="header__nav-link">
        Música
      </a>
      <a href="https://www.madridfree.org/category/deporte/" class="header__nav-link">
        Deporte
      </a>
      <div class="header__nav-more" style="display:none;">
        Ver más
        <ul class="header__nav-ul">
          <li class="header__nav-li">
            <a href="" class="header__nav-ul-a">
              Cine
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
