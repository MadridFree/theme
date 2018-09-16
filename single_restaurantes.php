<?php get_header(); ?>    

<?php get_template_part('ads/leaderboard'); ?>

<article class="single-restaurantes">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <picture class="picture single-restaurantes__thumb">
      <?php the_post_thumbnail('xlarge'); ?>
      <div class="single-restaurantes__img-content">
        <div class="single-restaurantes__category">
          <?php get_template_part('atoms/category-link'); ?>
        </div>
        <h1 class="single-restaurantes__title">
          <?php the_title(); ?>
        </h1>
        <div class="single-restaurantes__meta">
          <?php get_template_part('atoms/meta'); ?>
        </div>
      </div>
    </picture>
    <div class="single-noticias__credits-photo">
      Fotografía por Chenoa ©
    </div>
    <div class="single-restaurantes__content single-restaurantes__content--sidebar">
      <div class="main single-restaurantes__main">
         <?php the_content("Sigue leyendo"); ?>
      </div>
      <?php get_template_part('components/last-news'); ?>
    </div>
  <?php endwhile; else: ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
  <?php endif; ?>
</article>

<?php get_template_part('components/last-posts'); ?>

<?php get_footer(); ?>
