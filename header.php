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
      <a href="" class="header__nav-link">
        Restaurantes
      </a>
      <a href="" class="header__nav-link">
        Teatro
      </a>
      <a href="" class="header__nav-link">
        Opinión
      </a>
      <a href="" class="header__nav-link">
        Deportes
      </a>
      <div class="header__nav-more">
        Ver más
        <ul class="header__nav-ul">
          <li class="header__nav-li">
            <a href="" class="header__nav-ul-a">
              Cine
            </a>
          </li>
          <li class="header__nav-li">
            <a href="" class="header__nav-ul-a">
              Categoría
            </a>
          </li>
          <li class="header__nav-li">
            <a href="" class="header__nav-ul-a">
              Teatro y musicales
            </a>
          </li>
          <li class="header__nav-li">
            <a href="" class="header__nav-ul-a">
              Idontknow
            </a>
          </li>
          <li class="header__nav-li">
            <a href="" class="header__nav-ul-a">
              Link
            </a>
          </li>
          <li class="header__nav-li">
            <a href="" class="header__nav-ul-a">
              Link
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
