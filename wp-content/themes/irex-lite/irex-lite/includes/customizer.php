<?php

function irex_lite_customize_register( $wp_customize ) {

	// define image directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$wp_customize->remove_control('header_textcolor');
	
	// ====================================
	// = Background Image Size for custom-background
	// ====================================
	$wp_customize->add_setting( 'background_size', array(
		'default'        => 'cover',
		'theme_supports' => 'custom-background',
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	));
	$wp_customize->add_control('background_size', array(
		'label' => __('Background Image Size','irex-lite'),
		'section' => 'background_image',
	));

	// ====================================
	// = Advertica Lite Theme Pannel
	// ====================================
	$wp_customize->add_panel( 'irex_lite_settings', array(
		'title' => __( 'Irex Lite Settings', 'irex-lite'),
		'priority' => 10,
	) );

	// ====================================
	// = Advertica Lite Theme Sections
	// ====================================
	
	// Home Page
	$wp_customize->add_section( 'general_settings_section' , array(
		'title' => __('General Settings','irex-lite'),
		'panel' => 'irex_lite_settings',
	) );
	$wp_customize->add_section( 'front_page_settings_section' , array(
		'title' => __('Front Page Settings', 'irex-lite'),
		'panel' => 'irex_lite_settings',
	) );
	$wp_customize->add_section( 'Slider_settings_section' , array(
		'title' => __('Slider Configuration','irex-lite'),
		'panel' => 'irex_lite_settings',
	) );
	$wp_customize->add_section( 'social_links_settings_section' , array(
		'title' => __('Social Links Settings','irex-lite'),
		'panel' => 'irex_lite_settings',
	) );
	$wp_customize->add_section( 'about_page_options_section' , array(
		'title' => __('About Page Options','irex-lite'),
		'panel' => 'irex_lite_settings',
	) );
	$wp_customize->add_section( 'footer_settings_section' , array(
		'title' => __('Footer Settings','irex-lite'),
		'panel' => 'irex_lite_settings',
	) );

	// ====================================
	// = General Settings Sections
	// ====================================

	// Logo Image
	$wp_customize->add_setting( '_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_logo_img', array(
		'priority' => 1,
		'label' => __( 'Custom Logo :','irex-lite'),
		'section' => 'general_settings_section',
		'mime_type' => 'image',
	) ) );

	// Choose Skin
	$wp_customize->add_setting( '_color_scheme', array(
		'default'           => 'green',
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( '_color_scheme', array(
		'label' => __( 'Choose Skin', 'irex-lite' ),
		'section' => 'general_settings_section',
		'type' => 'select',
		'choices' => array(
			'green' => __('Green(Dark Skin)', 'irex-lite'),

			'red' => __('Red(Light Skin)', 'irex-lite'),
		),
	) );

	// Pagination
	$wp_customize->add_setting( '_show_pagination', array(
		'default'           => 'on',
		'sanitize_callback' => 'irex_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_show_pagination', array(
		'label' => __( 'Custom Pagination', 'irex-lite' ),
		'section' => 'general_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// ====================================
	// = Front Page Settings Sections
	// ====================================

	// Front Page Heading Text
	$wp_customize->add_setting( '_mid_text', array(
		'default'        => __('Welcome to the Portfolio of Irex Studio', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_mid_text', array(
		'label' => __('Front Page Heading Text:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	// Featured Area Heading Text
	$wp_customize->add_setting( '_feature_head_area', array(
		'default'        => __('Featured Area', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_feature_head_area', array(
		'label' => __('Featured Area Heading:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	// First Featured Box
	$wp_customize->add_setting( '_feature_img1', array(
		'default'           => $imagepath.'slide1.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_feature_img1', array(
		'label' => __( 'First Featured Area Image:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	) ) );

	$wp_customize->add_setting( '_feature_text1', array(
		'default'        => __('Business Strategy', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_feature_text1', array(
		'label' => __('First Featured Area Title:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	$wp_customize->add_setting( '_feature_link1', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('_feature_link1', array(
		'type' => 'url',
		'label' => __('First Featured Area Title Link:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	// Second Featured Box
	$wp_customize->add_setting( '_feature_img2', array(
		'default'           => $imagepath.'slide2.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_feature_img2', array(
		'label' => __( 'Second Featured Area Image:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	) ) );

	$wp_customize->add_setting( '_feature_text2', array(
		'default'        => __('Business Strategy', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_feature_text2', array(
		'label' => __('Second Featured Area Title:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	$wp_customize->add_setting( '_feature_link2', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('_feature_link2', array(
		'type' => 'url',
		'label' => __('Second Featured Area Title Link:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	// Third Featured Box
	$wp_customize->add_setting( '_feature_img3', array(
		'default'           => $imagepath.'slide3.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_feature_img3', array(
		'label' => __( 'Third Featured Area Image:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	) ) );

	$wp_customize->add_setting( '_feature_text3', array(
		'default'        => __('Business Strategy', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_feature_text3', array(
		'label' => __('Third Featured Area Title:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	$wp_customize->add_setting( '_feature_link3', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('_feature_link3', array(
		'type' => 'url',
		'label' => __('Third Featured Area Title Link:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	// Fourth Featured Box
	$wp_customize->add_setting( '_feature_img4', array(
		'default'           => $imagepath.'slide1.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_feature_img4', array(
		'label' => __( 'Fourth Featured Area Image:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	) ) );

	$wp_customize->add_setting( '_feature_text4', array(
		'default'        => __('Business Strategy', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_feature_text4', array(
		'label' => __('Fourth Featured Area Title:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	$wp_customize->add_setting( '_feature_link4', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('_feature_link4', array(
		'type' => 'url',
		'label' => __('Fourth Featured Area Title Link:','irex-lite'),
		'section' => 'front_page_settings_section',
		
	));

	// ====================================
	// = Slider Settings Sections
	// ====================================

	// First Slider
	$wp_customize->add_setting( '_slider_img1', array(
		'default'           => $imagepath.'slide1.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_slider_img1', array(
		'label' => __( 'Upload First Slide Image:','irex-lite'),
		'section' => 'Slider_settings_section',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( '_content_slider1', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_content_slider1', array(
		'label' => __('Enter Content For First Slide:','irex-lite'),
		'section' => 'Slider_settings_section',
		'type' => 'textarea',
		
	));

	// Second Slider
	$wp_customize->add_setting( '_slider_img2', array(
		'default'           => $imagepath.'slide2.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_slider_img2', array(
		'label' => __( 'Upload Second Slide Image:','irex-lite'),
		'section' => 'Slider_settings_section',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( '_content_slider2', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_content_slider2', array(
		'label' => __('Enter Content For Second Slide:','irex-lite'),
		'section' => 'Slider_settings_section',
		'type' => 'textarea',
		
	));

	// Third Slider
	$wp_customize->add_setting( '_slider_img3', array(
		'default'           => $imagepath.'slide3.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_slider_img3', array(
		'label' => __( 'Upload Third Slide Image:','irex-lite'),
		'section' => 'Slider_settings_section',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( '_content_slider3', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_content_slider3', array(
		'label' => __('Enter Content For Third Slide:','irex-lite'),
		'section' => 'Slider_settings_section',
		'type' => 'textarea',
		
	));

	// Slider Transition
	$wp_customize->add_setting( '_effect_select', array(
		'default'           => __('Random', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( '_effect_select', array(
		'label' => __( 'Slider Transition :', 'irex-lite' ),
		'section' => 'Slider_settings_section',
		'type' => 'select',
		'choices' => array(
			'random' => __('Random', 'irex-lite'),

			'simpleFade' => __('SimpleFade', 'irex-lite'),

			'curtainTopLeft' => __('CurtainTopLeft', 'irex-lite'),

			'curtainTopRight' => __('CurtainTopRight', 'irex-lite'),

			'curtainBottomLeft' => __('CurtainBottomLeft', 'irex-lite'),

			'curtainBottomRight' => __('CurtainBottomRight', 'irex-lite'),

			'curtainSliceLeft' => __('CurtainSliceLeft', 'irex-lite'),

			'curtainSliceRight' => __('CurtainSliceRight', 'irex-lite'),

			'blindCurtainTopLeft' => __('BlindCurtainTopLeft', 'irex-lite'),

			'blindCurtainTopRight' => __('BlindCurtainTopRight', 'irex-lite'),

			'blindCurtainBottomLeft' => __('BlindCurtainBottomLeft', 'irex-lite'),

			'blindCurtainBottomRight' => __('BlindCurtainBottomRight', 'irex-lite'),

			'blindCurtainSliceBottom' => __('BlindCurtainSliceBottom', 'irex-lite'),

			'blindCurtainSliceTop' => __('BlindCurtainSliceTop', 'irex-lite'),

			'stampede' => __('Stampede', 'irex-lite'),

			'mosaic' => __('Mosaic', 'irex-lite'),

			'mosaicReverse' => __('MosaicReverse', 'irex-lite'),

			'mosaicRandom' => __('MosaicRandom', 'irex-lite'),

			'mosaicSpiral' => __('MosaicSpiral', 'irex-lite'),

			'mosaicSpiralReverse' => __('MosaicSpiralReverse', 'irex-lite'),

			'topLeftBottomRight' => __('TopLeftBottomRight', 'irex-lite'),

			'bottomRightTopLeft' => __('BottomRightTopLeft', 'irex-lite'),

			'bottomLeftTopRight' => __('BottomLeftTopRight', 'irex-lite'),

			'mosaicSpiral' => __('MosaicSpiral', 'irex-lite'),

			'mosaicSpiral' => __('MosaicSpiral', 'irex-lite')
		),
	) );
	
	//Animation Speed
	$wp_customize->add_setting( '_animation_speed', array(
		'default'        => '500',
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_animation_speed', array(
		'label' => __('Animation Speed :','irex-lite'),
		'section' => 'Slider_settings_section',
		
	));

	//Slide Pause Time
	$wp_customize->add_setting( '_pause_time', array(
		'default'        => '3000',
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
		
	));
	$wp_customize->add_control('_pause_time', array(
		'label' => __('Slide Pause Time :','irex-lite'),
		'section' => 'Slider_settings_section',
		
	));

	// Slider Navigation
	$wp_customize->add_setting( '_navigation_select', array(
		'default'           => 'on',
		'sanitize_callback' => 'irex_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_navigation_select', array(
		'label' => __( 'Slider Navigation :', 'irex-lite' ),
		'section' => 'Slider_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// Slider Pagination
	$wp_customize->add_setting( '_paginationv_select', array(
		'default'           => 'on',
		'sanitize_callback' => 'irex_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_paginationv_select', array(
		'label' => __( 'Slider Pagination :', 'irex-lite' ),
		'section' => 'Slider_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// Control Nav Thumb
	$wp_customize->add_setting( '_controlNavThumbs_select', array(
		'default'           => 'on',
		'sanitize_callback' => 'irex_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_controlNavThumbs_select', array(
		'label' => __( 'Control Nav Thumbs :', 'irex-lite' ),
		'section' => 'Slider_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// Slider Auto Play
	$wp_customize->add_setting( '_autoadvance', array(
		'default'           => 'on',
		'sanitize_callback' => 'irex_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_autoadvance', array(
		'label' => __( 'Slider Auto Play :', 'irex-lite' ),
		'section' => 'Slider_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// Slider Pause Hover
	$wp_customize->add_setting( '_pauseonhover_select', array(
		'default'           => 'on',
		'sanitize_callback' => 'irex_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_pauseonhover_select', array(
		'label' => __( 'Slider Pause On Hover :', 'irex-lite' ),
		'section' => 'Slider_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// Slider Play Pause Button
	$wp_customize->add_setting( '_playpause_select', array(
		'default'           => 'on',
		'sanitize_callback' => 'irex_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_playpause_select', array(
		'label' => __( 'Slider Play Pause Button :', 'irex-lite' ),
		'section' => 'Slider_settings_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	// ====================================
	// = Social Links Settings Sections
	// ====================================

	//  Facebook
	$wp_customize->add_setting( '_fb_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fb_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Facebook URL', 'irex-lite' ),
	) );
	// Twitter
	$wp_customize->add_setting( '_tw_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_tw_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Twitter URL', 'irex-lite' ),
	) );
	// LinkedIn
	$wp_customize->add_setting( '_lkd_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_lkd_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'LinkedIn URL', 'irex-lite' ),
	) );
	// Goggle+
	$wp_customize->add_setting( '_gplus_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_gplus_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links_settings_section',
		'label'    		=> __( 'Google+ URL', 'irex-lite' ),
	) );

	// ====================================
	// = About Page Settings Sections
	// ====================================

	// About Page Heading Text
	$wp_customize->add_setting( '_taem_head_area', array(
		'default'        => __('Team Member Area', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'

	));
	$wp_customize->add_control('_taem_head_area', array(
		'label' => __('Team Member Area Heading:','irex-lite'),
		'section' => 'about_page_options_section'
		
	));

	// First Team Member
	$wp_customize->add_setting( '_teammember_img1', array(
		'default'           => $imagepath.'gallery-default-image.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_teammember_img1', array(
		'label' => __( 'First Team Member Image:','irex-lite'),
		'section' => 'about_page_options_section',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( '_teammember_text1', array(
		'default'        => __('Team Member 1', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_teammember_text1', array(
		'label' => __('First Team Member Title:','irex-lite'),
		'section' => 'about_page_options_section'
		
	));

	$wp_customize->add_setting( '_teammember_content1', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_teammember_content1', array(
		'label' => __('First Team Member Short Description:','irex-lite'),
		'section' => 'about_page_options_section',
		'type' => 'textarea',
		
	));

	$wp_customize->add_setting( '_teammember_link1', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_teammember_link1', array(
		'type'     		=> 'url',
		'section'  		=> 'about_page_options_section',
		'label'    		=> __( 'First Team Member Title Link:', 'irex-lite' ),
	) );

	// Second Team Member
	$wp_customize->add_setting( '_teammember_img2', array(
		'default'           => $imagepath.'gallery-default-image.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_teammember_img2', array(
		'label' => __( 'Second Team Member Image:','irex-lite'),
		'section' => 'about_page_options_section',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( '_teammember_text2', array(
		'default'        => __('Team Member 2', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_teammember_text2', array(
		'label' => __('Second Team Member Title:','irex-lite'),
		'section' => 'about_page_options_section',
		
	));

	$wp_customize->add_setting( '_teammember_content2', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_teammember_content2', array(
		'label' => __('Second Team Member Short Description:','irex-lite'),
		'section' => 'about_page_options_section',
		'type' => 'textarea',
		
	));

	$wp_customize->add_setting( '_teammember_link2', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_teammember_link2', array(
		'type'     		=> 'url',
		'section'  		=> 'about_page_options_section',
		'label'    		=> __( 'Second Team Member Title Link:', 'irex-lite' ),
	) );

	// Third Team Member
	$wp_customize->add_setting( '_teammember_img3', array(
		'default'           => $imagepath.'gallery-default-image.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_teammember_img3', array(
		'label' => __( 'Third Team Member Image:','irex-lite'),
		'section' => 'about_page_options_section',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( '_teammember_text3', array(
		'default'        => __('Team Member 3', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_teammember_text3', array(
		'label' => __('Third Team Member Title:','irex-lite'),
		'section' => 'about_page_options_section',
		
	));

	$wp_customize->add_setting( '_teammember_content3', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy','irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea'
	));
	$wp_customize->add_control('_teammember_content3', array(
		'label' => __('Third Team Member Short Description:','irex-lite'),
		'section' => 'about_page_options_section',
		'type' => 'textarea',
		
	));

	$wp_customize->add_setting( '_teammember_link3', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_teammember_link3', array(
		'type'     		=> 'url',
		'section'  		=> 'about_page_options_section',
		'label'    		=> __( 'Third Team Member Title Link:', 'irex-lite' ),
	) );

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( '_copyright', array(
		'default'        => __('Proudly Powered by WordPress', 'irex-lite'),
		'sanitize_callback' => 'irex_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_copyright', array(
		'label' => __('Copyright Text','irex-lite'),
		'description' => __('You can use HTML for links etc..', 'irex-lite'),
		'section' => 'footer_settings_section',
	));

}
add_action( 'customize_register', 'irex_lite_customize_register' );


// sanitize textarea
function irex_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

// sanitize on-off
function irex_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' =>'ON',
		'off'=> 'OFF'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// active callback breadcrumb section
function irex_lite_active_breadcrumb_section( $control ) {
	if ( $control->manager->get_setting('breadcrumb_sec')->value() == 'on' ) {
		return true;
	} else {
		return false;
	}
}

// active callback post page
function irex_lite_active_post_page() {
	if ( 'page' == get_option( 'show_on_front' ) ) {
		return true;
	} else {
		return false;
	}
}
?>