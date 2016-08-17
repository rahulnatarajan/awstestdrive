<?php get_header(); ?>

<!-- #Container Area -->

<div id="container" class="clearfix">
  <div class="wrapper container_24 clearfix"> 
    
    <!-- Content -->
    
    <div id="content" class="grid_17 alpha omega">
      <h2 class="center">
        <?php _e('Error 404 - Not Found','irex-lite'); ?>
      </h2>
      <?php get_search_form(); ?>
      <span class="not-found-txt">
      <?php _e('Page Not Found.', 'irex-lite' ); ?>
      </span>
      <p>
        <?php _e( 'Apologies, but the page you requested could not be found.', 'irex-lite' ); ?>
      </p>
    </div>
    
    <!-- Content --> 
    
    <!-- Sider-bar -->
    
    <div id="sider-bar" class="grid_7 alpha omega">
      <?php get_sidebar(); ?>
    </div>
    
    <!-- Sider-bar --> 
    
  </div>
</div>

<!-- #Container Area -->

<?php get_footer(); ?>