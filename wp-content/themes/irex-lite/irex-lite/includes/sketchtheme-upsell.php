<?php
/**
 * Title: Theme Upsell.
 *
 * Description: Displays list of all Sketchtheme themes linking to it's pro and free versions.
 *
 *
 * @author   Sketchtheme
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://sketchthemes.com/
 */

// Add stylesheet and JS for sell page.
function irex_lite_sell_style() {
    if ( isset($_GET["page"]) && $_GET["page"] == 'sketch-themes' )
    wp_enqueue_style( 'upsell_style', get_template_directory_uri() . '/css/upsell.css' );
}
add_action( 'admin_init', 'irex_lite_sell_style' );

// Add upsell page to the menu.
function irex_lite_add_upsell() {
    $page = add_theme_page( __('Sketch Themes', 'irex-lite'), __('Sketch Themes', 'irex-lite'), 'administrator', 'sketch-themes', 'irex_lite_display_upsell' );
    add_action( 'admin_print_styles-' . $page, 'irex_lite_sell_style' );
}
add_action( 'admin_menu', 'irex_lite_add_upsell',12 );

// Define markup for the upsell page.
function irex_lite_display_upsell() {

    // Set template directory uri
    $directory_uri = get_template_directory_uri().'/images';
    ?>

    <div class="wrap">
    <div class="container-fluid">
    <div id="upsell_container">
    <div class="clearfix row-fluid">
        <div id="upsell_header" class="span12">
            <div class="donate-info">
              <strong><?php _e('To Activate All Features, Please Upgrade to Pro version!', 'irex-lite'); ?></strong><br>
              <a title="<?php _e('Upgrade to Pro', 'irex-lite') ?>" href="https://sketchthemes.com/" target="_blank" class="upgrade"><?php _e('Upgrade to Pro', 'irex-lite'); ?></a>
              <a title="<?php _e('Setup Instructions', 'irex-lite'); ?>" href="<?php echo get_template_directory_uri(); ?>/readme.txt" target="_blank" class="donate"><?php _e('Setup Instructions', 'irex-lite'); ?></a>
              <a title="<?php _e('Rate Irex Lite', 'irex-lite'); ?>" href="https://wordpress.org/support/view/theme-reviews/irex-lite" target="_blank" class="review"><?php _e('Rate Irex Lite', 'irex-lite'); ?></a>
              <a title="<?php _e('Theme Test Drive', 'irex-lite'); ?>" href="http://trial.sketchthemes.com/wp-signup.php" target="_blank" class="review"><?php _e('Theme Test Drive', 'irex-lite'); ?></a>
            </div>
        </div>
    </div>
    <div id="upsell_themes" class="clearfix row-fluid">

    <!-- -------------- Irex Pro ------------------- -->

        <div id="Irex" class="row-fluid">
            <div class="theme-container">
                <div class="theme-image span3">
                    <a href="https://sketchthemes.com/themes/irex-full-width-wordpress-theme/" target="_blank">
                        <img src="<?php echo $directory_uri; ?>/Irex.png"  alt="<?php __('Irex Theme', 'irex-lite') ?>"  width="300px"/>
                    </a>
                </div>
                <div class="theme-info span9">
                    <a class="theme-name" href="https://sketchthemes.com/themes/irex-full-width-wordpress-theme/" target="_blank"><h4><?php _e('Irex Full Width Portfolio Wordpress Theme','irex-lite');?></h4></a>

                    <div class="theme-description">
                        <p><?php _e('Irex is a simple, minimal, responsive, easy to use, one click install, beautiful and Elegent WordPress Theme with Easy Custom Admin Options Created by SketchThemes.com. Using Irex theme options any one can easily customize this theme according to their need. You can use your own Logo, logo alt text, custom favicon, you can add social links, rss feed to homepage, you can use own copyright text etc. And all this information can be entered using Irex Theme Options Panel. You have to just set the content from the Irex  Themes Options Panel and it will be up ready to use.','irex-lite');?></p>
                    </div>

					<a class="free btn btn-success" href="http://wordpress.org/themes/irex-lite" target="_blank"><?php _e( 'Try Irex Lite','irex-lite'); ?></a>
                    <a class="buy btn btn-info" href="http://demo.sketchthemes.com/preview/irex/" target="_blank"><?php _e( 'View Demo','irex-lite'); ?></a>
					<a class="buy btn btn-primary" href="https://www.sketchthemes.com/members/signup/irex/" target="_blank"><?php _e( 'Buy Irex Pro','irex-lite'); ?></a>
                </div>
            </div>
        </div>

    </div>
    <!-- upsell themes -->
    </div>
    <!-- upsell container -->
    </div>
    <!-- container-fluid -->
    </div>

<?php } ?>