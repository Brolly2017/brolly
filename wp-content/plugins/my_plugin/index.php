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




 //Shortcodes