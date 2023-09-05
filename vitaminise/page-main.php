<?php
/**
 *   * Template Name: Main
 */

get_header();
?>
        <main class="page">
            <!-- Hero -->
            <section class="hero">
                <div class="hero_inner">
                    <div class="hero__wrapper">
            <?php if (have_rows('section_one')):
                    while (have_rows('section_one')) : the_row(); ?>							
                        <div class="hero__container">
                            <div class="swiper hero_swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="hero_left">
                                            <div class="hero_left_content">
                                                <h1><?php the_sub_field('title')?></h1>
                                                <p><?php the_sub_field('subtitle')?></p>
                                                <ul class="hero_socials socials">
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
                                            </div>
								<?php if (have_rows('clients')):
										while (have_rows('clients')) : the_row(); ?>												
                                            <div class="hero_clients">													
                                                <div class="hero_clients_images">
                                                    <img src="<?php the_sub_field('client_image')?>" alt="client">
                                                </div>
                                                <p class="hero_clients_description">
                                                    <?php the_sub_field('descrition')?>
                                                </p>												
                                            </div>
											<?php endwhile;
										endif; 
									?>												
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="hero_rigt">
                                            <img src="<?php the_sub_field('right_image')?>" alt="hero_image">
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="hero_ pagination swiper-pagination"></div>
                                <!-- If we need navigation buttons -->
                                <div class="hero_arrow_wrapper">
                                    <div class="hero_arrow hero_arrow_prev"><img src="/wp-content/themes/vitaminise/images/mobile_hero_arrow.png">
                                    </div>
                                    <div class="hero_arrow hero_arrow_next"><img src="/wp-content/themes/vitaminise/images/mobile_hero_arrow.png">
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php endwhile;
                endif; 
            ?>																
                    </div>
                </div>
            </section>
            <!-- END Hero -->
            <!-- Make  -->
<?php if (have_rows('section_two')):
		while (have_rows('section_two')) : the_row(); ?>				
            <section class="make">
                <div class="make__container">
<?php if (have_rows('top_content')):
		while (have_rows('top_content')) : the_row(); ?>						
                    <div class="make_top">
                        <h2><?php the_sub_field('title')?></h2>
                        <div class="make_top_items">							
<?php if (have_rows('items')):
		while (have_rows('items')) : the_row(); ?>	      
							<div class="make_item">	
<?php if (have_rows('item')):
		while (have_rows('item')) : the_row(); ?>	    								
                                <img src="<?php the_sub_field('image')?>" alt="<?php the_sub_field('title')?>">
                                <p><?php the_sub_field('title')?></p>									
		<?php endwhile;
   endif; 
?>                            
							</div>
		<?php endwhile;
   endif; 
?>								
                        </div>
                    </div>
		<?php endwhile;
   endif; 
?>			

<?php if (have_rows('bottom_content')):
		while (have_rows('bottom_content')) : the_row(); ?>						
                    <div class="make_bottom">
<?php if (have_rows('cart_default')):
		while (have_rows('cart_default')) : the_row(); ?>							
                        <div class="make_bottom_item">							
                            <h2>
                                <?php the_sub_field('title')?>
                            </h2>
                            <ul>
<?php if (have_rows('item')):
		while (have_rows('item')) : the_row(); ?>									
                                <li><span><?php the_sub_field('number')?></span><?php the_sub_field('text')?></li>
		<?php endwhile;
   endif; 
?>								
                            </ul>
                        </div>
		<?php endwhile;
   endif; 
?>							
 <?php if (have_rows('cart_vitamin')):
		while (have_rows('cart_vitamin')) : the_row(); ?>	                      
						<div class="make_bottom_item vitamines">
                            <h2>
                               <?php the_sub_field('title')?>
                            </h2>
                            <ul>
<?php if (have_rows('item')):
		while (have_rows('item')) : the_row(); ?>									
                                <li><span><?php the_sub_field('number')?></span><?php the_sub_field('text')?></li>
		<?php endwhile;
   endif; 
?>	
                            </ul>
                        </div>
		<?php endwhile;
   endif; 
?>							
                    </div>
		<?php endwhile;
   endif; 
?>						
                </div>
            </section>
		<?php endwhile;
   endif; 
?>				
            <!-- END Make  -->
            <!-- Products -->
<?php if (have_rows('section_three')):
		while (have_rows('section_three')) : the_row(); ?>					
            <section id="products" class="products">
                <div class="products__container">
