  <header>
    <div class="hero-section-text">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
    <div class="row expanded crumbs-container gutter-small">
        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
          <?php the_breadcrumb() ?>
        </nav>
    </div>
</header>