<?php if( ! defined( 'ABSPATH' ) ) exit;
add_action( 'customize_register', 'new_photography_back_to_top_customize_register' );
function new_photography_back_to_top_customize_register( $wp_customize ) {
/***********************************************************************************
 * Back to top button Options
***********************************************************************************/
		$wp_customize->add_section( 'back_to_top' , array(
			'title'       => __( 'Back To Top Button Options', 'new-photography' ),
			'priority'   => 98,
		) );
		
		$wp_customize->add_setting( 'activate_back_to_top', array (
			'sanitize_callback' => 'new_photography__sanitize_checkbox',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'activate_back_to_top', array(
			'label'    => __( 'Activate Back To Top Button', 'new-photography' ),
			'section'  => 'back_to_top',
			'settings' => 'activate_back_to_top',
			'type' => 'checkbox',
		) ) );
		
	
		$wp_customize->add_setting('back_top_button_color', array(         
			'default'     => ' ',
			'sanitize_callback' => 'sanitize_hex_color'
		) ); 	
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'back_top_button_color', array(
			'label' => __('Button Color', 'new-photography'),        
			'section' => 'back_to_top',
			'settings' => 'back_top_button_color'
		) ) );
		
		$wp_customize->add_setting('back_top_button_hover_color', array(         
			'default'     => ' ',
			'sanitize_callback' => 'sanitize_hex_color'
		) ); 	
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'back_top_button_hover_color', array(
			'label' => __('Button Hover Color', 'new-photography'),        
			'section' => 'back_to_top',
			'settings' => 'back_top_button_hover_color'
		) ) );
		
		$wp_customize->add_setting('back_button_background_color', array(         
			'default'     => ' ',
			'sanitize_callback' => 'sanitize_hex_color'
		) ); 		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'back_button_background_color', array(
			'label' => __('Button Background Color', 'new-photography'),        
			'section' => 'back_to_top',
			'settings' => 'back_button_background_color'
		) ) );
		
		$wp_customize->add_setting('back_button_background_hover_color', array(         
			'default'     => ' ',
			'sanitize_callback' => 'sanitize_hex_color'
		) ); 	
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'back_button_background_hover_color', array(
			'label' => __('Button Background Hover Color', 'new-photography'),        
			'section' => 'back_to_top',
			'settings' => 'back_button_background_hover_color'
		) ) );
}
/********************************************
* Back to top styles
*********************************************/ 	
add_action( 'wp_enqueue_scripts', 'new_photography_back_top_method' );	
function new_photography_back_top_method() {
        $back_top_button_color_mod = esc_attr( get_theme_mod( 'back_top_button_color' ) );
        $back_top_button_hover_color_mod = esc_attr( get_theme_mod( 'back_top_button_hover_color' ) );
        $back_button_background_color_mod = esc_attr( get_theme_mod( 'back_button_background_color' ) );
        $back_button_background_hover_color_mod = esc_attr( get_theme_mod( 'back_button_background_hover_color' ) );
		if( $back_top_button_color_mod ) { $back_top_button_color = "body .cd-top {color: {$back_top_button_color_mod} !important;}";} else { $back_top_button_color =""; }
		if( $back_top_button_hover_color_mod ) { $back_top_button_hover_color = "body .cd-top:hover {color: {$back_top_button_hover_color_mod} !important;}";} else {$back_top_button_hover_color ="";}
		if( $back_button_background_color_mod ) { $back_button_background_color = "body .cd-top {background: {$back_button_background_color_mod} !important;}";} else {$back_button_background_color ="";}
		if( $back_button_background_hover_color_mod ) { $back_button_background_hover_color = "body .cd-top:hover {background: {$back_button_background_hover_color_mod} !important;}";} else {$back_button_background_hover_color ="";}
        wp_add_inline_style( 'custom-style-css', 
		$back_top_button_color.$back_top_button_hover_color.$back_button_background_color.$back_button_background_hover_color
		);
}	
