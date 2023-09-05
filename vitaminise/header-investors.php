<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vitaminise
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?php the_field('gtm','options');?>');</script>
    	<!-- End Google Tag Manager -->
		<?php wp_head(); ?>
</head>
<body class='body_investors'>
    <div class="wrapper">
        <header class="header_investors">
            <div class="header_investors__container">
				<?php if(get_field('investors_logo', 'options')) :?>
				
                <a <?php $locale = get_locale(); if($locale == 'uk'): ?>  href="/investors" <?php else : ?> href="/en/investors-en" <?php endif; ?> class="header_investors_logo">
                    <img src="<?php the_field('investors_logo', 'options')?>" alt="logo">
                </a>
				<?php endif ?>
				<?php $locale = get_locale(); 
				 if($locale == 'uk'): ?> 
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu'        => 'investors_menu',
							'container_class'=> 'header_investors_menu',
							'menu_class' => 	'header_investors_menu_list'
						)
					);
					?>
				<?php else : ?>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu'        => 'investors_menu_en',
							'container_class'=> 'header_investors_menu',
							'menu_class' => 	'header_investors_menu_list'
						)
					);
					?>
				<?php endif;?>
				 <ul class="languade_investors">
				<?php 	$args = array(
						'show_flags'=>0,
						'show_names'=>1
						);
					?>
					<?php pll_the_languages($args) ?>
				</ul>
				<?php $locale = get_locale(); 
				 if($locale == 'uk'): ?> 
				<?php if(get_field('header_btn', 'options')):?>
                <a href="<?php echo get_field('header_btn', 'options')['url']?>" class="investors_btn"><?php echo get_field('header_btn', 'options')['title']?></a>
				<?php endif?>
				<?php else : ?>
				<?php if(get_field('header_btn_en', 'options')):?>
                <a href="<?php echo get_field('header_btn_en', 'options')['url']?>" class="investors_btn"><?php echo get_field('header_btn_en', 'options')['title']?></a>
				<?php endif?>
				<?php endif;?>
                <div class="header_menu_burger investors_burger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </header>