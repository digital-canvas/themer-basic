<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'ThemerBasic.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'Customizer.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'FontList.php';

$themerbasic = new ThemerBasic();

add_action( 'wp_enqueue_scripts', 'themerbasic_styles' );
/**
 * Add theme stylesheet
 */
function themerbasic_styles() {
	wp_enqueue_style( 'themerbasic', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'themerbasic_scripts' );

function themerbasic_scripts() {
	// Replace jquery with newer version
	wp_deregister_script( 'jquery' );
	wp_register_script(
		'jquery',
		get_template_directory_uri() . '/assets/jquery.min.js',
		array(),
		'2.2.4',
		true
	);
	// Remove the jquery loader fallback as this can cause issues with autoptimize or other js combiners
	remove_action( 'wp_footer', 'FLBuilder::include_jquery' );

	wp_deregister_style( 'font-awesome' );
	wp_register_style(
		'font-awesome',
		get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css',
		array(),
		'4.7.0'
	);
}

add_filter( 'autoptimize_filter_noptimize', 'pagebuilder_noptimize', 10, 0 );
/**
 * Only use combined and minified css/js for non-logged in users
 * @return bool
 */
function pagebuilder_noptimize() {
	if ( is_user_logged_in() ) {
		return true;
	} else {
		return false;
	}
}


