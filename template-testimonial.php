<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Testimonials
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">
			
            <div class="testimonial__section">
                <div class="testimonial__container">
                    
                        <?php
                            // указываем категорию 30 и выключаем разбиение на страницы (пагинацию)
                            $query = new WP_Query( 'cat=41&nopaging=1' ); 
                            if( $query->have_posts() ){
                                while( $query->have_posts() ){
                                    $query->the_post();
                                    ?>
                                    <div class="testimonial__single">
                                        <div class="testimonial__img">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="testimonial__box">
                                            <div class="testimonial__title"><?php the_title(); ?></div>
                                            <div class="testimonial__wrapper">
                                                <div class="testimonial__questions">
                                                    <div class="testimonial__answer">
                                                        <div class="testimonial__icon">
                                                            <!-- этот блок testimonial__icon сделаешь бекграундом -->
                                                        </div>
                                                        <div class="testimonial__text"><?php the_field('ответ_владельца'); ?></div>
                                                    </div>
                                                    <div class="testimonial__user_question">
                                                        <div class="testimonial__user_icon">
                                                            <!-- testimonial__user_icon тоже сделаешь бекграундом -->
                                                        </div>
                                                        <div class="testimonial__user_text"><?php the_field('запрос_клиента'); ?></div>
                                                    </div>
                                                </div>
                                                <div class="testimonial__user_testimonial">
                                                    <div class="testimonial__user_wrapper">
                                                        <div class="testimonial__user_name"><?php the_field('имя_клиента'); ?></div>
                                                        <div class="testimonial__user_stars"></div>
                                                    </div>
                                                    <div class="testimonial__user_comment"><?php the_field('ответ_клиента'); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                   
                                    <?php
                                }
                                wp_reset_postdata(); // сбрасываем переменную $post
                            } 
                            
                            ?>
                </div>
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
            </div>          
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
