<?php get_header(); ?>    

<?php get_template_part('ads/leaderboard'); ?>

<article class="single-default">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="single-default__content">
  		<div class="single-default__category">
        <?php get_template_part('atoms/category-link'); ?>
  		</div>
  		<h1 class="single-default__title">
  			<?php the_title(); ?>
  		</h1>
  		<div class="single-default__meta">
  			<?php get_template_part('atoms/meta'); ?>
  		</div>
  		<div class="main single-default__main">
  	     <?php the_content("Sigue leyendo"); ?>
  		</div>
    </div>
    <div class="single-default__ads">
      <?php get_template_part('ads/media-pag'); ?>
    </div>
  <?php endwhile; else: ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
  <?php endif; ?>
</article>

<?php get_template_part('ads/leaderboard'); ?>

<?php get_footer(); ?>
