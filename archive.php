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
<div class="row expanded content-area">

  <div class="small-12 medium-12 large-9 float-left columns" id="main" tabindex="0">

    <div class="entry-content">
    
    <header class="hero-section">
     
      <div class="hero-section-text">
        <h1><?php echo $post_page_title; ?></h1>
      </div>

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /> 

    </header>

    <hr/>

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
    <hr/>
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
    
    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php if ( 'post' === get_post_type() ) : ?>
        <p><?php gcc_wp_2018_posted_on();
      ?></p>
      <?php endif; ?>

      <hr/>
      
         <?php else: ?>
    
    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php if ( 'post' === get_post_type() ) : ?>
        <p><?php gcc_wp_2018_posted_on();
      ?></p>
      <?php endif; ?>
      <hr/>
      
    <?php endif; ?>
    <?php endwhile;  ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>
    <?php endif; ?>


<?php echo do_shortcode( '
            [ajax_load_more post_type="post" posts_per_page="1" pause="true" scroll="false" button_label="Show More"]' ); ?>
</div>
</div>
<?php //Template Sidebar
get_sidebar(); ?>
</div>

</article>
<?php
get_footer();