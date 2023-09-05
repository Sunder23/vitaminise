<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vitaminise
 */

?>        

<!-- Investment footer -->
        <footer class="footer_investors">
            <div class="footer_investors__container">
				<?php if(get_field('investors_footer_logo', 'options')) :?>
                	<a <?php $locale = get_locale(); if($locale == 'uk'): ?>  href="/investors" <?php else : ?> href="/en/investors-en" <?php endif; ?> ><img src="<?php the_field('investors_footer_logo', 'options')?>" alt="Loog"></a>
				<?php endif ?>
				<?php $locale = get_locale(); 
				 if($locale == 'uk'): ?> 
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu'        => 'footer_investors',
							'container_class'=> '',
							'menu_class' => 	'footer_investors_menu'
						)
					);
				?>
				<?php else : ?>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu'        => 'footer_investors_en',
							'container_class'=> '',
							'menu_class' => 	'footer_investors_menu'
						)
					);
				?>
				<?php endif;?>				
            </div>
        </footer>
        <!-- Investment footer END -->
        <!-- END Footer -->
	<div id='toTop'><svg xmlns="http://www.w3.org/2000/svg" width="26" height="17" viewBox="0 0 26 17" fill="none">
		<path d="M2 14.5L13 2L24 14.5" stroke="#F2F9E9" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
	</svg></div>	
</div>
<?php wp_footer(); ?>

</body>
</html>