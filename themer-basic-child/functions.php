<?php

add_action( 'wp_enqueue_scripts', 'themerbasic_child_styles' );
/**
 * Add theme stylesheet
 *
 * One of the three
 */
function themerbasic_child_styles() {
	// Uncomment this to remove both the parent and child theme stylesheets
	//$stylesheets = 'none';

	// Uncomment this line to replace the parent theme stylesheet with this one
	// Use if you do not need the core styling
	//$stylesheets = 'child-only';

	// Uncomment this to add the child theme stylesheet and keep the parent theme styles
	// Use this if you have any css overrides in your child theme
	$stylesheets = 'parent-and-child';

	// Uncomment this to use only the parent stylesheet
	// Use this if you have no css overrides in your child theme
	//$stylesheets = 'parent-only';

	switch ( $stylesheets ) {
		case 'none':
			wp_dequeue_style( 'themerbasic' );
			break;
		case 'child-only':
			wp_enqueue_style( 'themerbasic', get_stylesheet_uri() );
			break;
		case 'parent-and-child':
			wp_enqueue_style( 'themerbasic', get_template_directory_uri() . '/style.css' );
			wp_enqueue_style( 'themerbasic-child', get_stylesheet_uri(), array( 'themerbasic' ) );
			break;
		case 'parent-only':
		default:
			wp_enqueue_style( 'themerbasic', get_template_directory_uri() . '/style.css' );
			break;
	}
}
