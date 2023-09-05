const hero = new Swiper('.hero_swiper', {
  spaceBetween: 30,
  navigation: {
      nextEl: ".hero_arrow_next",
      prevEl: ".hero_arrow_prev",
    },
    breakpoints: {
      // when  width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
        allowTouchMove: false,
      },
      764.98: {
        slidesPerView: 2,
        spaceBetween: 30
      },
    }    
});

const testimonials = new Swiper('.testimonials_swiper', {
  
  spaceBetween: 30,
  navigation: {
        nextEl: ".testimonials_arrow_next",
        prevEl: ".testimonials_arrow_prev",
      },   
       breakpoints: {
        // when  width is >= 320px
        320: {
          slidesPerView: 'auto',
          spaceBetween: 10
        },
        990.98: {
          slidesPerView: 3,
          spaceBetween: 30
        },
      }  
  });


  const blog = new Swiper('.blog_swiper', {
         breakpoints: {
          // when  width is >= 320px
          320: {
            pagination: {
              el: '.blog_pagination',
            },  
            slidesPerView: 1,
            spaceBetween: 15
          },
          764.98: {
            slidesPerView: 'auto',
            allowTouchMove: false,
          },
        }  
    });

  const prospects_project__swiper = new Swiper('.prospects_project__swiper', {

    navigation: {
        nextEl: ".prospects_arrow_next",
        prevEl: ".prospects_arrow_prev",
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 'auto',
          spaceBetween: 10,
        },
        // when window width is >= 765px
        765: {
          slidesPerView: 'auto',
          spaceBetween: 10,
        },
        // when window width is >= 980px
        980: {
          slidesPerView: 4,
          spaceBetween: 10,
        }
      }
  });

  jQuery(document).ready(function($){
  var header = $('header');
  var main = $('.site-content');
  scrollPrev = 0;

  $(window).scroll(function () {
    var scrolled = $(window).scrollTop();

    if (scrolled > 0 && scrolled) {
      header.addClass('out-translate');
    } else {
      header.removeClass('out-translate');
    }

    if (scrolled > 0 && scrolled) {
      header.addClass('out');
      main.addClass('out');
    } else {
      header.removeClass('out');
      main.removeClass('out');
    }

  });
}); 

// Burger
jQuery(document).ready(function($){
	let burger = $(".header_menu_burger")
	let menuItem = $('.header_menu_list > li')
	let menuItems = $('.header_menu');
	if (document.documentElement.clientWidth < 980) {
		$(burger).on("click", function(e){
				menuItems.slideToggle(300);
				burger.toggleClass('active')
		  $('body').toggleClass('disabled')
		});	
			menuItem.on("click", function(e){
				burger.removeClass('active')
				menuItems.slideUp(300);
				$('body').removeClass('disabled')
			})
	}	
});

// DD menu
// jQuery(document).ready(function($){
// 	let menuItems = $('.menu-mob .primary-menu .menu-item-has-children > a');
// 	menuItems.on('click', function(e){
// 		e.preventDefault
// 	})
// 	menuItems.on("touchend", function(e){
// 		e.preventDefault
// 		$(this).removeClass('active').next('.sub-menu').slideUp(300);
// 		if($(this).next('.sub-menu').is(":visible")){
// 			$(this).removeClass('active').next().next('.sub-menu').slideUp(300);
// 		} else {
//       		$(this).addClass('active').next('.sub-menu').slideToggle(300);
//     	}
// 		 return false;
// 	});	
	
// });


jQuery(function($){
 
	// определяем в переменные кнопку, текущую страницу и максимальное кол-во страниц
	var button = $( '#loadmore a' ),
	    paged = button.data( 'paged' ),
	    maxPages = button.data( 'max_pages' );
 
	button.click( function( event ) {
 
		event.preventDefault(); // предотвращаем клик по ссылке
 
		$.ajax({
			type : 'POST',
			url : ajaxurl.url, // получаем из wp_localize_script()
			data : {
				paged : paged, // номер текущей страниц
				action : 'loadmore' // экшен для wp_ajax_ и wp_ajax_nopriv_
			},
			beforeSend : function( xhr ) {
				button.text( 'Завантаження...' );
			},
			success : function( data ){
 
				console.log(data);
				
				//paged++; // инкремент номера страницы
				//button.parent().before( data );
				//button.text( 'Показати більше статтей' );
 
				 // если последняя страница, то удаляем кнопку
				
				$('.blog__container').append(data);
				button.data( 'paged', paged++);
				
				
				if( paged == maxPages ) {
					button.remove();
				}
 
			}
 
		});
 
	} );
});

// jQuery(document).ready(function($){ 

// })

jQuery(document).ready(function($){
	if($('body').hasClass('body_investors')){
 		$('<span class="language_line"></span>').insertAfter('.languade_investors .lang-item-uk');
	   } else {
		$('<span class="language_line">|</span>').insertAfter('.lang-item-uk');
		$('.contact_sub').appendTo('.contact_item')
		$('.lang-item-uk, .language_line, .lang-item-en').wrapAll('<div class="language_wrapper">');   
	   }
})

jQuery(document).ready(function($){
	if (document.documentElement.clientWidth < 765) {
		$('.languade_investors').insertAfter('.header_investors_menu_list > li:last-child');
	}	
})

jQuery(document).ready(function($){
    //Check to see if the window is top if not then display button
 $(window).scroll(function(){ 
       if ($(this).scrollTop() > 1000) { 
           $('#toTop').addClass('active'); 
       } else { 
           $('#toTop').removeClass('active'); 
       } 
   }); 
   $('#toTop').click(function(){ 
       $("html, body").animate({ scrollTop: 0 }, 0); 
       return false; 
   }); 
    
});	
//Investors header
  jQuery(document).ready(function($){
  var header = $('header.header_investors');
  var main = $('.site-content');
  scrollPrev = 0;

  $(window).scroll(function () {
    var scrolled = $(window).scrollTop();

    if (scrolled > 150 && scrolled) {
      header.addClass('out-translate');
    } else {
      header.removeClass('out-translate');
    }

    if (scrolled > 250 && scrolled) {
      header.addClass('out');
      main.addClass('out');
    } else {
      header.removeClass('out');
      main.removeClass('out');
    }

  });
}); 
// Burger Investors
jQuery(document).ready(function($){
	let burger = $(".header_menu_burger")
	let menuItem = $('.header_investors_menu_list > li')
	let menuItems = $('.header_investors_menu');
	if (document.documentElement.clientWidth < 980) {
		$(burger).on("click", function(e){
				menuItems.slideToggle(300);
				burger.toggleClass('active')
		  $('body').toggleClass('disabled')
		});	
			menuItem.on("click", function(e){
				burger.removeClass('active')
				menuItems.slideUp(300);
				$('body').removeClass('disabled')
			})
	}	
})