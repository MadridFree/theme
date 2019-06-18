<section class="section page-sidebar">
  <div class="page-sidebar__content">
    <h3 class="page-sidebar__title">
      Aún más ocio
    </h3>
    <?php $the_query = new WP_Query('showposts=6&offset=8&cat=-7,-5978,-290,-1725,-2917'); while ($the_query->have_posts()) : $the_query->the_post();?>
      <?php get_template_part('components/article-list'); ?>
    <?php endwhile; ?>
    <div class="page-sidebar__read-more">
      Puedes leer más sobre <a href="https://www.madridfree.org/category/deporte/">deportes</a>, <a href="https://www.madridfree.org/category/musica/">conciertos</a> y <a href="https://www.madridfree.org/category/deporte/">teatros</a>.
    </div>
  </div>
  <div class="page-sidebar__ads">
    <?php get_template_part('ads/media-pag'); ?>
  </div>
</section>

