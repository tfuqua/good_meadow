<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main mrs-marshalls-page" role="main">

			<!-- Hero Image -->
	    <?php if(get_field('hero_image')) { ?>
	      <?php $background = wp_get_attachment_image_src(get_field('hero_image'), 'full', false); ?>
		     <div class="hero mini-hero" style="background-image: url('<?php echo $background[0] ?>');">
	        <div class="hero-text-wrapper">
	          <div>
	            <div class="hero-text">
	              <?php echo get_field('hero_heading')?>
	            </div>
	          </div>
	        </div>
	      </div>
	    <?php
				} else {
					while ( have_posts() ) : the_post(); ?>
						<div class="container-fluid">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</div><?php
					endwhile;
			 }?>

        <?php
				while ( have_posts() ) : the_post(); ?>

        <div class="container-fluid">
        	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        		<div class="entry-content">
        			<?php
        				the_content();

        				wp_link_pages( array(
        					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ukrops' ),
        					'after'  => '</div>',
        				) );
        			?>
        		</div><!-- .entry-content -->
        	</article><!-- #post-## -->
        </div>

        <?php
				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
