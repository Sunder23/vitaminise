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
<body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php the_field('gtm','options');?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->	
    <div class="wrapper">
        <header class="header <?php if(is_front_page() === false ): ?> header_not_home<?php endif ?>">
            <div class="header__container">
                <a href="<?php echo home_url()?>" class="header_logo">
                    <picture>
                        <source srcset="<?php the_field('logo_mobile','options');?>" media="(max-width: 764px)" alt="mobile logo" />
                        <img src="<?php the_field('logo_desctop','options');?>" alt="logo">
                    </picture>
                </a>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container_class'=> 'header_menu',
							'menu_class' => 	'header_menu_list'
						)
					);
					?>						

               
                <ul class="header_socials socials">
            <?php if (have_rows('socials', 'options')):
                    while (have_rows('socials', 'options')) : the_row(); ?>		
					<?php if (have_rows('item', 'options')):
							while (have_rows('item', 'options')) : the_row(); ?>							
								<li><a href="<?php echo get_sub_field('link', 'options')['url']?>" target="<?php echo get_sub_field('link', 'options')['target']?>"><img src="<?php the_sub_field('icone')?>" alt="socials"></a></li>
							<?php endwhile;
						endif; 
					?>			                   
					<?php endwhile;
                endif; 
            ?>										
                </ul>
                <div class="header_menu_burger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </header>