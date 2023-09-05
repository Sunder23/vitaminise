<?php
/**
 *   * Template Name: Investors
 */

get_header('investors');
?>
        <main class="investors_page">
            <!-- V-Investors hero -->
 <?php if (have_rows('section_one')):
		 while (have_rows('section_one')) : the_row(); ?>				
            <section id="about_investors" class="investors_hero">
                <div class="investors_hero__container">
                    <div class="investors_hero_content">
						<?php if(get_sub_field('title')) :?>
                        	<h1><?php the_sub_field('title')?></h1>
						<?php endif; ?>
						<?php if(get_sub_field('subtitle')) :?>
                        	<p><?php the_sub_field('subtitle')?></p>
						<?php endif; ?>
						<?php if(get_sub_field('link')['title']) :?>
                        	<a href="<?php echo get_sub_field('link')['url']?>"><?php echo get_sub_field('link')['title']?></a>
						<?php endif; ?>
                    </div>
					<?php if(get_sub_field('image')) :?>
                    <div class="investors_hero_img">
                        <div class="investors_hero_img_wrapper">
                            <img src="<?php the_sub_field('image')?>" alt="Hero image">
                        </div>
                    </div>
					<?php endif; ?>
                </div>
            </section>
<?php endwhile;
	endif; 
?>				
            <!-- V-Investors hero END -->
            <!-- V-Investors hero-bottom -->
 <?php if (have_rows('section_two')):
		 while (have_rows('section_two')) : the_row(); ?>				
            <div class="investors_hero_bottom__container">
				<img src="<?php the_sub_field('icone')?>" alt="">
                <p><?php the_sub_field('text')?></p>
            </div>
<?php endwhile;
	endif; 
?>			
            <!-- V-Investors hero-bottom END -->
            <!-- Vitaminise benefits -->
 <?php if (have_rows('section_three')):
		 while (have_rows('section_three')) : the_row(); ?>				
            <sections id="benefits_investors" class="vitaminise_benefits">
                <div class="vitaminise_benefits__container">
					<?php if(get_sub_field('title')) :?>
                      	 <p class="section_title vitaminise_benefits_title"><?php the_sub_field('title')?></p>
					<?php endif; ?>					
					<?php if(get_sub_field('subtitle')) :?>
						<h2><?php the_sub_field('subtitle')?></h2>
					<?php endif; ?>
                    <div class="vitaminise_benefits_grid">
 <?php if (have_rows('items')):
		 while (have_rows('items')) : the_row(); ?>							
                        <div class="vitaminise_benefits_item">
                            <img src="<?php the_sub_field('icone')?>" alt="icone">
                            <p><?php the_sub_field('title')?></p>
                        </div>
<?php endwhile;
	endif; 
?>	
                    </div>
                </div>
            </sections>
<?php endwhile;
	endif; 
?>			
            <!-- Vitaminise benefits END-->
            <!-- Prospects project -->
<?php if (have_rows('section_four')):
		 while (have_rows('section_four')) : the_row(); ?>					
            <section id="prospects_investors" class="prospects_project">
                <div class="prospects_project__container">
                    <div class="prospects_project_titles">
					<?php if(get_sub_field('title')) :?>
                      	 <p class="section_title prospects_project__title"><?php the_sub_field('title')?></p>
					<?php endif; ?>	
					<?php if(get_sub_field('subtitle')) :?>
						<div class="h2"> <?php the_sub_field('subtitle')?></div>
					<?php endif; ?>						
                    </div>
                    <div class="prospects_project__swiper swiper">
						<div class="swiper-wrapper">
 <?php if (have_rows('items')):
		 while (have_rows('items')) : the_row(); ?>	
					<div class="swiper-slide">		
                        <div class="prospects_project_item">
                            <h3><?php the_sub_field('title')?></h3>
                        </div>
					</div>	
<?php endwhile;
	endif; 
?>						
						</div>
						 <div class="testimonials_arrow_wrapper prospects_arrow_wrapper">
                            <div class="testimonials_arrow testimonials_arrow_prev prospects_arrow_prev">
                                <img src="/wp-content/themes/vitaminise/images/arrow_next.svg" alt="prev">
                            </div>
                            <div class="testimonials_arrow testimonials_arrow_next prospects_arrow_next">
                                <img src="/wp-content/themes/vitaminise/images/arrow_next.svg" alt="next">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php endwhile;
	endif; 
?>			
            <!-- Prospects project END -->
            <!-- Vitaminise investment -->
<?php if (have_rows('section_five')):
		 while (have_rows('section_five')) : the_row(); ?>					
            <section id="investments_investors" class="investment">
                <div class="investment__container">
					<?php if(get_sub_field('title')) :?>
                      	 <p class="section_title investment_title"><?php the_sub_field('title')?></p>
					<?php endif; ?>						
					<?php if(get_sub_field('subtitle')) :?>
						<div class="investment_subtitle"><?php the_sub_field('subtitle')?></div>
					<?php endif; ?>		
                    <div class="investment_items">
<?php if (have_rows('items')):
		 while (have_rows('items')) : the_row(); ?>	
                        <div class="investment_item <?php if(get_sub_field('reverse')) : ?> reverse <?php endif; ?>">
                            <div class="investment_item_img"><img src="<?php the_sub_field('image')?>" alt="<?php the_sub_field('title')?>"></div>
                            <div class="investment_item_content">
								<?php if(get_sub_field('title')) :?>								
                                	<div class="investment_item_title"><?php the_sub_field('title')?></div>
								<?php endif; ?>	    
								<?php if(get_sub_field('text')) :?>
								<p><?php the_sub_field('text')?></p>
								<?php endif; ?>	
                            </div>
                        </div>
<?php endwhile;
	endif; 
?>
                    </div>
                </div>
            </section>
<?php endwhile;
	endif; 
?>
			
            <!-- Partners -->
            <section class="partners partners_investment">
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
            <!-- Vitaminise investment END-->
             <!-- Investment form -->
             <section id="investment_form" class="investment_form">
                <div class="investment_form__container">
<?php $locale = get_locale(); 
      if($locale == 'uk') :	?>						
				<?php echo do_shortcode('[contact-form-7 id="338" title="Контактна форма UK"]')?>
<?php else : ?>	
				<?php echo do_shortcode('[contact-form-7 id="337" title="Контактна форма EN"]')?>
<?php endif; ?>						
                </div>
             </section>
             <!-- Investment form END -->
        </main>
        <!-- Investment footer -->
<?php
get_footer('investors');
		
