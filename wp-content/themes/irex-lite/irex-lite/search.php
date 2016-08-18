<?php get_header(); ?>
<!-- #Container Area -->
<div id="container" class="clearfix">
  <div class="wrapper container_24 clearfix"> 
    <!-- Content -->
    <div id="content" class="grid_17 alpha omega">
      <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'irex-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
	   <div class="post" id="post-<?php the_ID(); ?>">
        <div class="post_data"> <span class="post-date"> <span class="date_number">
          <?php the_date() ?>
          </span> <span class="month">
          
          </span> </span> <span class="blog-entry-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_title(); ?>
          </a> </span> <span class="post-author">
          <?php the_author_posts_link(); ?>
          </span>
          <div class="post-tags-upper"><span class="post-tags">
            <?php the_tags(); ?>
            </span></div>
        </div>
        <div class="entry preview">
          <div class="post-excerpt">
            <?php the_excerpt() ?>
          </div>
          <p class="entry-meta blog-entry-meta">
            <?php
								 $num_comments = get_comments_number(); // get_comments_number returns only a numeric value 
							?>
            <span class="author-image"><span class='like_img'>
            <?php $key="ldc_plc"; echo get_post_meta($post->ID, $key, true); ?>
            </span></span> <span class="comment"><?php echo $num_comments; ?></span> <span class="share"><span class='dislike_img'>
            <?php $key="ldc_pdc"; echo get_post_meta($post->ID, $key, true); ?>
            </span></span> <a href="<?php the_permalink(); ?>" class="read-the-rest" title="<?php _e('Read the rest','irex-lite'); ?>">
            <?php _e('Read More&nbsp;&rarr;','irex-lite'); ?>
            </a> </p>
        </div>
      </div>
      <?php endwhile; ?>
      <div class="navigation">
        <?php posts_nav_link(__('in between','irex-lite'),__('before','irex-lite'),__('after','irex-lite')); ?>
      </div>
      <?php else : ?>
      <div class="post">
        <h2>
          <?php _e('Not Found','irex-lite'); ?>
        </h2>
      </div>
      <?php endif; ?>
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