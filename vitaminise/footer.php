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

        <!-- Footer -->
        <footer class="footer">
            <div class="footer__container">
                <div class="footer_logo_content">
                    <a href="<?php echo home_url()?>">
                        <img src="<?php the_field('footer','options');?>" alt="logo">
                    </a>
                    <p><?php the_field('text_under_logo','options');?></p> 
                    <div class="footer_socials">
            <?php if (have_rows('social_footer', 'options')):
                    while (have_rows('social_footer', 'options')) : the_row(); ?>								
                        <a href="<?php echo get_sub_field('link', 'options')['url']?>"  target="<?php echo get_sub_field('link', 'options')['target']?>">
                            <img src="<?php the_sub_field('icone')?>" alt="">
                        </a>
					<?php endwhile;
                endif; 
            ?>	
                    </div>
                </div>
						<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu'        => 'footer_menu',
							'container_class'=> 'footer_menu',
							'menu_class' => 	'footer_submenu'
						)
					);
					?>	
                <div class="form_contact">
                    <p>Написати нам листа!</p>
					<?php echo do_shortcode('[contact-form-7 id="195" title="Контактна форма 1"]')?>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
	<div id='toTop'><svg xmlns="http://www.w3.org/2000/svg" width="26" height="17" viewBox="0 0 26 17" fill="none">
		<path d="M2 14.5L13 2L24 14.5" stroke="#F2F9E9" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
	</svg></div>	
</div>
<?php wp_footer(); ?>

</body>
</html>
