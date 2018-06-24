<?php

function addStyle(){
    wp_enqueue_style('style',get_template_directory_uri().'/css/mystyle.css');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/boostrap.min.css');
}

add_action('wp_enqueue_scripts','addStyle');
