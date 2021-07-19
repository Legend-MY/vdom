<?php

// Подключение своих скриптов
add_action( 'wp_enqueue_scripts', 'vdom_scripts' );
function vdom_scripts(){
	 wp_enqueue_script('vdom-scripts-first', get_stylesheet_directory_uri() . '/assets/js/app.min.js');
}
// --------

// Подключение плагина polylang
add_shortcode( 'polylang', 'polylang_shortcode' );
function polylang_shortcode() {
	ob_start();
	pll_the_languages(array('display_names_as'=>'slug', 'hide_if_empty'=>0));
	$flags = ob_get_clean();
	return $flags;
}
// --------

// Что выводить в содержимом товара
remove_all_actions('woocommerce_single_product_summary');
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
// --------












?>