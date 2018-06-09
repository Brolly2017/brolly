<?php
/**
 * Load files.
 *
 * @package Holidays_Plus
 */
/**
*  Get theme options
*/
if ( ! function_exists( 'holidays_plus_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
function holidays_plus_get_option( $key ) {

	$default_options = holidays_plus_get_default_theme_options();

	if ( empty( $key ) ) {
		return;
	}

	$theme_options = (array)get_theme_mod( 'theme_options' );
	$theme_options = wp_parse_args( $theme_options, $default_options );

	$value = null;

	if ( isset( $theme_options[ $key ] ) ) {
		$value = $theme_options[ $key ];
	}

	return $value;
}

endif;



if ( ! function_exists( 'holidays_plus_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function holidays_plus_get_default_theme_options() {

	$defaults = array();

	$defaults['primary_color'] 						= '#079cd4';
	$defaults['hover_color'] 						= '#02076E';
	$defaults['menu_background_color'] 				= '#02CAFE';
	$defaults['post_meta_color'] 					= '#079cd4';

	return $defaults;
}

endif;

function holidays_plus_dynamic_styles(){

	$primary_color  	=  esc_attr( holidays_plus_get_option( 'primary_color' ) );
	$hover_color  		=  esc_attr( holidays_plus_get_option( 'hover_color' ) );
	$menu_background_color  		=  esc_attr( holidays_plus_get_option( 'menu_background_color' ) );
	$post_meta_color  		=  esc_attr( holidays_plus_get_option( 'post_meta_color' ) );

	$custom_css = "
            .owl-theme .owl-nav [class*=owl-],             
            .mean-container .mean-nav ul li a.mean-expand:hover, 
            .mean-container .mean-nav, 
            .mean-container .mean-bar, 
            input[type='submit'], 
            ul.resp-tabs-list li, 
            .search-tours-package-wrap .form-item input[type='submit'], 
            span.days-package, a.view-btn, 
            .footer-form input[type='submit'],
            .back-to-top,
            .widget-title:before,
            .owl-theme .owl-nav [class*=owl-]{
			background: {$primary_color};
		}";
	$custom_css .= "
            td#today a, 
            .holiday-package-caption a.view-btn, 
            .holiday-package-caption a.view-btn:after, 
            .package-list-detail a.view-btn, 
            .package-list-detail a.view-btn:after,
            a{
				color: {$primary_color};
		}";

	$custom_css .= "
        .widget-title span:before,
        .widget-title span{
			border-bottom: 2px solid $primary_color;
		}";		

	$custom_css .= "
        a:hover, 
        a:focus, 
        a:active, 
        .header-btn:hover, 
        .main-navigation ul li.current-menu-item a, 
        a.view-btn:hover, a.view-btn:hover:after, 
        .main-navigation ul li.current-menu-item a, 
        .main-navigation ul li a:hover, 
        .entry-meta span a:hover i, 
        .entry-meta span:hover i, 
        .entry-meta span:hover, 
        .entry-meta span a:hover, 
        .entry-footer span.comments-link:hover, 
        .top-heading ul li a:hover,
        .post .entry-title a:hover, 
        .package-wrap .entry-title a:hover, 
        .holiday-package-caption .entry-title a:hover, 
        .package-list-detail .entry-title a:hover, 
        .popular-caption .entry-title a:hover, 
        .widget ul li a:hover,
        .with-header-add .top-header-wrapper .top-menu-holder li a:hover,
        with-header-add .top-header-wrapper .top-address-part li:hover, 
        .with-header-add .top-header-wrapper .top-address-part li a:hover, 
        .with-header-add .top-header-wrapper .top-menu-holder li a:hover{
			color: $hover_color;
		}";	

	$custom_css .= "
        .owl-theme .owl-nav [class*=owl-]:hover, 
        .tab-section ul li.resp-tab-active,
        input[type='submit']:hover, 
        .package-offer, 
        a.btn,		
        .back-to-top:hover{
			background: {$hover_color};
		}";

	$custom_css .= "
        .main-menu-heading{
			background: {$menu_background_color};
		}";

	$custom_css .= "
        .entry-meta span a,
        .entry-meta span{
			color: {$post_meta_color};
		}";
	wp_add_inline_style( 'holidays-plus-style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'holidays_plus_dynamic_styles' );