<?php


function my_activate_plugin(){
    if(version_compare(get_bloginfo('version'),'4.2','<')){
       wp_die(__('You must update Wordpress to use this plugin','my_plugin')); 
    }

}

register_activation_hook(__FILE__,'my_activate_plugin');