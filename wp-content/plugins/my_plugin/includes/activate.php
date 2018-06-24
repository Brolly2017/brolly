<?php



function dani_activate_plugin(){
     if(version_compare(get_bloginfo('version'),'4.2','<')){
        wp_die(__('You must update Wordpress to use this plugin','my_plugin')); 
     }

}