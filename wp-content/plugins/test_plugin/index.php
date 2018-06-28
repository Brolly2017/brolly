<?php


function my_activate_plugin(){
    if(version_compare(get_bloginfo('version'),'4.2','<')){
       wp_die(__('You must update Wordpress to use this plugin','my_plugin')); 
    }

}

register_activation_hook(__FILE__,'my_activate_plugin');


$result = add_role(
    'basic_contributor',
    __( 'Basic Contributor' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);
if ( null !== $result ) {
    echo 'Yay! New role created!';
}
else {
    echo 'Oh... the basic_contributor role already exists.';
}



function add_roles_on_plugin_activation() {
    add_role( 'custom_role', 'Basic Contributor', array( 'read' => true, 'edit_posts' => true ) );
}
register_activation_hook( __FILE__, 'add_roles_on_plugin_activation' );
 //Shortcodes