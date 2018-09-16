<?php
/*
Template Name: about
*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="about">
  <h1 class="about__title">
    Madrid es lo que tú quieras que sea
  </h1>
  <div class="about__content main">
    <p>
      MadridFree es un blog de ocio y mucho más, nuestro contenido abarca desde reseñas de restaurantes y conciertos, a la difusión de eventos especiales, locales, tiendas, actualidad cultural, noticiario, deportes y hasta columnas de opinión.
    </p>
    <p>
      La idea surgió de tres amigos con ganas de hablar de lo que pasa en una ciudad tan grande como Madrid, de los planes que queríamos vivir. Y de hacerlo, siempre que pudiéramos, gratis y sin rascarnos el bolsillo, lo que lamentablemente no siempre puede ser. Pero no hemos dejado de querer ofrecer las ideas más atractivas de la ciudad y la región de Madrid para que vivamos Madrid de la mejor manera posible.
    </p>
    <h2>Enlaces de interés</h2>
    <ul>
      <li>
        <a href="">Anunciarse en MadridFreee</a>
      </li>
      <li>
        <a href="">Política de cookies</a>
      </li>
    </ul>
    <!-- <?php the_content("Sigue leyendo"); ?>-->
  </div>

  <!-- main -->
  <?php endwhile; else: ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
  <?php endif; ?>
</article>

<?php get_footer(); ?>
