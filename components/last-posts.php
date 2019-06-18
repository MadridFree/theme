<section class="section page-sidebar section--related page-sidebar--reverse">
  <div class="page-sidebar__content">
    <h3 class="page-sidebar__title">
      Últimos artículos publicados
    </h3>
    <?php $the_query = new WP_Query('showposts=6'); while ($the_query->have_posts()) : $the_query->the_post();?>
      <?php get_template_part('components/article-list'); ?>
    <?php endwhile; ?>
  </div>
  <div class="page-sidebar__ads">
    <?php get_template_part('ads/media-pag'); ?>
  </div>
</section>

