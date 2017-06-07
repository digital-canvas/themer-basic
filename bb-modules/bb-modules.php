<?php
define( 'TB_FL_MODULE_CUSTOM_DIR', plugin_dir_path( __FILE__ ) );
define( 'TB_FL_MODULE_CUSTOM_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
function themer_basic_fl_load_module_custom_modules() {
	if ( class_exists( 'FLBuilder' ) ) {
		require_once __DIR__ . '/faq/faq.php';
		require_once __DIR__ . '/quote/quote.php';
		require_once __DIR__ . '/simple-button/simple-button.php';
	}
}

add_action( 'init', 'themer_basic_fl_load_module_custom_modules' );