<?php if (have_rows('top_content')):
		while (have_rows('top_content')) : the_row(); ?>					
                    <p class="products_title section_title"><?php the_sub_field('orange_title')?></p>
                    <div class="products_content">
                        <h2><?php the_sub_field('title')?></h2>
                        <p><?php the_sub_field('text')?></p>					
                    </div>
		<?php endwhile;
   endif; 
?>		
					
                    <div class="products_items">
<?php if (have_rows('cards')):
		while (have_rows('cards')) : the_row(); ?>	
						
<?php if (have_rows('item')):
		while (have_rows('item')) : the_row(); ?>							
                        <div class="products_item <?php if(get_sub_field('soon')) : echo 'soon' ?> <?php endif; ?>  <?php if(get_sub_field('disable')) : echo 'disabled' ?>  <?php endif; ?>">
                             <?php if( get_sub_field('soon')): ?> 
							<div class="soon_item">
                                <p>Незабаром</p>
                            </div>
							<?php endif; ?> 
                            <img src="<?php the_sub_field('icone')?>" alt="<?php the_sub_field('title')?>">
                            <h4><?php the_sub_field('title')?></h4>
                            <p><?php the_sub_field('desctiption')?>
                            </p>
							<?php if( get_sub_field('link_on_page')): ?> 
							<a href="<?php echo get_sub_field('link_on_page')['url'] ?>" target="<?php echo get_sub_field('link_on_page')['target']?>">
								<?php echo get_sub_field('link_on_page')['title'] ?>
							</a>
							<?php endif; ?>
                        </div>
		<?php endwhile;
   endif; 
?>						
		<?php endwhile;
   endif; 
?>
                    </div>
                </div>
            </section>
		<?php endwhile;
   endif; 
?>			
            <!-- END Products -->
            <!-- Benefits -->
<?php if (have_rows('section_four')):
		while (have_rows('section_four')) : the_row(); ?>				
            <section class="benefits">
                <div class="benefits_wrapper">
                    <div class="benefits__container">
                        <div class="benefits_image">
                            <div class="benefits_image_wrapper">
                                <div class="benefits_image_inner">
                                    <img src="<?php the_sub_field('left_image')?>" alt="benefits">
                                </div>
                            </div>
                        </div>
						
                        <div class="benefits_content">
<?php if (have_rows('right_content')):
		while (have_rows('right_content')) : the_row(); ?>								
                            <h2><?php the_sub_field('title')?></h2>
                            <ul class="benefits_list">
<?php if (have_rows('items')):
		while (have_rows('items')) : the_row(); ?>								
                                <li class="<?php if(get_sub_field('disable')) : echo 'disabled' ?>  <?php endif; ?>"> <?php the_sub_field('text')?></li>
		<?php endwhile;
	endif; 
?>								
                            </ul>		                   
		<?php endwhile;
	endif; 
?>								
                            <ul class="benefits_socials socials">
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
                        </div>
						
                    </div>
                </div>
            </section>
		<?php endwhile;
   endif; 
?>				
            <!-- END Benefits -->
            <!-- About -->
<?php if (have_rows('section_five')):
		while (have_rows('section_five')) : the_row(); ?>				
            <section id="about" class="about">
                <div class="about__container">
<?php if (have_rows('top_content')):
		while (have_rows('top_content')) : the_row(); ?>						
                    <p class="section_title about_title">
                        <?php the_sub_field('orange_title')?>
                    </p>
                    <h2><?php the_sub_field('title')?></h2>
                    <p><?php the_sub_field('text')?></p>
		<?php endwhile;
   endif; 
?>	                   
					<ul class="about_items">
<?php if (have_rows('items')):
		while (have_rows('items')) : the_row(); ?>							
                        <li class="about_item">
                            <p class="about_number"><?php the_sub_field('number')?>.</p>
                            <h4><?php the_sub_field('title')?></h4>
                            <p><?php the_sub_field('text')?></p>
                        </li>
		<?php endwhile;
   endif; 
?>
                    </ul>
                </div>
            </section>
		<?php endwhile;
   endif; 
?>			
            <!-- END About -->
            <!-- Partners -->
            <section id="partners" class="partners">
                <div class="partners__container">
<?php if (have_rows('section_six')):
		while (have_rows('section_six')) : the_row(); ?>						
                    <div>
                        <img src="<?php the_sub_field('image')?>" alt="partners">
                    </div>
		<?php endwhile;
   endif; 
