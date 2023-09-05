<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vitaminise
 */

get_header();
?>
            <section class="blog blog_page">
                <div class="blog__container">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		endif;
		?>
					
                </div>
            </section>
            <!-- END Blog -->	
<div class="more_btn__container">

<?php
global $wp_query;
 
// текущая страница
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
// максимум страниц
$max_pages = $wp_query->max_num_pages;
 
// если текущая страница меньше, чем максимум страниц, то выводим кнопку
if( $paged < $max_pages ) {
	echo '<div id="loadmore" style="text-align:center;">
		<a href="#" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '" class="button">Показати більше статтей</a>
	</div>';
}
?>	
</div>
					
<?php
get_footer();
