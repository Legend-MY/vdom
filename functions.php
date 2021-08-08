<?php

// Подключение своих скриптов
add_action( 'wp_enqueue_scripts', 'vdom_scripts' );
function vdom_scripts(){
	 wp_enqueue_script('vdom-scripts-first', get_stylesheet_directory_uri() . '/assets/js/app.js');
	 wp_enqueue_script('slick-slider-script', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null);
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


register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'left_aside'    => 'Меню категорий на главной',    //Название месторасположения меню в шаблоне
	'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));



// https://www.pandoge.com/stati-i-sovety/kak-sozdat-novuyu-oblast-dlya-vidzheta-v-wordpress
register_sidebar(array(
	'name' => 'Область фильтров', // Отображаемое название области в панели управления
	'id' => 'sidebar_new', // Уникальный ID области
	'description' => __( 'Область для вывода фильтров'),
	'before_widget' => '<div id="filter_box" class="filter__box">', // Начало обертки блока
	'after_widget' => '</div>', // Конец обертки блока
	'before_title' => '<h3 class="widget-title">', // Начало обертки заголовка
	'after_title' => '</h3>' // Конец обертки заголовка
));

// <?php dynamic_sidebar("Область фильтров"); ? >   // этот кусок кода нужно будет добавить в темплейт 


pll_register_string('Заголовок о нас на главной странице' ,'about_title');
pll_register_string('Текст о нас на главной странице','about_text');
pll_register_string('Текст преимуществ первого блока на главной странице','about_text_1');
pll_register_string('Текст преимуществ второго блока на главной странице','about_text_2');
pll_register_string('Текст преимуществ третьего блока на главной странице','about_text_3');
pll_register_string('Текст ссылки каталога на главной странице','catalog_link');

pll_register_string('Заголовок первого пункта меню каталога' ,'catalog_1');
pll_register_string('Заголовок второго пункта меню каталога' ,'catalog_2');
pll_register_string('Заголовок третьего пункта меню каталога' ,'catalog_3');
pll_register_string('Заголовок четвертого пункта меню каталога' ,'catalog_4');
pll_register_string('Заголовок пятого пункта меню каталога' ,'catalog_5');
pll_register_string('Заголовок шестого пункта меню каталога' ,'catalog_6');
pll_register_string('Заголовок седьмого пункта меню каталога' ,'catalog_7');
pll_register_string('Заголовок восьмого пункта меню каталога' ,'catalog_8');
pll_register_string('Заголовок девятого пункта меню каталога' ,'catalog_9');
pll_register_string('Текст кнопки фильтров' ,'filter_link');

pll_register_string('Адрес в шапке' ,'header_address');
pll_register_string('Время работы' ,'header_worktime');
pll_register_string('Номер телефона 1' ,'header_phone_1');
pll_register_string('Номер телефона 2' ,'header_phone_2');

pll_register_string('Адрес в футере' ,'footer_address');
pll_register_string('Номер телефона в футере 1' ,'footer_phone_1');
pll_register_string('Номер телефона в футере 2' ,'footer_phone_2');
pll_register_string('Почта в футере' ,'footer_mail');
pll_register_string('Facebook в футере' ,'footer_facebook');
pll_register_string('Instagram в футере' ,'footer_instagram');
pll_register_string('copy в футере' ,'footer_copyright');

pll_register_string('Слово цена в карточке товара' ,'product_price');



add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <span id="mini-cart-count" class="basket-btn__counter cart-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}

add_action( 'woocommerce_new_order', 'new_order_send_tg',  1, 1  );
function new_order_send_tg( $order_id ) {
    $order = new WC_Order( $order_id );
    $name = $_POST['billing_first_name'];
    $surname = $_POST['billing_last_name'];
    $phone = $_POST['billing_phone'];
   
    $msg = '*Магазин vdom.cn.ua*'."\n";
    $msg .= 'Новый заказ: '.$order_id."\n".'Имя: '.$name."\n".'Фамилия: '.$surname."\n".'Телефон: '.$phone;
 
    $userId = '509376170'; // Ваш id в телеграм
    $token = '1367969882:AAEgA6EuwYLhdjBz_rf2JyVdjIVen3ZEUxQ'; // Token бота
 
    file_get_contents('https://api.telegram.org/bot'. $token .'/sendMessage?chat_id='. $userId .'&text=' . urlencode($msg) . '&parse_mode=markdown'); // Отправляем сообщение
}