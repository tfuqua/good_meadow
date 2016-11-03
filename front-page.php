<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ukrops
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <!-- Carousel -->
    <?php if( have_rows('carousel') ) { ?>
      <div class="good-meadow-carousel">
        <?php while ( have_rows('carousel') ) : the_row();
            if (get_sub_field('carousel_image') != '') { ?>
              <div>
                <?php echo wp_get_attachment_image(get_sub_field('carousel_image'), 'full', false, array( 'class' => '') ); ?>
              </div>
              <?php
            }
        endwhile; ?>
      </div>
    <?php } ?>

    <div class="home-content">
      <div class="container-fluid">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          echo the_content();
        endwhile; else:
            // no posts found
        endif; ?>
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
