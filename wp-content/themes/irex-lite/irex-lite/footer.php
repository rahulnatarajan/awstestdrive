<!-- #Footer Area -->

<div id="footer-area">
  <div class="wrapper container_24 clearfix">
    <div id="footer" class="page clearfix" >
      <div id="site-info"> <span>
        <?php  if(get_theme_mod("_copyright")){ echo wp_kses_post( get_theme_mod("_copyright"));}  ?>
        </span>
        <div class="grid_12"><?php printf(__('Irex Theme By %s','irex-lite'),'<a class="irex-link" href="'.esc_url('https://sketchthemes.com').'"><strong>SKETCHTHEMES</strong></a>');?></div>
      </div>
      <div id="foot-nav">
        <?php 

				if( has_nav_menu( 'footer' ) ) {

					wp_nav_menu(array( 'container_class' => 'menu-footer-container', 'menu_id' => 'menu-footer', 'theme_location' => 'footer', 'depth' => 1 ));

				} else { ?>
        <div class="menu-footer-container">
          <ul id="menu-footer" class="menu">
            <?php wp_list_pages('title_li=&depth=1'); ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- #Footer Area --> 
<a href="JavaScript:void(0);" title="<?php _e('Back To Top', 'irex-lite'); ?>" id="back-top" class="">
<?php _e('Back To Top','irex-lite'); ?>
</a>
<?php wp_footer(); ?>
</body></html>