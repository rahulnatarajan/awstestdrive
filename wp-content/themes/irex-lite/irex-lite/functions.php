<?php
//	Registers the Widgets and Sidebars for the site

function irex_lite_widgets_init() {
register_sidebar(array(

'name' => 'primary-widget-area',

'id' => 'primary-widget-area',

'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

'after_widget' => '</li>',

'before_title' => '<h3 class="widget-title">',

'after_title' => '</h3>',

));

register_sidebar(array(

'name' => 'about-widget-area',

'id' => 'about-widget-area',

'before_widget' => '<li id="%1$s" class="about-container">',

'after_widget' => '</li>',

'before_title' => '<h2 class="about-widget-title">',

'after_title' => '</h2>',

));
register_sidebar(array(

'name' => 'short-widget-area',

'id' => 'short-widget-area',

'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

'after_widget' => '</li>',

'before_title' => '<h3 class="widget-title">',

'after_title' => '</h3>',

));

}
add_action( 'widgets_init', 'irex_lite_widgets_init' );

/***************register nav menus*********************/
function irex_lite_theme_setup() {
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'irex-lite' ),
	));

	register_nav_menus( array(
		'footer' => __( 'Footer Navigation', 'irex-lite' ),
	));

/***** Make theme available for translation ****/
// Translations can be filed in the /languages/ directory
	load_theme_textdomain('irex-lite', get_template_directory() . '/languages');

// This theme allows users to set a custom header.
	add_theme_support( 'custom-header', array( 'flex-width' => true, 'width' => 1600, 'flex-height' => true, 'height' => 750, 'default-image' => get_template_directory_uri() . '/images/header.png') );

/*
 * This theme uses a custom image size for featured images, displayed on
 * "standard" posts and pages.
 * THUMBNAIL SUPPORT
*/
	add_theme_support( "title-tag" );

	$defaults = array(
		'default-color'          => '#777777',
		'default-image'          => '',
		'default-repeat'         => 'no-repeat',
		'default-position-x'     => 'center',
		'default-attachment'     => 'fixed',
	);
	add_theme_support( 'custom-background', $defaults );


	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_image_size('irex_standard_img',627,175,true); 
	add_image_size('irex_frontport_img',222,132,true); 
	set_post_thumbnail_size( 600, 220, true );
	add_editor_style();
	
}

add_action( 'after_setup_theme', 'irex_lite_theme_setup' ); 


/**
* Funtion to add CSS class to body
*/
function irex_lite_add_class( $classes ) {

	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
	return $classes;
}

add_filter( 'body_class','irex_lite_add_class' );

/******* For the comment template *******/

function irex_lite_comment($comment, $args, $depth) {

		$GLOBALS['comment'] = $comment;

		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {

			$tag = 'div ';

			$add_below = 'comment';

		} else {

			$tag = 'li ';

			$add_below = 'div-comment';

		}
?>

<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
<?php if ( 'div' != $args['style'] ) : ?>
<div id="comment-body-top"></div>
<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
  <?php endif; ?>
  <div class="comment-author vcard">
    <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, 50 ); ?>
    <?php printf(__('<cite class="fn">%s</cite>','irex-lite'), get_comment_author_link()) ?> </div>
  <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
    <?php

					printf( __('%1$s at %2$s','irex-lite'), get_comment_date(),  get_comment_time()) ?>
    </a>
    <?php edit_comment_link(__('(Edit)','irex-lite'),'  ','' );

				?>
  </div>
  <div class="comment_txt">
    <?php comment_text() ?>
  </div>
  <?php if ($comment->comment_approved == '0') : ?>
  <em class="comment-awaiting-moderation">
  <?php _e('Your comment is awaiting moderation.','irex-lite') ?>
  </em>
  <?php endif; ?>
  <div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
  </div>
  <?php if ( 'div' != $args['style'] ) : ?>
</div>
<div id="comment-body-bottom"></div>
<?php endif; ?>
<?php }


/*  * Loads the Options Panel * * If you're loading from a child theme use stylesheet_directory * instead of template_directory */ 

/**
 * Add Customizer 
 */
require get_template_directory() . '/includes/customizer.php';
/**
 * Add Required Files
 */
require_once(get_template_directory() . '/SketchBoard/functions/admin-init.php');
/**
 * Add Sketchthemes page
 */
require_once(get_template_directory() . '/includes/sketchtheme-upsell.php');

?>