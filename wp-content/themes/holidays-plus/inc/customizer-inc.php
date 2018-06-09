<?php 
/**
 * Blog Era Plus Theme Customizer
 *
 * @package holidays_Plus
 */

function holidays_plus_customize_register( $wp_customize ) {


	$default = holidays_plus_get_default_theme_options();	

	/******************************* Primary Color ***************************************************/
	$wp_customize->add_setting('theme_options[primary_color]', 
	    array(
	    'default'           => $default['primary_color'],        
	    'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[primary_color]',
	        array(
	        'label'       => esc_html__( 'Primary Color', 'holidays-plus' ),        
	        'settings'    => 'theme_options[primary_color]',
	        'section'     => 'colors',                                  
	        )
	    )
	);	

	$wp_customize->add_setting('theme_options[hover_color]', 
	    array(
	    'default'           => $default['hover_color'],        
	    'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[hover_color]',
	        array(
	        'label'       => esc_html__( 'Hover Color', 'holidays-plus' ),        
	        'settings'    => 'theme_options[hover_color]',
	        'section'     => 'colors',                                  
	        )
	    )
	);	


	$wp_customize->add_setting('theme_options[menu_background_color]', 
	    array(
	    'default'           => $default['menu_background_color'],        
	    'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[menu_background_color]',
	        array(
	        'label'       => esc_html__( 'Menu Background Color', 'holidays-plus' ),        
	        'settings'    => 'theme_options[menu_background_color]',
	        'section'     => 'colors',                                  
	        )
	    )
	);
	$wp_customize->add_setting('theme_options[post_meta_color]', 
	    array(
	    'default'           => $default['post_meta_color'],        
	    'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[post_meta_color]',
	        array(
	        'label'       => esc_html__( 'Post Meta Color', 'holidays-plus' ),        
	        'settings'    => 'theme_options[post_meta_color]',
	        'section'     => 'colors',                                  
	        )
	    )
	);			

}
add_action( 'customize_register', 'holidays_plus_customize_register', 15 );