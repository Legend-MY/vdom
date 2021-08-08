<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

	  

<footer class="footer">
	<div class="footer__wrapper">

		<div class="footer__container _container">
			<div class="footer__row">
				<div class="footer__info info-footer">
					<div class="info-footer__row">

						<a href="<?php echo home_url(); ?>" class="info-footer__logo">
						<?php 
							$logo_img = '';
								if( $custom_logo_id = get_theme_mod('custom_logo') ){
									$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
										'class'    => 'custom-logo',
										'itemprop' => 'logo',
									) );
								}
							echo $logo_img; 
						?>
						</a>

						<ul class="info-footer__list">
							<li class="info-footer__location">
								<?php pll_e('footer_address'); ?>
							</li>
							<li class="info-footer__phone">
								<?php pll_e('footer_phone_1'); ?>
							</li>
							<li class="info-footer__phone">
								<?php pll_e('footer_phone_2'); ?>
							</li>
							<li class="info-footer__mail">
								<?php pll_e('footer_mail'); ?>
							</li>
						</ul>

						<?php wp_nav_menu('menu_class=bmenu info-footer__list info-footer__list_pages&theme_location=bottom'); ?>
					</div>
				</div>

				<div class="footer__social social-footer">
					<ul class="social-footer__list">
						<li>
							<a href="<?php pll_e('footer_facebook'); ?>">
								<picture><source srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/facebook.svg" type="image/webp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/facebook.svg" alt=""></picture>
							</a>
						</li>
						<li>
							<a href="<?php pll_e('footer_instagram'); ?>">
								<picture><source srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/instagram.svg" type="image/webp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/instagram.svg" alt=""></picture>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<div class="footer__copy">
		<p><?php pll_e('footer_copyright'); ?></p>
	</div>
</footer>




<?php wp_footer(); ?>

</body>
</html>
