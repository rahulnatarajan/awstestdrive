<?php/*************************************************  enquque css and javascript************************************************///enqueue jquery function irex_lite_script_enqueqe() {	wp_enqueue_script('easing-slider',get_template_directory_uri().'/js/slider/jquery.easing.1.3.js',array('jquery'),'1.2' );	wp_enqueue_script('camera-slider',get_template_directory_uri().'/js/slider/camera.min.js',array('jquery'),'1.2' );	wp_enqueue_script('comment-reply' );	wp_enqueue_script('slidermobile.js',get_template_directory_uri().'/js/slider/jquery.mobile.customized.min.js',array('jquery'),'1.2' );}add_action('wp_enqueue_scripts', 'irex_lite_script_enqueqe');//enqueue admin cssfunction irex_lite_theme_stylesheet(){	global $wp_version;	$irex_skt_version = NULL;	$theme = wp_get_theme();	$irex_skt_version = $theme['Version'];	wp_enqueue_script('prettyPhoto',get_template_directory_uri().'/js/jquery.prettyPhoto.js',array('jquery'),true,'1.0' );	wp_enqueue_script('quicksand',get_template_directory_uri().'/js/jquery.quicksand.js',array('jquery'),true,'1.0' );	wp_enqueue_script('script_slide',get_template_directory_uri().'/js/component.js',array('jquery'),true,'1.0' );	wp_enqueue_script('tipTip_slide',get_template_directory_uri().'/js/jquery.tipTip.js',array('jquery'),true,'1.0' );	wp_enqueue_script('superfish',get_template_directory_uri().'/js/superfish.js',array('jquery'),true,'1.0' );	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', false, $theme->Version);	wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css', false, $irex_skt_version );	wp_enqueue_style('responsive', get_template_directory_uri().'/css/960_24_col_responsive.css', false, $irex_skt_version );	wp_enqueue_style('irex-style', get_stylesheet_uri(), false, $irex_skt_version );	wp_enqueue_style('camera-slider', get_template_directory_uri().'/css/camera.css', false, $irex_skt_version );	wp_enqueue_style('irex-theme-stylesheet', get_template_directory_uri().'/SketchBoard/css/skt-theme-stylesheet.css', false, $irex_skt_version );	wp_enqueue_style('prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css', false, $irex_skt_version );	wp_enqueue_style('tipTip', get_template_directory_uri().'/css/tipTip.css', false, $irex_skt_version);}add_action('wp_enqueue_scripts', 'irex_lite_theme_stylesheet');/* Enqueue New Google Fonts */function irex_lite_load_google_fonts() {				wp_enqueue_style( 'google-fonts-junge','//fonts.googleapis.com/css?family=Junge' );	wp_enqueue_style( 'google-fonts-artifika','//fonts.googleapis.com/css?family=Artifika' );	wp_enqueue_style( 'igoogle-fonts-oxygen','//fonts.googleapis.com/css?family=Oxygen' );	wp_enqueue_style( 'google-fonts-gilda','//fonts.googleapis.com/css?family=Gilda+Display');}add_action('wp_enqueue_scripts', 'irex_lite_load_google_fonts');function irex_lite_head(){	?>	<style type="text/css">		body.custom-background{ background-size: <?php echo esc_attr( get_theme_mod('background_size', 'cover') ); ?>; }	</style>	<?php 	if ( is_front_page() && 'page' == get_option( 'show_on_front' ) ) {	?>		<style type="text/css">			#header{ padding: 0 0 40px;} 		</style>	<?php	}}add_action('wp_head', 'irex_lite_head');//enqueue footer script function irex_lite_footer_script() {	if((!is_admin() && is_front_page()) && 'page' == get_option( 'show_on_front' ) ) {		require_once(get_template_directory().'/js/camera-slider-config.php');	}    	if (is_page_template('template-fullwidthgallery.php') ) { ?>		<script type="text/javascript">			jQuery(document).ready(function(){				irex_lite_show_skebg_thumbs();			});		</script>	<?php } ?>	<!-- Color Skings CSS -->	<?php $color_scheme=(get_theme_mod('_color_scheme', 'green'));?>	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/skins/<?php echo $color_scheme;?>/<?php echo $color_scheme;?>.css" type="text/css" media="screen" /><!-- /Color Skings CSS --><?php }add_action('wp_footer', 'irex_lite_footer_script');