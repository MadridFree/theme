<?php get_header(); ?>    

<?php get_template_part('ads/leaderboard'); ?>

<article class="single-opinion">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="single-opinion__content">
      <div class="single-opinion__category">
        Columna de opinión
      </div>
      <h1 class="single-opinion__title">
        <?php the_title(); ?>
      </h1>
      <div class="single-opinion__meta">
        Escrito por <?php the_author_posts_link(); ?>.
      </div>
      <div class="main single-opinion__main">
         <?php the_content("Sigue leyendo"); ?>
      </div>
      <div class="single-opinion__date">
        Madrid, <?php the_time('d \d\e F \d\e Y'); ?>.
      </div>
      <div class="single__tags">
        <?php the_tags('<span>Etiquetas</span>', '', ''); ?>
      </div>
    </div>
  <?php endwhile; else: ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
  <?php endif; ?>
</article>

<?php get_template_part('components/last-posts'); ?>

<?php get_footer(); ?>
