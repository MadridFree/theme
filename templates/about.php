<?php
/*
Template Name: about
*/
get_header();
?>

<div class="about__bck">
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
      <p>
        Con el tiempo se han unido una decena de colaboradores pasajeros, aunque algunos como Mapi, María y Laura son ya parte del equipo que hace que podamos llegar cada vez a más personas.
      </p>
      <p>
        ***
      </p>
      <p>
        Saludos y colaboraciones: <a href="mailto:info@madridfree.org">info@madridfree.org</a>
      </p>
      <p>
        Publicidad: <a href="mailto:publicidad@madridfree.org">publicidad@madridfree.org</a>
      </p>

      <!-- <?php the_content("Sigue leyendo"); ?>-->
    </div>
      <h2 class="about__subtitle">
        Algunos números
      </h2>
      <div class="about__list-of-box">
        <div class="about__box">
          <div class="about__number">
            +300k
          </div>
          <div class="about__desc">
            usuarios nos visitan cada año
          </div>
        </div>
        <div class="about__box">
          <div class="about__number">
            +30.000
          </div>
          <div class="about__desc">
            seguidores en las RRSS
          </div>
        </div>
        <div class="about__box">
          <div class="about__number">
            +50 %
          </div>
          <div class="about__desc">
            de tráfico mobile
          </div>
        </div>
        <!-- end file 1 -->
        <div class="about__box">
          <div class="about__number">
            +75 %
          </div>
          <div class="about__desc">
            de los usuarios residen en Madrid
          </div>
        </div>
        <div class="about__box">
          <div class="about__number">
            +95 %
          </div>
          <div class="about__desc">
            hablan castellano y viven en España
          </div>
        </div>
        <div class="about__box">
          <div class="about__number">
            +50 %
          </div>
          <div class="about__desc">
            tiene entre 18 y 30 años
          </div>
        </div>
      </div>

    <!-- main -->
    <?php endwhile; else: ?>
      <?php include (TEMPLATEPATH . '/404.php'); ?>
    <?php endif; ?>
  </article>
</div>

<?php get_footer(); ?>
