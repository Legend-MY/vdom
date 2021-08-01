<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Price
 *
 * @package storefront
 */

get_header(); ?>

    <?php
        /**
         * woocommerce_before_main_content hook.
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         */
        do_action( 'woocommerce_before_main_content' );
        woocommerce_breadcrumb( $args );

    ?>

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">
            <div class="price__container _container">
                <?php
                    // указываем категорию 42 и выключаем разбиение на страницы (пагинацию)
                    $query = new WP_Query( 'cat=44&nopaging=1' ); 
                    if( $query->have_posts() ){
                        while( $query->have_posts() ){
                            $query->the_post();
                            ?>
                            <div class="price__item">
                                <h2 class="price__title"><?php the_title();?></h2>
                                <div class="price__item_box">
                                    <div class="price__item_icon">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="price__item_content">
                                    <?php the_content();?>
                                    </div>
                                </div>
                            </div> 
                           
                            <?php
                        }
                        wp_reset_postdata(); // сбрасываем переменную $post
                    } 
                ?>   
            </div>
            

        </main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
