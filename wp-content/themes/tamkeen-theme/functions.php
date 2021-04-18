<?php
/**
 * Functions and definitions
 *
 * @link https://reflectionsglobal.com
 *
 * @package WordPress
 * @subpackage Tamkeen_Theme
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'tamkeen-theme-child-style', get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
