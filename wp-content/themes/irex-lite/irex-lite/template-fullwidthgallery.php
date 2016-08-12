<?php 
/*
Template name: FullWidthGallery
*/
get_header(); ?>

<script>
	jQuery(document).ready(function() {
	
		var containerwidth = jQuery(window).width();
		jQuery('').css({'width' : containerwidth});
		
		var containerheight = (jQuery(document).height() > jQuery(window).height()) ? jQuery(document).height() : jQuery(window).height();
		jQuery('body').css('height', (parseInt(containerheight)) + 'px' );
		

		jQuery(window).resize(function(){
			var containerheight = jQuery(window).height();
			jQuery('body').css('height', (parseInt(containerheight)) + 'px' );
		 });

	 });

	irex_lite_show_skebg_thumbs = function(){
		if(jQuery('div.skebg_thumbnails').length > 0){
			if(!jQuery('a.skebg_showthumbs').hasClass('active')){
				jQuery('a.skebg_showthumbs').addClass('active');
				jQuery('.skebg_thumbnails').css('display','block').animate({'bottom': '50px'},250);
		}
		else{}
		}
	}
</script>
<?php get_footer(); ?>