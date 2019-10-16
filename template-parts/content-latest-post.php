<?php
$args =  array (
'post_type' => 'post',
'posts_per_page'=>5
);
?>
<?php
$query = new WP_Query( $args ); ?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post();?>
<?php if ( has_post_thumbnail() ) : ?>
<div class="row latest-post" id="news-post">
  <div class="medium-12 columns">
    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php if ( 'post' === get_post_type() ) : ?>
        <p><?php gcc_wp_2018_posted_on();
      ?></p>
      <?php endif; ?>
  </div>
</div>
<?php else: ?>
<div class="row latest-post">
  <div class="medium-12 columns">
    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php if ( 'post' === get_post_type() ) : ?>
        <p><?php gcc_wp_2018_posted_on();
      ?></p>
      <?php endif; ?>
  </div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>
<?php endif; ?>