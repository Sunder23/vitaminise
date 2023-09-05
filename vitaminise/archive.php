<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vitaminise
 */

get_header();
?>

<!-- Blog -->
            <section class="blog blog_page">
                <div class="blog__container">

		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
						<article class="blog_item">
							<a href="<?php the_permalink();?>">
								<p>Блог</p>
								<h3><?php the_title();?></h3>
							</a>
						</article>	
		
		<?php	endwhile;

			the_posts_navigation();

		else :


		endif;
		?>

<?php if ($wp_query->max_num_pages > 1) : ?>
    <script>
    var ajaxurl = '<?php echo site_url(); ?>/wp-admin/admin-ajax.php';
    var posts_vars = '<?php echo serialize($wp_query->query_vars); ?>';
    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
    </script>
    <button id="loadmore">Показать ещё</button>
<?php endif; ?>	


					
                </div>
            </section>
            <!-- END Blog -->
<?php
get_sidebar();
get_footer();
