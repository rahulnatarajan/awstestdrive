//mobile menu



jQuery(document).ready(function(){



	jQuery('#nav').prepend('<div id="menu-icon" class="close">Navigation Menu<ul id="mini-menu"></ul></div>');



	jQuery('#menu-main>li').clone().appendTo('#mini-menu');



	jQuery("#menu-icon").on("click", function(){



		jQuery(this).toggleClass("close", "open").toggleClass("open");



		jQuery("#mini-menu").slideToggle();



	});



});





//images on mouse over



jQuery(document).ready(function(){

	// Blur images on mouse over

	jQuery(".portfolio a,.feature_image a,.home_featured_img").hover( function(){ 

		jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "slow"); 

	}, function(){ 

		jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "slow"); 

	});

	// Blur images on mouse over

	jQuery(".feature_image a,.portfolio a,.lightbox a").hover( function(){ 

		jQuery(this).children("span").stop().animate({ opacity: 0.8 }, "slow"); 

	}, function(){ 

		jQuery(this).children("span").stop().animate({ opacity: 0 }, "slow"); 

	});

	jQuery(".feature_image").hover( function(){ 

		jQuery(this).children("a.fullpostlink").stop().animate({ opacity: 0.8 }, "slow"); 

	}, function(){ 

		jQuery(this).children("a.fullpostlink").stop().animate({ opacity: 0 }, "slow"); 

	});

	// Initialize prettyPhoto plugin

	jQuery(".portfolio a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	jQuery(".lightbox a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

	// Clone portfolio items to get a second collection for Quicksand plugin

	var jQueryportfolioClone = jQuery(".portfolio").clone();

	// Attempt to call Quicksand on every click event handler

	jQuery(".filter a").click(function(e){

		jQuery(".filter li").removeClass("current");	

		// Get the class attribute value of the clicked link

		var jQueryfilterClass = jQuery(this).parent().attr("class");

		if ( jQueryfilterClass == "all" ) {

			var jQueryfilteredPortfolio = jQueryportfolioClone.find("li");

		} else {

			var jQueryfilteredPortfolio = jQueryportfolioClone.find("li[data-type~=" + jQueryfilterClass + "]");

		}

		// Call quicksand

		jQuery(".portfolio").quicksand( jQueryfilteredPortfolio, { 

			duration: 800, 

			easing: 'easeInOutQuad' 

		}, function(){

			// Blur newly cloned portfolio items on mouse over and apply prettyPhoto

			jQuery(".portfolio a").hover( function(){ 

				jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "slow"); 

			}, function(){ 

				jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "slow"); 

			}); 

			// Blur images on mouse over

			jQuery(".feature_image a,.portfolio a").hover( function(){ 

				jQuery(this).children("span").stop().animate({ opacity: 0.8 }, "slow"); 

			}, function(){ 

				jQuery(this).children("span").stop().animate({ opacity: 0 }, "slow"); 

			});

			jQuery(".portfolio a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

		});

		jQuery(this).parent().addClass("current");

		// Prevent the browser jump to the link anchor

		e.preventDefault();

	})

});

jQuery(document).ready(function(){

	// Blur images on mouse over

	jQuery(".preview a").hover( function(){ 

		jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "fast"); 

	}, function(){ 

		jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "slow"); 

	}); 

	// Initialize prettyPhoto plugin

	jQuery(".preview a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

	// Clone preview items to get a second collection for Quicksand plugin

	var jQuerypreviewClone = jQuery(".preview").clone();

	// Attempt to call Quicksand on every click event handler

	jQuery(".filter a").click(function(e){

		jQuery(".filter li").removeClass("current");	

		// Get the class attribute value of the clicked link

		var jQueryfilterClass = jQuery(this).parent().attr("class");

		if ( jQueryfilterClass == "all" ) {

			var jQueryfilteredpreview = jQuerypreviewClone.find("li");

		} else {

			var jQueryfilteredpreview = jQuerypreviewClone.find("li[data-type~=" + jQueryfilterClass + "]");

		}

		// Call quicksand

		jQuery(".preview").quicksand( jQueryfilteredpreview, { 

			duration: 800, 

			easing: 'easeInOutQuad' 

		}, function(){

			// Blur newly cloned preview items on mouse over and apply prettyPhoto

			jQuery(".preview a").hover( function(){ 

				jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "fast"); 

			}, function(){ 

				jQuery(this).children("img").stop().animate({ opacity: 1.0 }, "slow"); 

			}); 

			jQuery(".preview a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

		});

		jQuery(this).parent().addClass("current");

		// Prevent the browser jump to the link anchor

		e.preventDefault();

	})

});

// jQuery Tool Tip -->

jQuery(document).ready( function() {

					jQuery('.tooltip').tipTip();

			    });

//Social icons effect

jQuery(document).ready(function(){

					jQuery("img.grey").hover(

						function() {

						jQuery(this).stop().animate({"opacity": "0"}, "slow");

					},

					function() {

						jQuery(this).stop().animate({"opacity": "1"}, "slow");

					});

				});

