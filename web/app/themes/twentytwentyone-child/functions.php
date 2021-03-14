<?php

/**
 * Enqueue child theme styles, overriding parent
 */
function twentytwentyone_styles() {
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style',
			get_stylesheet_directory_uri() . '/assets/css/ie.css', array(),
			wp_get_theme()->get( 'Version' ) );
	} else {
		wp_enqueue_style( 'child-style', get_stylesheet_uri(),
			array( 'twenty-twenty-one-style' ),
			wp_get_theme()->get( 'Version' ) );
	}
}

add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles' );
