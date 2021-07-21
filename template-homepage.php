<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">
			<div class="hero__section">
				<div class="offer_slider" id="offer_slider">
                          <?php echo do_shortcode('[products category="акция" products limit="15"]'); ?>
                </div>
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
