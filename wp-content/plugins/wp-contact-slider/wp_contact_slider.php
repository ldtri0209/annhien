<?php
/*
    Plugin Name: WP Contact Slider
	Plugin URI:	http://wooexpert.com/
    Description: Simple Contact Slider to display Contact Form 7, Gravity Forms and dispaly random Text or HTML.
    Author: Wooexpert
	Author URI: http://wooexpert.com/
    Version: 1.35
*/


// For meta-box support

 require_once( 'inc/meta-box/meta-box.php' );

// To call front end functions
 
 require_once( 'inc/wpcs_frontend_functions.php' );
 
// For admin functions support

 require_once( 'inc/wpcs_admin_functions.php' );

// Declaring Meta fields

 require_once( 'inc/wpcs_meta_fields.php' );

// Get CSS

 require_once( 'inc/wpcs_enque_styles.php' );

// Get Scripts

require_once( 'inc/wpcs_enque_scripts.php' );
