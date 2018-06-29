<?php get_header(); ?>
<?php get_template_part('partials/ads/top'); ?>

<div class="wrapper">
	<h1 class="style_subtitles">
		<span>
				<?php printf( __( 'Resultado de búsqueda: %s' ), '<span>' . get_search_query() . '</span>' ); ?>
		</span>
	</h1>
	<section class="categ-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="listcontent">
		<div class="listcontent-thumb">  
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('fotogrande'); ?>
			</a>
		</div><!-- minthumb -->
	    <div class="listcontent-text">
	    	<div class="categori_links_style">
	    		<?php the_category(' '); ?>
			</div><!-- categori_links_style -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
	            </a>
	        </h2>
        	<span>
	        	<?php the_time('j M Y'); ?>
	      	</span>
			<p>
	            <?php $text = get_the_excerpt(); if(strlen($text ) > 120) {
	                $text = substr($text , 0, 120);
	            }
	            echo "$text..."; ?>
	        </p>
	      </div><!-- content_post -->
	   </article>
 <?php endwhile; ?> 
	</section>
	<section class="categ-side">
	<!-- ads -->
	<?php get_template_part('partials/ads/side-cat'); ?>
	<!-- ads -->
	</section>
</div><!-- wrapper -->

		
<?php get_template_part('partials/layout/nav'); ?>
<?php  else: ?>
<?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?>
<?php endif; ?>

 </div> <!-- Fin de wrapper. De nuevo ten en cuenta la estructura  tu plantilla-->

<?php get_footer(); ?>