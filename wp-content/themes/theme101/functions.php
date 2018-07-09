<?php

function dani101_include(){
    wp_enqueue_style('customstyle',get_template_directory_uri().'/css/theme101.css',array(),'1.0','all');
    wp_enqueue_script('customscript',get_template_directory_uri().'/js/theme101.js',array(),'1.0',true);
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
} 
//including the styles and the scripts
add_action('wp_enqueue_scripts','dani101_include');
//creating a function for creating a navigation menus

function dani101_theme_setup(){
    add_theme_support('menus');//wp hook to activate the theme support
    register_nav_menu('primary','Primary header navigation');
    register_nav_menu('secondary','Footer navigation');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    //post-formats
    add_theme_support('post-formats',array('aside','image','video','audio','chat'));
    add_theme_support('future-image');
}

// function theme_setup(){
//     add_theme_support('custom-background');
//     add_theme_support('custom-header');
//     add_theme_support('post-thumbnails');
//     //post-formats
//     add_theme_support('post-formats','');
// }
//add_action('init','theme_setup');

add_action('init','dani101_theme_setup');

function admin_print_style(){
       echo '<style> body{background:#bdecff !important; color:green;}</style> ';
}
//ne lasa sa includem inline styles in head section in admin dashboard
add_action('admin_print_styles','admin_print_style');

function dani_meta_box($post_type,$post){
    add_meta_box(
        'my_meta_id',
        __('My meta box'),
        'dani_render_meta_box',
        'post',
        'side',
        'low'
    );
}
function dani_render_meta_box(){
    wp_nonce_field('dani_render_meta_box','');
    $html ='<label for="mp3-title">';
    $html .='Title for mp3';
    $html .='</label>';
    $html .='<input type="text" id="mp3-title" name="mp3-title" value="'.get_post_meta($post->id,'mp3-title',true).'">';
    $html .='<label for="mp3-file">';
    $html .='Mp3 file';
    $html .='</label>';
    $html .='<input type= "file" id-"mp3-file" name="mp3-file" value="" >';
    echo $html; 
}
 add_action('add_meta_boxes','dani_meta_box',10,2);
function sample_admin_notice(){
 ?>
 <div class="notice notice-success is-dismissible">
    <p><?php _e('Done','sample-text-domain');?></p>
 </div>
 <?php
}
add_action('admin_notices','sample_admin_notice');


//sidebar setup
function dani101_widget_setup(){
    register_sidebar(
        array(
        'name'          =>'sidebar',
        'id'            =>'sidebar-1',
        'class'         => 'custom',
        'description'   => 'This is the primary sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	    'after_widget'  => "</li>\n",
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => "</h2>\n",
        )
    );
    register_sidebars(
        array(
        'name'=>'secondery-sidebar',
        'id'=>'sidebar-2',
        'class'=>'custom',
        'description'=>'This is another sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	    'after_widget'  => "</li>\n",
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => "</h2>\n",
        )
    );
}
add_action('widgets_init','dani101_widget_setup');