<?php
if ( 'page' == get_option( 'show_on_front' ) ) {
	get_header();
  // define image directory path
  $imagepath =  get_template_directory_uri() . '/images/';
?>
<!-- #Container Area -->

<div id="container" class="clearfix">
  <div class="wrapper container_24 clearfix">
    <?php if(is_front_page()){ ?>
    <!-- #Slider -->
    <div id="skt_slider" class="container_24" style="overflow:hidden;">
      <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	  
       <?php if(get_theme_mod('_slider_img1', $imagepath.'slide1.jpg')) { ?> <div data-thumb="<?php if(get_theme_mod('_slider_img1', $imagepath.'slide1.jpg')) { echo esc_url(get_theme_mod('_slider_img1', $imagepath.'slide1.jpg')); } ?>" data-src="<?php if(get_theme_mod('_slider_img1', $imagepath.'slide1.jpg')) { echo esc_url(get_theme_mod('_slider_img1', $imagepath.'slide1.jpg')); } ?>"> 
          <?php if(get_theme_mod('_content_slider1', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ) { ?><div class="camera_caption fadeFromBottom">
            <?php if(get_theme_mod('_content_slider1', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ) { echo wp_kses_post(get_theme_mod('_content_slider1', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ); } ?>
          </div> <?php } ?>
        </div><?php } ?>
        <?php if(get_theme_mod('_slider_img2', $imagepath.'slide2.jpg')) { ?><div data-thumb="<?php if(get_theme_mod('_slider_img2', $imagepath.'slide2.jpg')) { echo esc_url(get_theme_mod('_slider_img2', $imagepath.'slide2.jpg')); } ?>" data-src="<?php if(get_theme_mod('_slider_img2', $imagepath.'slide2.jpg')) { echo esc_url(get_theme_mod('_slider_img2', $imagepath.'slide2.jpg')); } ?>">
          <?php if(get_theme_mod('_content_slider2', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ) { ?><div class="camera_caption fadeFromBottom">
            <?php if(get_theme_mod('_content_slider2', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ) { echo wp_kses_post(get_theme_mod('_content_slider2', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ); } ?>
          </div><?php } ?>
        </div><?php } ?>
        <?php if(get_theme_mod('_slider_img3', $imagepath.'slide3.jpg')) { ?><div data-thumb="<?php if(get_theme_mod('_slider_img3', $imagepath.'slide3.jpg')) { echo esc_url(get_theme_mod('_slider_img3', $imagepath.'slide3.jpg')); } ?>" data-src="<?php if(get_theme_mod('_slider_img3', $imagepath.'slide3.jpg')) { echo esc_url(get_theme_mod('_slider_img3', $imagepath.'slide3.jpg')); } ?>">
          <?php if(get_theme_mod('_content_slider3', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ) { ?><div class="camera_caption fadeFromBottom">
            <?php if(get_theme_mod('_content_slider3', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ) { echo wp_kses_post(get_theme_mod('_content_slider3', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite') ) ); } ?>
          </div><?php } ?>
        </div><?php } ?>
		
      </div>
    </div>
    
    <!-- #Slider -->
    <?php } ?>
    
    <!-- Wecome Heading -->
    <div class="welcome_head clearfix">
      <?php if(get_theme_mod('_mid_text', '') != ''){ ?>
      <span><?php echo wp_kses_post(get_theme_mod('_mid_text')); ?></span>
      <?php } ?>
    </div>
    
    <!-- Wecome Heading --> 
    
    <!-- Content -->
    
    <div id="front_page_content">
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
        <div class="entry">
          <?php //the_content(); ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php else : ?>
      <div class="post">
        <h2>
          <?php _e('Not Found','irex-lite'); ?>
        </h2>
      </div>
      <?php endif; ?>
      <!-- Latest Featured Wrap -->
      <div class="latest_project container_24">
        <div class="project_head">
          <?php if(get_theme_mod('_feature_head_area') != '') { echo wp_kses_post(get_theme_mod('_feature_head_area')); } ?>
        </div>
        <ul class="preview">
          <!-- Featured Box 1 -->
          <li class="latest_project_box grid_6 alpha omega">
            <div class="feature_image" style="position: relative;">
              <?php ?>
              <a href="<?php if( get_theme_mod('_feature_img1', $imagepath.'slide1.jpg') != '') { echo esc_url(get_theme_mod('_feature_img1',$imagepath.'slide1.jpg')); } ?>" rel="prettyPhoto[preview]" title=""> <img src="<?php if(get_theme_mod('_feature_img1',$imagepath.'slide1.jpg')) { echo esc_url(get_theme_mod('_feature_img1',$imagepath.'slide1.jpg')); } ?>" alt=""/> <span></span> </a> <a href="<?php if(get_theme_mod('_feature_link1')) { echo esc_url(get_theme_mod('_feature_link1')); } ?>" class="tooltip fullpostlink" title="<?php _e('Full Post', 'irex-lite'); ?>"></a></div>
            <div class="title"><a href="<?php if(get_theme_mod('_feature_link1')) { echo esc_url(get_theme_mod('_feature_link1')); } ?>" title="">
              <?php if(get_theme_mod('_feature_text1', 'Featured Box 1')) { echo wp_kses_post(get_theme_mod('_feature_text1')); } ?>
              </a></div>
          </li>
          <!-- Featured Box 1 --> 
          <!-- Featured Box 2 -->
          <li class="latest_project_box grid_6 alpha omega">
            <div class="feature_image" style="position: relative;">
              <?php ?>
              <a href="<?php if(get_theme_mod('_feature_img2', $imagepath.'slide2.jpg')) { echo esc_url(get_theme_mod('_feature_img2', $imagepath.'slide2.jpg')); } ?>" rel="prettyPhoto[preview]" title=""> <img src="<?php if(get_theme_mod('_feature_img2', $imagepath.'slide2.jpg')) { echo esc_url(get_theme_mod('_feature_img2', $imagepath.'slide2.jpg')); } ?>" alt=""/> <span></span> </a> <a href="<?php if(get_theme_mod('_feature_link2')) { echo esc_url(get_theme_mod('_feature_link2')); } ?>" class="tooltip fullpostlink" title="<?php _e('Full Post', 'irex-lite'); ?>"></a></div>
            <div class="title"><a href="<?php if(get_theme_mod('_feature_link2')) { echo esc_url(get_theme_mod('_feature_link2')); } ?>" title="">
              <?php if(get_theme_mod('_feature_text2')) { echo wp_kses_post(get_theme_mod('_feature_text2')); } ?>
              </a></div>
          </li>
          <!-- Featured Box 2 --> 
          <!-- Featured Box 3 -->
          <li class="latest_project_box grid_6 alpha omega">
            <div class="feature_image" style="position: relative;">
              <?php ?>
              <a href="<?php if(get_theme_mod('_feature_img3', $imagepath.'slide3.jpg')) { echo esc_url(get_theme_mod('_feature_img3', $imagepath.'slide3.jpg')); } ?>" rel="prettyPhoto[preview]" title=""> <img src="<?php if(get_theme_mod('_feature_img3', $imagepath.'slide3.jpg')) { echo esc_url(get_theme_mod('_feature_img3', $imagepath.'slide3.jpg')); } ?>" alt=""/> <span></span> </a> <a href="<?php if(get_theme_mod('_feature_link3')) { echo esc_url(get_theme_mod('_feature_link3')); } ?>" class="tooltip fullpostlink" title="<?php _e('Full Post', 'irex-lite'); ?>"></a> </div>
            <div class="title"><a href="<?php if(get_theme_mod('_feature_link3')) { echo esc_url(get_theme_mod('_feature_link3')); } ?>" title="">
              <?php if(get_theme_mod('_feature_text3')) { echo wp_kses_post(get_theme_mod('_feature_text3')); } ?>
              </a></div>
          </li>
          <!-- Featured Box 3 --> 
          <!-- Featured Box 4 -->
          <li class="latest_project_box grid_6 alpha omega">
            <div class="feature_image" style="position: relative;">
              <?php ?>
              <a href="<?php if(get_theme_mod('_feature_img4', $imagepath.'slide1.jpg')) { echo esc_url(get_theme_mod('_feature_img4', $imagepath.'slide1.jpg')); } ?>" rel="prettyPhoto[preview]" title=""> <img src="<?php if(get_theme_mod('_feature_img4', $imagepath.'slide1.jpg')) { echo esc_url(get_theme_mod('_feature_img4', $imagepath.'slide1.jpg')); } ?>" alt=""/> <span></span> </a> <a href="<?php if(get_theme_mod('_feature_link4')) { echo esc_url(get_theme_mod('_feature_link4')); } ?>" class="tooltip fullpostlink" title="<?php _e('Full Post', 'irex-lite'); ?>"></a> </div>
            <div class="title"><a href="<?php if(get_theme_mod('_feature_link4')) { echo esc_url(get_theme_mod('_feature_link4')); } ?>" title="">
              <?php if(get_theme_mod('_feature_text4')) { echo wp_kses_post(get_theme_mod('_feature_text4')); } ?>
              </a></div>
          </li>
          <!-- Featured Box 4 -->
          
        </ul>
      </div>
      <!-- Latest Featured Wrap --> 
    </div>
    <!-- Content --> 
	<div class="frontcont entry">
        <?php the_content(); ?>
	</div>
  </div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>
<?php 
} else {
	include( get_home_template() );
}
 ?>