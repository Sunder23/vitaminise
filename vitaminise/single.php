<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vitaminise
 */

get_header();
?>


		<?php
		while ( have_posts() ) :
			the_post(); ?>

        <!-- Post Content -->
        <section class="post_single">
            <div class="post_single__container">
                <p class="section_title post_single_title">
                    Блог
                </p>
                <h1><? the_title()?></h1>
                <time><?php the_date()?></time>
                <div class="post_single_content">
                    <?php the_content()?>
                </div>
            </div>
        </section>
        <!-- Post Content END -->
        <!-- Blog -->
		<?php $values = get_field( 'related_posts' ); ?>
		<?php if($values){?>
        <section  class="blog related">
            <div class="blog__container">
                <h2>Ще партія цікавої і корисної інформації</h2>
                <div class="swiper blog_swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper blog_wrapper">
				<?php foreach ( $values as $post_id ) {?>
                        <!-- Slides -->
                        <div class="swiper-slide blog_slide">
                            <article class="blog_item" style='background: <?php the_field('background_color', $post_id)?>'>
								<a href="<?php the_permalink($post_id);?>">
									<p>Блог</p>
									<h3><?php echo get_the_title($post_id);?></h3>
								</a>	
                            </article>
                        </div>
    <?php }; ?>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination blog_pagination"></div>
                </div>
            </div>
        </section>
    <?php }; ?>
        <!-- END Blog -->

		<?php endwhile; // End of the loop.
		?>


<?php
get_footer();
