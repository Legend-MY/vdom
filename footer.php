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

						<a href="/" class="info-footer__logo">
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
								<a href="#">г. Чернигов, ул. Любечская, 155</a>
							</li>
							<li class="info-footer__phone">
								<a href="tel:+380962525511">(096) 252-55-11</a>
							</li>
							<li class="info-footer__phone">
								<a href="tel:+380636125489">(063) 612-54-89</a>
							</li>
							<li class="info-footer__mail">
								<a href="mailto:vdom2017@gmail.com ">vdom2017@gmail.com </a>
							</li>
						</ul>

						<?php wp_nav_menu('menu_class=bmenu info-footer__list info-footer__list_pages&theme_location=bottom'); ?>
					</div>
				</div>

				<div class="footer__social social-footer">
					<ul class="social-footer__list">
						<li>
							<a href="#">
								<picture><source srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/facebook.svg" type="image/webp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/facebook.svg" alt=""></picture>
							</a>
						</li>
						<li>
							<a href="#">
								<picture><source srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/instagram.svg" type="image/webp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/instagram.svg" alt=""></picture>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<div class="footer__copy">
		<p>Лучший магазин (с) 2017 Все права защищены. Интернет-магазин строительных материалов</p>
	</div>
</footer>




<?php wp_footer(); ?>

</body>
</html>
