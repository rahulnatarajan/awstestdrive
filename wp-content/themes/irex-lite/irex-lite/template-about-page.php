<?php get_header();

/*

Template name: About Us

*/

?>

<!-- #Container Area -->

<div id="container" class="clearfix">
  <div class="wrapper container_24 clearfix"> 
    
    <!-- Content -->
    
    <div id="content" class="grid_24 alpha omega">
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <div class="page-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
        </a> <i class="edit_link">
        <?php edit_post_link( __('Edit', 'irex-lite'),'','') ; ?>
        </i> </div>
      <div class="post" id="post-<?php the_ID(); ?>">
        <div class="entry preview">
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
    </div>
    
    <!-- Content -->
    
    <div class="our_team_member container_24">
      <h2 class="member_head">
        <?php if(get_theme_mod('_taem_head_area')) { echo wp_kses_post(get_theme_mod('_taem_head_area')); } ?>
      </h2>
      <ul class="hover_block">
        <!-- Member Box 1 -->
        <li class="member_box">
          <?php if(get_theme_mod('_teammember_img1')) { ?>
          <img src="<?php echo esc_url(get_theme_mod('_teammember_img1')); ?>" width="200" height="142" alt="Thumbnail" />
          <?php } ?>
          <div class="member_details"> <span>
            <?php if(get_theme_mod('_teammember_text1')) { echo wp_kses_post(get_theme_mod('_teammember_text1')); } ?>
            </span>
            <p>
              <?php if(get_theme_mod('_teammember_content1')) { echo wp_kses_post(get_theme_mod('_teammember_content1')); } ?>
            </p>
            <a href="<?php if(get_theme_mod('_teammember_link1')) { echo esc_url(get_theme_mod('_teammember_link1')); } ?>" title="<?php _e('Know More', 'irex-lite'); ?>" class="tooltip read-the-rest">
            <?php _e('Know More&nbsp;&rarr;','irex-lite');?>
            </a> </div>
        </li>
        <!-- Member Box 1 --> 
        <!-- Member Box 2 -->
        <li class="member_box">
          <?php if(get_theme_mod('_teammember_img2')) { ?>
          <img src="<?php echo esc_url(get_theme_mod('_teammember_img2')); ?>" width="200" height="142" alt="Thumbnail" />
          <?php } ?>
          <div class="member_details"> <span>
            <?php if(get_theme_mod('_teammember_text2')) { echo wp_kses_post(get_theme_mod('_teammember_text2')); } ?>
            </span>
            <p>
              <?php if(get_theme_mod('_teammember_content2')) { echo wp_kses_post(get_theme_mod('_teammember_content2')); } ?>
            </p>
            <a href="<?php if(get_theme_mod('_teammember_link2')) { echo esc_url(get_theme_mod('_teammember_link2')); } ?>" title="<?php _e('Know More', 'irex-lite'); ?>" class="tooltip read-the-rest">
            <?php _e('Know More&nbsp;&rarr;','irex-lite');?>
            </a> </div>
        </li>
        <!-- Member Box 2 --> 
        <!-- Member Box 3 -->
        <li class="member_box">
          <?php if(get_theme_mod('_teammember_img3')) { ?>
          <img src="<?php echo esc_url(get_theme_mod('_teammember_img3')); ?>" width="200" height="142" alt="Thumbnail" />
          <?php } ?>
          <div class="member_details"> <span>
            <?php if(get_theme_mod('_teammember_text3')) { echo wp_kses_post(get_theme_mod('_teammember_text3')); } ?>
            </span>
            <p>
              <?php if(get_theme_mod('_teammember_content3')) { echo wp_kses_post(get_theme_mod('_teammember_content3')); } ?>
            </p>
            <a href="<?php if(get_theme_mod('_teammember_link3')) { echo esc_url(get_theme_mod('_teammember_link3')); } ?>" title="<?php _e('Know More', 'irex-lite'); ?>" class="tooltip read-the-rest">
            <?php _e('Know More&nbsp;&rarr;','irex-lite');?>
            </a> </div>
        </li>
        <!-- Member Box 3 -->
      </ul>
    </div>
  </div>
</div>

<!-- #Container Area -->

<?php get_footer(); ?>