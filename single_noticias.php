<?php get_header(); ?>    

<?php get_template_part('ads/leaderboard'); ?>

<article class="single-noticias">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="single-noticias__content">
      <div class="single-noticias__category">
        <?php get_template_part('atoms/category-link'); ?>
      </div>
      <h1 class="single-noticias__title">
        <?php the_title(); ?>
      </h1>
      <div class="single-noticias__meta">
        <?php get_template_part('atoms/meta'); ?>
      </div>
      <div class="single-noticias__intro">
        En nuestro país el año pasado 60 mujeres fueron asesinadas por sus parejas. Eso significa un asesinato a la semana. Ahora mismo viven en Madrid 6.800 mujeres con protección policial por violencia de género. Basta. Una sola víctima ya serían demasiadas.
        <?php the_field('desc-news', $event_id); ?>
      </div>
    </div>
    <picture class="picture single-noticias__thumb">
      <?php the_post_thumbnail('fotogrande'); ?>
    </picture>
    <div class="single-noticias__credits-photo">
      Fotografía por Chenoa ©
    </div>
    <div class="single-noticias__content single-noticias__content--sidebar">
      <div class="main single-noticias__main">
         <?php the_content("Sigue leyendo"); ?>
      </div>
      <?php get_template_part('components/last-news'); ?>
    </div>
  <?php endwhile; else: ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
  <?php endif; ?>
</article>

<?php get_footer(); ?>
