<article class="restaurantes-list__article">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="restaurantes-list__link">
    <div class="restaurantes-list__thumb">
      <picture class="restaurantes-list__picture picture">
        <?php the_post_thumbnail('fotogrande', array( 'class' => 'no-lazy' )); ?>
      </picture>
    </div>
    <div class="restaurantes-list__content">
      <ul class="restaurantes-list__icons">
        <li class="restaurantes-list-li">
          <?php the_field('estilo'); ?>
        </li>
        <li class="restaurantes-list-li restaurantes-list-li--price">
          <?php the_field('rango_precio'); ?>
        </li>
      </ul>
      <h2 class="restaurantes-list__title">
          <?php the_title(); ?>
      </h2>
    </div>
  </a>
</article>
