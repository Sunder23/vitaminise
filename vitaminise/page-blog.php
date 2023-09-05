<?php
/**
 *   * Template Name: Blog
 */

get_header();
?>        
<!-- Blog -->
            <section class="blog blog_page">
                <div class="blog__container">
		<?php
		$current = absint(
		  max(
			1,
			get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
		  )
		);
		$posts_per_page = 3;
		$query          = new WP_Query(
		  [
			'post_type'      => 'post',
			'posts_per_page' => $posts_per_page,
			'paged'          => $current,
			 'order' => 'ASC'
		  ]
		);
		if ( $query->have_posts() ) {
		  ?>
			
		<?php
	
		  while ( $query->have_posts() ) {
			$query->the_post();
		?>					

						<article class="blog_item">
							<a href="<?php the_permalink();?>">
								<p>Блог</p>
								<h3><?php the_title();?></h3>
							</a>
						</article>	
						
  <?php  ;}?>	
 			<?php			
  }	?>	
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
get_footer();
