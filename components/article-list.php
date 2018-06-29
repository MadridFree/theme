<article class="article-list">
  <div class="article-list__thumb">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="article-list__link">
      <picture class="article-list__picture picture">
        <?php the_post_thumbnail('medium', array( 'class' => 'no-lazy' )); ?>
      </picture>
    </a>
  </div>
  <div class="article-list__content">
    <div class="article-list__category">
      <?php get_template_part('atoms/category-link'); ?>
    </div>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="article-list__link">
      <h2 class="article-list__title">
          <?php the_title(); ?>
      </h2>
      <p class="article-list__paragraph">
        <?php $text = get_the_excerpt(); if(strlen($text ) > 150) {$text = substr($text , 0, 250);} echo "$text"; ?>
      </p>
    </a>
  </div>
</article>