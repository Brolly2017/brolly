<?php

function my_scripts_enqueue(){
    wp_enqueue_style('customstyle',get_template_directory_uri().'/css/theme101.css',array(),'1.0','all');
    wp_enqueue_script('customscript',get_template_directory_uri().'/js/theme101.js',array(),'1.0',true);
} 
add_action('wp_enqueue_scripts','my_scripts_enqueue');

function theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary header navigation');
    register_nav_menu('secondary','Footer navigation');
}

add_action('init','theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
//post-formats
add_theme_support('post-formats','');

