<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<!-- #Header Area -->
<div id="header-area" class="clearfix"> 
  
  <!-- wrapper container_24 -->
  <div class="wrapper container_24 clearfix"> 
    <!-- Header -->
    <div id="header"> 
      <!-- Top Head Section -->
      <div id="top-head" class="clearfix"> 
        <!-- Left Section -->
        <div class="left-section grid_8 alpha omega"> 
          <!-- #logo -->
          <?php if(get_theme_mod('_logo_img', '') != '' ) { ?>
          <a id="logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" > <img class="logo" src="<?php echo esc_url(get_theme_mod('_logo_img')); ?>" alt="<?php bloginfo( 'name' ); ?>" /> </a>
          <?php } else { ?>
		  <h1 id="site-title"> <span> <a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
			</a> </span> </h1>
		  <div class="clear"></div>
		  <div id="site-description">
			<?php bloginfo( 'description' ); ?>
		  </div>
          <?php } ?>
          <!-- #logo -->  
        </div>
        <!-- Left Section --> 
        
        <!-- Right Section -->
        <div class="right-section grid_15 alpha omega"> 
          <!-- Social Media  -->
          <div class="social_media">
            <ul>
              <?php if( get_theme_mod("_fb_link")){ ?><li> <a href="<?php if( get_theme_mod("_fb_link", "#") != '' ){ echo esc_url( get_theme_mod("_fb_link", "#") ); } ?>" class="tooltip" title="<?php _e('Facebook', 'irex-lite'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook" width="28" height="28" class="grey" /></a> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_hov.png" alt="facebook" width="28" height="28" class="color" /> </li><?php } ?>
              <?php if( get_theme_mod("_tw_link")){ ?><li> <a href="<?php if( get_theme_mod("_tw_link", "#") != '' ){ echo esc_url( get_theme_mod("_tw_link", "#") ); } ?>" class="tooltip" title="<?php _e('Twitter', 'irex-lite'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" width="28" height="28" class="grey" /></a> <img src="<?php echo get_template_directory_uri(); ?>/images/twitter_hov.png" alt="twitter" width="28" height="28" class="color" /> </li><?php } ?>
              <?php if( get_theme_mod("_lkd_link")){ ?><li> <a href="<?php if( get_theme_mod("_lkd_link", "#") != '' ){ echo esc_url( get_theme_mod("_lkd_link", "#") ); } ?>" class="tooltip" title="<?php _e('Linkedin', 'irex-lite'); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin" width="28" height="28" class="grey" /></a> <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin_hov.png" alt="linkedin" width="28" height="28" class="color" /> </li><?php } ?>
              <?php if( get_theme_mod("_gplus_link")){ ?><li> <a href="<?php if( get_theme_mod("_gplus_link", "#") != '' ){ echo esc_url( get_theme_mod("_gplus_link", "#") ); } ?>" class="tooltip" title="<?php _e('Google Plus', 'irex-lite'); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/images/google_plus.png" alt="google plus" width="28" height="28" class="grey" /></a> <img src="<?php echo get_template_directory_uri(); ?>/images/google_plus_hov.png" alt="google plus" width="28" height="28" class="color" /> </li><?php } ?>
            </ul>
          </div>
          <!-- Social Media  --> 
          <!-- Hedaer Navigation  -->
          
          <div id="nav" class="clearfix">
            <div id="skenav" role="navigation" class="clearfix">
              <div class="skenav-mid">
                <?php 
						if( has_nav_menu( 'primary' ) ) {
							wp_nav_menu(array( 'container_class' => 'menu-header', 'container_id' => 'menu-header-container', 'menu_id' => 'menu-main', 'menu_id' => 'menu-main', 'theme_location' => 'primary' ));
						} else { ?>
                <div class="menu-header" id="menu-header-container">
                  <ul id="menu-main" class="menu">
                    <?php wp_list_pages('title_li=&depth=0'); ?>
                  </ul>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <!-- Hedaer Navigation  --> 
        </div>
        <!-- Right Section -->  
      </div>   
      <!-- Top Head Section -->     
    </div> 
    <!-- Header --> 
  </div>
  <!-- wrapper container_24 --> 
</div>
<!-- #Header Area -->