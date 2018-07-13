<section class="section destacado">
    <?php $the_query = new WP_Query('showposts=1&cat=destacado'); while ($the_query->have_posts()) : $the_query->the_post();?>
      <div class="destacado__content">
        <div class="destacado__sms">
          Destacamos
        </div>
        <h2 class="destacado__big-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
    <?php endwhile; ?>
        <div class="destacado__minipost">
          <?php $the_query = new WP_Query('showposts=3&offset=1&cat=destacado'); while ($the_query->have_posts()) : $the_query->the_post();?>
            <div class="destacado__minipost-box">
              <div class="destacado__minipost-cat">
                <?php get_template_part('atoms/category-link'); ?>
              </div>
              <h3 class="destacado__minipost-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_title(); ?>
                </a>
              </h32>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php $the_query = new WP_Query('showposts=1&cat=destacado'); while ($the_query->have_posts()) : $the_query->the_post();?>
        <picture class="destacado__thumb">
          <?php the_post_thumbnail('xxlarge', array( 'class' => 'no-lazy' )); ?>
        </picture>
      <?php endwhile; ?>

</section>