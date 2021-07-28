<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: https://codex.wordpress.org/The_Loop
 *
 * @package storefront
 */

do_action( 'storefront_loop_before' );

while ( have_posts() ) :
	the_post();
	?>

	<a href="<?php the_permalink(); ?>" class="search__item">
		<div class="search__item_img">
			<?php 
				the_post_thumbnail(); 
			?>
		</div>
		<div class="search__item_title">
			<?php
				the_title(); 
			?>
		</div>
	</a>
	<?php

endwhile;

/**
 * Functions hooked in to storefront_paging_nav action
 *
 * @hooked storefront_paging_nav - 10
 */
do_action( 'storefront_loop_after' );
