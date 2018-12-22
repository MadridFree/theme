<?php get_header(); ?>


<?php get_header(); ?>

<section class="section page-sidebar">
  <div class="page-sidebar__content">
    <h1 class="page-sidebar__title">
      <?php the_author(); ?>
    </h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('partials/components/article-list'); ?>
    <?php endwhile; ?>
  </div>
  <div class="page-sidebar__ads">
    <?php get_template_part('partials/ads/media-pag'); ?>
  </div>
</section>

<?php get_template_part('partials/components/category-nav'); ?>

<?php  else: ?>
  <?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?>
<?php endif; ?>

<?php get_footer(); ?>
