<?php
/**
* Plugin Name: navBar animation
* Plugin URI:
* Description: a custom animation for navbar & dynamic window resizing.
* Version: 1.1
* Author: Jake Price
* Author URI: https://www.jakepricecreative.com/
**/

/*
hooks
 */
add_action( 'wp_enqueue_scripts' , 'navBarAnimation_enqueue_scripts' );

/*
register styles & scripts
 */
function navBarAnimation_enqueue_scripts() {

    /*
    stylesheets
     */
    /*
    display
     */
    wp_register_style('navBarAnimation-CSS-display', plugin_dir_url( __FILE__ ) . '/css/navBarAnimation-display.css', 1.0, false);

    /*
    animations
     */
    wp_register_style('navBarAnimation-CSS-animations', plugin_dir_url( __FILE__ ) . '/css/navBarAnimation-animations.css', 1.0, false);

    /*
    script
     */
    wp_register_script('navBarAnimation-script', plugin_dir_url( __FILE__ ) . '/js/navBarAnimation-script.js', 1.0, false);
};

/*
shortcode
 */

/*
action
 */
add_shortcode('navBarAnimation','navBaranimation_shortcode');

/*
function
 */
function navBaranimation_shortcode($content = null) {

    /*
    enqueue styles & scripts
     */
    wp_enqueue_style('navBarAnimation-CSS-display'); 
    wp_enqueue_style('navBarAnimation-CSS-animations');
    wp_enqueue_script('navBarAnimation-script');

    $content = null;
    return $content;
};