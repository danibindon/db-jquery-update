<?php
/**
 * Plugin Name: Replace Default jQuery
 * Plugin URI: https://gist.github.com/danibindon/acbba5fa096118c4f1c5af844c006919
 * Description: Replaces the default version of WordPress jQuery with 3.4.1 and jQuery-Migrate 1.4.1 on the front-end.
 * Version: 1.0
 * Text Domain: db-replace-default-jquery
 * Author: Danielle Bindon
 * Author URI: https://www.danibindon.com
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ){ exit; }


function db_replace_core_jquery_version() {
	wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate' );
	wp_enqueue_script( 'jquery', plugins_url( 'db-jquery-update/jquery/jquery-3.4.1.min.js' , dirname(__FILE__) ), array(), '3.4.1' );
	wp_enqueue_script( 'jquery-migrate', plugins_url( 'db-jquery-update/jquery/jquery-migrate-1.4.1.min.js' , dirname(__FILE__) ), array(), '1.4.1' );	
}
add_action( 'wp_enqueue_scripts', 'db_replace_core_jquery_version' );