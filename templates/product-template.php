<?php
/* Template Name: Product Template */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
	    <?php } ?>

			<div class="container-fluid product-content">
				<div class="row">
					<div class="col-md-10 col-md-push-1">
						<?php
						while ( have_posts() ) : the_post();
		        the_content();
		        $pageID = get_the_ID();
						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();