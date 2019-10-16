<?php
/**
* Template part for displaying single post heading section in single.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
?>

<header>
    
    <?php //if the child page doesn't have a featured images
    //gcc_featured_image_on_child(); ?>
    
    <div class="hero-section-text">
      <h1 class="entry-title"><?php the_title(); ?></h1>

    <?php if ( 'post' === get_post_type() ) : ?>
        <p><?php gcc_wp_2018_posted_on();
      ?></p>
      <?php endif; ?>

    </div>
    
</header>