<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vitaminise
 */

?>

<article class="blog_item" style='background: <?php if(get_field('background_color')){ 
														the_field('background_color'); 
														} else { echo "#92C84A"; };  ?> '>
	<a href="<?php the_permalink();?>">
		<p>Блог</p>
		<h3><?php the_title();?></h3>
	</a>
</article>	
