<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

	


	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="_container footer__container">
			<div class="footer__logo">
				<?php the_custom_logo( $blog_id ); ?>
			</div>
			<div class="footer__address_menu">
				
			</div>
			<div class="footer__menu">
				<?php wp_nav_menu('menu_class=bmenu&theme_location=bottom'); ?>
			</div>
			<div class="footer__social">
				<a href="" class="social_link">facebook</a>
				<a href="" class="social_link">instagram</a>
			</div>

		</div><!-- .footer__container -->
	</footer><!-- #colophon -->
	<div class="copyright__wrapper">
		<div class="copyright__container _container">
			Лучший магазин (с) 2017 Все права защищены. Интернет-магазин  строительных материалов
		</div>
	</div>




<?php wp_footer(); ?>

</body>
</html>
