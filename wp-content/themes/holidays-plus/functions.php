<?php
/**
 * Holidays Plus functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Holidays_Plus
 */

/**
 * Enqueue scripts and styles.
 */
function holidays_plus_scripts() {

	wp_enqueue_style( 'holidays-plus-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'holidays_plus_scripts' );

// Load functions
require_once trailingslashit( get_stylesheet_directory() ) . '/inc/init-function.php';

// Load Customizer Options.
require_once trailingslashit( get_stylesheet_directory() ) . '/inc/customizer-inc.php';