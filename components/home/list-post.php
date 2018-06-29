<section class="section page-sidebar">
  <div class="page-sidebar__content">
    <h3 class="page-sidebar__title">
      Ocio de Madrid
    </h3>
    <?php $the_query = new WP_Query('showposts=3&offset=4&cat=-5978,-290,-1725,-2917'); while ($the_query->have_posts()) : $the_query->the_post();?>
      <?php get_template_part('components/article-list'); ?>
    <?php endwhile; ?>
    <div class="page-sidebar__read-more">
      Puedes leer más sobre <a href="">deportes</a>, <a href="">conciertos</a>, <a href="">teatros</a> y <a href="">otros</a>.
    </div>
  </div>
  <div class="page-sidebar__ads">
    <?php get_template_part('ads/media-pag'); ?>
  </div>
</section>

