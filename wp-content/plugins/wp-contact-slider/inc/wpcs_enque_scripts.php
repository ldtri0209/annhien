<?php

add_action('wp_enqueue_scripts', 'wpcs_enqueue_scripts');
/**
 * @author Mohammad Mursaleen
 * function To Enqueue frontend scripts
 */
function wpcs_enqueue_scripts() {

// call jquery
    wp_enqueue_script( 'jquery' );
// toggle right script
    $slide_out_script_url =  plugins_url( 'js/jquery.tabSlideOut.v1.3.js', dirname(__FILE__) );
    wp_register_script( 'wpcs_jquery_slideout_plugin', $slide_out_script_url, false, false );
    wp_enqueue_script( 'wpcs_jquery_slideout_plugin' );

}
