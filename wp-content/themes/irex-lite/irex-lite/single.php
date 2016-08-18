<?php get_header(); ?>

<!-- #Container Area -->

<div id="container" class="clearfix">
  <div class="wrapper container_24 clearfix">
    <div class="page-title"><i class="edit_link"><?php edit_post_link( __('Edit', 'irex-lite'),'','') ; ?></i> </div>
    
    <!-- Content -->
    
    <div id="content" class="grid_17 alpha omega">
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <div class="post preview" id="post-<?php the_ID(); ?>">
        <div class="post_data"> <span class="post-date"> <span class="date_number">
          <?php the_date() ?>
          </span> <span class="month">
          
          </span> </span> <span class="blog-entry-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_title(); ?>
          </a> </span> <span class="post-author">
          <?php the_author_posts_link(); ?>
          </span> <span class="post-tags">
          <?php the_tags('Tagged in '); ?><?php _e(' and posted in ','irex-lite'); ?><?php echo get_the_category_list( ', ' );?>
          </span> </div>
        <div class="entry">
		 <?php if(has_post_thumbnail()) { ?>
          <div class="feature_image home_featured_img">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'irex_standard_img' );
						  $pretty_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
            <a href="<?php echo $pretty_thumb[0]; ?>" rel="prettyPhoto[preview]" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('full'); ?>
            </a>
          </div>
          <?php }	?>
          <div class="single_content">
            <?php the_content(); ?>
          </div>
          <div class="link_page">
            <?php wp_link_pages('<p class=" clear"><strong>Pages:</strong> ', '</p>', 'number'); ?>
          </div>
          <div class="entry-meta blog-entry-meta">
            <?php 
				$num_comments = get_comments_number(); // get_comments_number returns only a numeric value 
			?>
            <span class="author-image">
            <?php if(function_exists('irex_lite_like_counter_p')) { irex_lite_like_counter_p(""); } ?>
            </span> <span class="comment"><?php echo $num_comments; ?></span> <span class="share">
            <?php if(function_exists('irex_lite_dislike_counter_p')) { irex_lite_dislike_counter_p(""); } ?>
            </span> </div>
        </div>
        <?php endwhile; ?>
        <div class="navigation "> <span class="nav-previous">
          <?php previous_post_link( __('&larr; %link','irex-lite')); ?>
          </span> <span class="nav-next">
          <?php next_post_link( __('%link &rarr;','irex-lite')); ?>
          </span> </div>
        <?php else : ?>
        <div class="post">
          <h2>
            <?php _e('Not Found','irex-lite'); ?>
          </h2>
        </div>
        <?php endif; ?>
        <?php if ('open' == $post->comment_status) { ?>
        <div class="comments-template">
          <?php comments_template(); ?>
        </div>
        <?php } else { ?>
        <h5 class="comment_closed">
          <?php _e('Comments are closed.','irex-lite'); ?>
        </h5>
        <?php } ?>
      </div>
      <!-- post preview --> 
      
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