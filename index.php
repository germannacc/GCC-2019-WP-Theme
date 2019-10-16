<?php
/**
* The template for displaying all post.
*
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header();

$post_page_featured_image = get_field('post_page_featured_image', 'option');
$post_page_title= get_field('post_page_title', 'option');
// vars
  $url = $post_page_featured_image['url'];
  $title = $post_page_featured_image['title'];
  $alt = $post_page_featured_image['alt'];
  $caption = $post_page_featured_image['caption'];
  // thumbnail
  $size = 'large';
  $thumb = $post_page_featured_image['sizes'][ $size ];
  $width = $post_page_featured_image['sizes'][ $size . '-width' ];
  $height = $post_page_featured_image['sizes'][ $size . '-height' ];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php  if ( !empty( $post_page_featured_image ) ) { ?>


<!--Page Content-->
<div class="row gutter-small expanded content-area">
  <div class="small-12 medium-9 entry-content" id="main" tabindex="0">
    
    <header class="hero-section hero-section-single">
     
      <div class="hero-section-text">
        <h1><?php echo $post_page_title; ?></h1>
      </div>
<!-- 
     <img src="<?php //echo $thumb; ?>" alt="<?php// echo $alt; ?>" width="<?php //echo $width; ?>" height="<?php //echo $height; ?>" /> -->

    </header>

  <?php  }  else {  //.pagesubbanner
  // if page doesn't have a featured image
  ?>
    <header class="hero-section-plain">
      <?php //if the child page doesn't have a featured images
      //gcc_featured_image_on_child(); ?>
      <div class="hero-section-text">
        <h1><?php echo $post_page_title; ?></h1>
      </div>
    </header>
  <?php } ?>

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
    
    <div class="row latest-post">
      <div class="medium-12 columns">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </div>
    <?php else: ?>
    <div class="row latest-post" id="news-post">
      <div class="medium-12 columns">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </div>


    <?php endif; ?>
    <?php endwhile;  ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>
    <?php endif; ?>
    

</div>
<?php //Template Sidebar
get_sidebar(); ?>
</div>

</article>
<?php
get_footer();