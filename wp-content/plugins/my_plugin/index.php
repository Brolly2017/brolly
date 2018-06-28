<?php
/**
 * Plugin name:My plugin
 * Description: Asimple wordpress plugin
 * Version: 1.0
 * Author: Dani
 */

 //Setup




 //Includes
include('includes/activate.php');
 //Hooks

register_activation_hook(__FILE__,'dani_activate_plugin');


$result = add_role(
    'basic_wp_user',
    __( 'Basic user' ),
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
    add_role( 'custom_role', 'Basic user', array( 'read' => true, 'edit_posts' => true ) );
}
register_activation_hook( __FILE__, 'add_roles_on_plugin_activation' );
 //Shortcodes
