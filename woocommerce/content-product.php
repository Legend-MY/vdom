<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>


<?php
if( is_front_page() ){ ?>
                            <div class="offer_slide">
                                <div class="offer_slide_content">
                                    <div class="offer_slide_img">
                                    	<img src="<?php the_field('изображение_акционного_товара_на_главной_странице'); ?>" alt="img" />
                                    </div>
                                    <div class="offer_slide_box">
                                        <div class="offer_slide_title"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></div>
                                        
                                        
                                        <div class="offer_action_box">
                                            <div class="action_price_add">
												<?php
													global $product;
													echo apply_filters(
														'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
														sprintf(
															'<a href="%s" data-quantity="%s" class="%s" %s><span class="price__full">%s</span><span class="price__sale">%s</span><svg width="47" height="35" viewBox="0 0 47 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M46.5726 13.6205L25.0302 0.155283C24.5829 -0.123363 23.9739 -0.0168195 23.67 0.39328C23.5599 0.541818 23.501 0.717203 23.5007 0.896795V8.99384C8.44071 9.56477 0.195809 23.2275 0 33.1684V33.2133C0 33.7091 0.438435 34.111 0.979227 34.111C1.51396 34.1111 1.94983 33.7178 1.95845 33.2277V33.1756C2.06806 30.7644 12.3614 20.3639 23.5007 19.775V27.8272C23.5014 28.323 23.9403 28.7244 24.481 28.7239C24.6769 28.7237 24.8683 28.6696 25.0303 28.5687L46.5726 15.1035C47.0193 14.824 47.1344 14.2656 46.8295 13.856C46.7606 13.7636 46.6734 13.6836 46.5726 13.6205Z" fill="white"/>
</svg>
</a>',
															esc_url( $product->get_permalink() ),
															esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
															esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
															isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
															esc_html($product->get_regular_price(). get_woocommerce_currency_symbol() ),
															esc_html( get_post_meta( get_the_ID(), '_price', true) . get_woocommerce_currency_symbol())
															
															
														),
														$product,
														$args
													);
												?>
                      						</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


<?php
}
else {
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
<?php
}
?>