?>	
                </div>				
            </section>
            <!-- END Partners -->
            <!-- Testimonials -->
<?php if (have_rows('section_seven')):
		while (have_rows('section_seven')) : the_row(); ?>
            <section id="testimonials" class="testimonials">
                <div class="testimonials__container">
<?php if (have_rows('top_content')):
		while (have_rows('top_content')) : the_row(); ?>					
                    <p class="section_title testimonials_title">
                      <?php the_sub_field('orange_title')?>
                    </p>
                    <h2><?php the_sub_field('title')?></h2>
		<?php endwhile;
   endif; 
?>						
                    <div class="swiper testimonials_swiper">
                        <div class="swiper-wrapper testimonials_wrapper">
<?php if (have_rows('testimonials')):
		while (have_rows('testimonials')) : the_row(); ?>								
                            <!-- Testimonial -->
                            <div class="swiper-slide testimonials_slide">
                                <div class="testimonials_autor">
                                    <img src="<?php the_sub_field('image')?>" alt="testimonial autor">
                                    <div class="testimonials_autor_description">
                                        <p class="name">
                                            <?php the_sub_field('name')?>
                                        </p>
                                        <p class="position">
                                            <?php the_sub_field('position')?>
                                        </p>
                                        <p class="company">
                                            <?php the_sub_field('company')?>
                                        </p>
                                    </div>
                                </div>
                                <p class="testimonial"><?php the_sub_field('text')?></p>
                            </div>
                            <!-- END Testimonial -->
		<?php endwhile;
   endif; 
?>
                        </div>
                    </div>
                    <div class="testimonials_arrow_wrapper">
                        <div class="testimonials_arrow testimonials_arrow_prev"><img src="/wp-content/themes/vitaminise/images/arrow_next.svg"
                                alt="prev"></div>
                        <div class="testimonials_arrow testimonials_arrow_next"><img src="/wp-content/themes/vitaminise/images/arrow_next.svg"
                                alt="next"></div>
                    </div>
                </div>
            </section>
		<?php endwhile;
   endif; 
?>			
            <!-- END Testimonials -->

            <!-- Blog -->
            <section id="blog" class="blog">
                <div class="blog__container">
                    <div class="swiper blog_swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper blog_wrapper">
                          <!-- Slides -->
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
                          <div class="swiper-slide blog_slide">
                            <article class="blog_item" style='background: <?php the_field('background_color')?>'>
								<a href="<?php the_permalink();?>">
									<p>Блог</p>
									<h3><?php the_title();?></h3>
								</a>
                            </article>
                          </div>
  <?php  ;}?>
 			<?php			
  }
  wp_reset_postdata();
	?>   
                          <div class="swiper-slide blog_slide blog_more_info_slide">
                            <div class="blog_more_info ">
                                <h3>Дізнавайся більше інформації в нашому блозі</h3>
                                <a href="/blog">Перейти на сторінку блога</a>
                            </div>
                          </div>                     
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination blog_pagination"></div>
                    </div>
                </div>
            </section>
            <!-- END Blog -->
			
			
<!-- Banner -->		
<?php if (have_rows('section_eight')):
		while (have_rows('section_eight')) : the_row(); ?>			
            <section class="banner">
                <div class="banner__container">
                    <div class="banner_wrapper">
                        <div class="banner_inner">
                            <div class="banner_inner_wrapper">
                                <div class="banner_content">
                                    <h2><?php the_sub_field('title')?></h2>
                                    <div class="banner_content_text"><?php the_sub_field('text')?>
                                    </div>
                                    <ul class="banner_socials socials">
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
<?php if (have_rows('social_banner')):
		while (have_rows('social_banner')) : the_row(); ?>										
                                    <div class="banner_updates">										
                                        <p><?php the_sub_field('text')?></p>
                                        <div class="banner_updates_wrapper">
<?php if (have_rows('social')):
		while (have_rows('social')) : the_row(); ?>											
                                            <a href="<?php echo get_sub_field('link')['url']?>" target="<?php echo get_sub_field('link', 'options')['target']?>">
                                                <img src="<?php the_sub_field('icone')?>" alt="">
                                            </a>
		<?php endwhile;
	endif; 
?>	
                                        </div>
                                    </div>			
		<?php endwhile;
	endif; 
?>										
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php endwhile;
   endif; 
?>				
            <!-- END Banner -->
        </main>
<?php
get_footer();
