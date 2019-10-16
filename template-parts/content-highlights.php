<?php
//highlights section
$highlights_heading = get_field('highlights_heading');
?>

<div id="highlights" class="row expanded" data-equalizer>
	<div class="highlights-content">
		<h2  class="text-center"><?php the_field('highlights_heading'); ?></h2>
		
		<div id="4080701046" class="large-8 columns collapse">
			
	   <?php get_template_part( 'template-parts/content', 'latest-post' );
			?>
			
		<?php echo do_shortcode( '
			[ajax_load_more post_type="post" posts_per_page="1" pause="true" scroll="false" button_label="Show More"]' ); ?>

		</div>

		<div class="large-4 columns collapse">
			<?php get_template_part( 'template-parts/content', 'trending' );
			?>
		</div>
	</div>
</div>