//Back to top

jQuery(document).ready( function() {

					jQuery('#back-top,#back-to-top').hide();

					jQuery(window).scroll(function() {

						if (jQuery(this).scrollTop() > 100) {

							jQuery('#back-top,#back-to-top').fadeIn();

			            } else {

			                jQuery('#back-top,#back-to-top').fadeOut();

			            }

			        });

					jQuery('#back-top,#back-to-top').click(function(){

					    jQuery('html, body').animate({scrollTop:0}, 'slow');

					});

				});

//jQuery function for sliding team member image

jQuery(document).ready( function() {

				jQuery('ul.hover_block li').hover(function(){

					jQuery(this).find('img').animate({left:'250px'},{queue:false,duration:750});

				}, function(){

					jQuery(this).find('img').animate({left:'5px'},{queue:false,duration:750});

				});

			});


//Collapsing sidebar content

jQuery(document).ready(function() {

				jQuery(function() {



					jQuery(".widget-container > ul").hide();

					jQuery(".widget-container > div").hide();
					
					jQuery(".widget-container > select").hide();

					

					jQuery(".widget-title").click( function () {

						if ( jQuery(this).hasClass("widget-title-active") ) {

							jQuery(this).removeClass("widget-title-active").next("ul").slideUp("slow");
							jQuery(this).removeClass("widget-title-active").next("div").slideUp("slow");
							jQuery(this).removeClass("widget-title-active").next("select").slideUp("slow");

						}

						else{



							jQuery(this).addClass("widget-title-active").next("ul").slideDown("slow");

							jQuery(this).addClass("widget-title-active").next("div").slideDown("slow");
							
							jQuery(this).addClass("widget-title-active").next("select").slideDown("slow");

						}

					});



					jQuery(".widget-container:first-child h3").addClass("widget-title-active");

					jQuery(".widget-container:first-child ul").show();
					
					jQuery(".widget-container:first-child div").show();
					
					jQuery(".widget-container:first-child select").show();
				



				});

			});





//Find last submenu item and add class

jQuery(document).ready(function() {

				jQuery("ul.sub-menu li").last().addClass("last-submenu-item");

				jQuery("ul.sub-menu li ul.sub-menu li").last().addClass("last-submenu-item");

			});

//Post title easing effect

jQuery(document).ready( function() {

				jQuery(".widget-area ul ul li a").hover( function(){ 

					jQuery(this).stop().animate({paddingLeft:10}, 'slow')

				}, function(){ 

					jQuery(this).stop().animate({paddingLeft:0}, 'slow')

				});

				jQuery("#site_map .sitemap-rows ul li").hover( function(){ 

					jQuery(this).stop().animate({marginLeft:10}, 'slow')

				}, function(){ 

					jQuery(this).stop().animate({marginLeft:0}, 'slow')

				});

			});

//MOBILE MENU -----------------------------------------
//-----------------------------------------------------
jQuery(document).ready(function(){
'use strict';
jQuery('#menu-main').superfish();
jQuery('#menu-main').sktmobilemenu();
jQuery('#menu-main li:has(ul)').each(function(){
jQuery(this).addClass('has_child').prepend('<span class="this_child"></span>');
});
jQuery('#menu-main.skt-mob-menu li.has_child > a').click(function(){
if(jQuery(this).hasClass('active')){
jQuery(this).removeClass('active');
jQuery(this).next('ul:first').stop(true,true).slideUp();
}
else{
jQuery(this).addClass('active');
jQuery(this).next('ul:first').stop(true,true).slideDown();
}
});
});
(function( $ ) {
'use strict';
$.fn.sktmobilemenu = function( options ) { 
var defaults = {
'fwidth': 1024
};
//call in the default otions
var options = $.extend(defaults, options);
var obj = $(this);
return this.each(function() {
if($(window).width() < options.fwidth) {
sktMobileRes();
}
$(window).resize(function() {
if($(window).width() < options.fwidth) {
sktMobileRes();
}else{
sktDeskRes();
}
});
function sktMobileRes() {
jQuery('#menu-main').superfish('destroy');
obj.addClass('skt-mob-menu').hide();
obj.parent().css('position','relative');
if(obj.prev('.sktmenu-toggle').length === 0) {
obj.before('<div class="sktmenu-toggle" id="responsive-nav-button"><i class="fa fa-bars"></i></div>');
}
obj.parent().find('.sktmenu-toggle').removeClass('active');
}
function sktDeskRes() {
jQuery('#menu-main').superfish('init');
obj.removeClass('skt-mob-menu').show();
if(obj.prev('.sktmenu-toggle').length) {
obj.prev('.sktmenu-toggle').remove();
}
}
obj.parent().on('click','.sktmenu-toggle',function() {
if(!$(this).hasClass('active')){
$(this).addClass('active');
$(this).next('ul').stop(true,true).slideDown();
}
else{
$(this).removeClass('active');
$(this).next('ul').stop(true,true).slideUp();
}
});
});
};
})( jQuery );