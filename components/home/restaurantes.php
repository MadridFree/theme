<section class="section page-sidebar page-sidebar--reverse">
  <div class="page-sidebar__content page-sidebar__content--reverse">
    <h3 class="page-sidebar__title">
      Restaurantes de Madrid
    </h3> 
    <div class="restaurantes-list">
      <?php $the_query = new WP_Query('showposts=9'); while ($the_query->have_posts()) : $the_query->the_post();?>
        <?php get_template_part('components/restaurantes-list'); ?>
      <?php endwhile; ?>
    </div>
    <div class="page-sidebar__read-more">
      Puedes <a href="">ver todos los restaurantes</a> que hemos publicado.
    </div>
  </div>

</section>

