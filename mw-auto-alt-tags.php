<?php

/*
    Plugin Name: Auto Set Missing Image Alt Tags
    Description: Set Missing Image Alt Tags Automatically
    Version: 0.0.1
    Requires PHP: 5.6
    Requires at least: 4.7
    Author: Mohamed Abidar
    Author URI: https://abidar.dev/
*/
 
 
/**
 * Activate the plugin.
 */
function mwasmiat_activate() { 
    require __DIR__ . '/includes/existing-images.php';
}
register_activation_hook( __FILE__, 'mwasmiat_activate' );

