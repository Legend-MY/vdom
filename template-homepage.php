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

			<div class="about__section" id="about__section">
                <div class="about__container _container">
                    <h2 class="about__title"><?php pll_e('about_title'); ?></h2>
                    <div class="about__description"><?php pll_e('about_text'); ?></div>
                    <div class="about__advantages">
                        <div class="about__advantages_box">
                            <div class="about__advantages_img"><img src="<?php the_field('иконка_первого_блока');?>" alt=""></div>
                            <div class="about__advantages_text"><?php pll_e('about_text_1'); ?></div>
                        </div>
                        <div class="about__advantages_box">
                            <div class="about__advantages_img"><img src="<?php the_field('иконка_второго_блока'); ?>" alt=""></div>
                            <div class="about__advantages_text"><?php pll_e('about_text_2'); ?></div>
                        </div>
                        <div class="about__advantages_box">
                            <div class="about__advantages_img"><img src="<?php the_field('иконка_третьего_блока'); ?>" alt=""></div>
                            <div class="about__advantages_text"><?php pll_e('about_text_3'); ?></div>
                        </div>
                    </div>                   
                </div>

            </div><!-- #about__section -->
            <div class="catalog__section" id="catalog__section">
                <div class="catalog__container _container">
                    <div class="catalog__line">
                        <a href="#" class="catalog__link" id="catalog__link"><?php pll_e('catalog_link'); ?></a>
                    </div>
                    <div class="catalog__box">
                        <div class="catalog__menu">
                            <?php wp_nav_menu( [
                                        'theme_location'  => 'left_aside',
                                        'menu'            => '',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => 'menu menu_category_home',
                                        'menu_id'         => 'menu_category_home',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => '',
                                    ] );
                            ?>
                        </div>
                        <div class="catalog__menu_category">

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_1'); ?>" alt="<?php pll_e('catalog_1'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_1');?>" class="catalog__menu_title"><?php pll_e('catalog_1'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_2'); ?>" alt="<?php pll_e('catalog_2'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_2');?>" class="catalog__menu_title"><?php pll_e('catalog_2'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_3'); ?>" alt="<?php pll_e('catalog_3'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_3');?>" class="catalog__menu_title"><?php pll_e('catalog_3'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_4'); ?>" alt="<?php pll_e('catalog_4'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_4');?>" class="catalog__menu_title"><?php pll_e('catalog_4'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_5'); ?>" alt="<?php pll_e('catalog_5'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_5');?>" class="catalog__menu_title"><?php pll_e('catalog_5'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_6'); ?>" alt="<?php pll_e('catalog_6'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_6');?>" class="catalog__menu_title"><?php pll_e('catalog_6'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_7'); ?>" alt="<?php pll_e('catalog_7'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_7');?>" class="catalog__menu_title"><?php pll_e('catalog_7'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_8'); ?>" alt="<?php pll_e('catalog_8'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_8');?>" class="catalog__menu_title"><?php pll_e('catalog_8'); ?></a>
                            </div>

                            <div class="catalog__menu_item">
                                <div class="catalog__menu_background">
                                    <img src="<?php the_field('фон_пункта_меню_9'); ?>" alt="<?php pll_e('catalog_9'); ?>">
                                </div>
                                <a href="<?php the_field('ссылка_каталога_9');?>" class="catalog__menu_title"><?php pll_e('catalog_9'); ?></a>
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- catalog section -->
            <div class="vendor__section">
                <div class="vendor__container _container">
                    <div class="vendor__slider" id="vendor_slider">
                        <?php
                            // указываем категорию 30 и выключаем разбиение на страницы (пагинацию)
                            $query = new WP_Query( 'cat=32&nopaging=1' ); 
                            if( $query->have_posts() ){
                                while( $query->have_posts() ){
                                    $query->the_post();
                                    ?>
                                    <div class="vendor__slide">
                                        <div class="vendor__img">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div> 
                                   
                                    <?php
                                }
                                wp_reset_postdata(); // сбрасываем переменную $post
                            } 
                            
                            ?>
                    </div>
                </div>
            </div>          
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
