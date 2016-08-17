<?php get_header(); ?>

<!-- #Container Area -->

<div id="container" class="clearfix">
  <div class="wrapper container_24 clearfix">
    <div class="page-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?>
      </a> <i class="edit_link">
      <?php edit_post_link( __('Edit', 'irex-lite'),'','') ; ?>
      </i> </div>
    
    <!-- Content -->
    
    <div id="content" class="grid_17 alpha omega">
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
        <div class="entry">
          <?php the_content(); ?>
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
      <?php if ('open' == $post->comment_status) { ?>
      <div id="page-comment-temp">
        <div class="comments-template">
          <?php comments_template(); ?>
        </div>
      </div>
      <?php } else { ?>
      <?php } ?>
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