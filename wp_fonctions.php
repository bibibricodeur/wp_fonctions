<?php
/**
 * @package Wp_fonctions
 * @version 0.0.1
 */
/*
Plugin Name: Wp fonctions
Plugin URI: https://github.com/bibibricodeur
Description: Rajouter des fonctions indispensables pour tous les thèmes.
Version: 00.1
Author: bibibricodeur
Author URI: thiweb.fr
License: WTFPL
*/

// ajouter favicon
function ajouter_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="'. plugin_dir_url(__FILE__) .'wordpress-icon-vector-21.png" />';
}
 
add_action('wp_head', 'ajouter_favicon');

// https://www.wpbeginner.com/wp-tutorials/25-extremely-useful-tricks-for-the-wordpress-functions-file/

// 01.cacher version de wordpress
function wpb_remove_version() {
  return '';
}
add_filter('the_generator', 'wpb_remove_version');

// 15.cacher erreur login
function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

// 31.désactiver XML-RPC dans WordPress
add_filter('xmlrpc_enabled', '__return_false');

/// Fin
