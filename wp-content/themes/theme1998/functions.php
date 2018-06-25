<?php

function addStyle(){
    wp_enqueue_style('style',get_template_directory_uri().'/css/mystyle.css');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts','addStyle');
add_action('init','themesetup');
function themesetup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary header navigation');
    register_nav_menu('secondery','Secondery menu navigation');
   
}


add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('title-tag');