<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Главная</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
		<header class="header">
			<div class="header__top top-header">
				<div class="top-header__container _container">
					<div class="top-header__row" data-da=".menu__body, 767, 1">
						<a href="https://www.google.com/maps/place/Любечская ул., 155, Чернигов, Черниговская область, 14000/@51.5123313,31.2523885,17z/data=!3m1!4b1!4m5!3m4!1s0x46d5462e02485e0b:0x6dbb936fd3eb8000!8m2!3d51.512328!4d31.2545773" class="top-header__address" target="_blank">
							г. Чернигов, ул. Любечская, 155
						</a>
						<div class="top-header__worktime">пн-пт с 9:00 до 18:00, сб-вс с 9:00 до 16:00</div>
						<div class="top-header__phones phones-header">
							<a href="tel:+380962525511" class="phones-header__phone">(096) 252-55-11</a>
							<a href="tel:+380636125489" class="phones-header__phone">(063) 612-54-89</a>
						</div>
					</div>
				</div>
			</div>
			<div class="header__container _container">
				<div class="header__wrapper">
					<a href="/" class="header__logo">
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

					<div class="header__menu menu">
						<div class="menu__icon icon-menu">
							<picture><source srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/img/menu-icon.svg" type="image/webp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/menu-icon.svg" alt="menu"></picture>
						</div>
						<nav class="menu__body">
							<?php wp_nav_menu( [
										'theme_location'  => '',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu menu__list',
										'menu_id'         => '',
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
						</nav>
					</div>

					<div class="mobile-menu">
						<div class="mobile-menu__wrapper">
							<div class="mobile-menu__top">
								<button type="button" class="mobile-menu__btn"></button>
								<ul class="mobile-menu__langs">
									<?php echo polylang_shortcode(); ?>
								</ul>
							</div>
							<?php wp_nav_menu( [
										'theme_location'  => '',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu mobile-menu__list',
										'menu_id'         => '',
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

							<div class="mobile-menu__info">
								<a href="https://www.google.com/maps/place/Любечская ул., 155, Чернигов, Черниговская область, 14000/@51.5123313,31.2523885,17z/data=!3m1!4b1!4m5!3m4!1s0x46d5462e02485e0b:0x6dbb936fd3eb8000!8m2!3d51.512328!4d31.2545773" class="mobile-menu__address" target="_blank">
									г. Чернигов, ул. Любечская, 155
								</a>
								<div class="mobile-menu__worktime">
									<p>пн-пт с 9:00 до 18:00</p>
									<p>сб-вс с 9:00 до 16:00</p>
								</div>
								<div class="mobile-menu__phones phones-header">
									<a href="tel:+380962525511" class="phones-header__phone">(096) 252-55-11</a>
									<a href="tel:+380636125489" class="phones-header__phone">(063) 612-54-89</a>
								</div>
							</div>
						</div>
					</div>

					<div class="header__actions actions-header">
						<ul class="actions-header__langs">
							<?php echo polylang_shortcode(); ?>
						</ul>
						<div class="actions-header__search search-header">
							<button type="button" class="search-header__icon"></button>
							<form class="search-header__form" role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div>
									<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
									<input class="search-header__btn" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
									<input class="search-header__input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" autocomplete="off" />
									<button type="button" class="search-header__close"></button>
								</div>
							</form>
						</div>
						<button type="button" class="actions-header__cart"></button>
					</div>
				</div>
			</div>
		</header>