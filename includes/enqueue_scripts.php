<?php
/*
 *
 * * Enqueue scripts on Wesmplfyite
 *
 *  */

namespace SMPLFY\ramageflf;
function enqueue_ramageflf_frontend_scripts() {
	global $current_user;
	global $post;
	$current_user = wp_get_current_user();

	wp_register_script( 'smplfy-demo-frontend-script', SMPLFY_NAME_PLUGIN_URL . '/public/js/frontend.js', array( 'jquery' ), null, true );
	wp_register_style( 'smplfy-demo-frontend-styles', SMPLFY_NAME_PLUGIN_URL . '/public/css/frontend.css' );

	wp_enqueue_script( 'smplfy-demo-frontend-script' );

	wp_enqueue_style( 'smplfy-demo-frontend-styles' );

	wp_register_script( 'smplfy-gclid-cookie', SMPLFY_NAME_PLUGIN_URL . '/public/js/gclid-cookie.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'smplfy-gclid-cookie' );
}

add_action( 'wp_enqueue_scripts', 'SMPLFY\ramageflf\enqueue_ramageflf_frontend_scripts' );
