<?php

class ThemerBasic_Customizer {
	/**
	 * @var WP_Customize_Manager
	 */
	private $manager;

	/**
	 * Class Constructor
	 *
	 * @param WP_Customize_Manager $wp_manager
	 */
	public function __construct( $wp_manager ) {
		$this->manager = $wp_manager;
		$this->addTypographySettings();
	}

	/**
	 * @param WP_Customize_Manager $wp_manager
	 *
	 * @return ThemerBasic_Customizer
	 */
	public static function register( $wp_manager ) {
		return new self($wp_manager);
	}


	/**
	 * Adds font settings
	 */
	public function addTypographySettings() {
//		$this->manager->add_section( 'typography', array(
//			'title'    => 'Typography',
//			'priority' => 35,
//		) );
//		$this->manager->add_setting( 'typography_font_family', array(
//			'default' => 'Arial, Times, serif',
//		) );
//		$this->manager->add_control( 'typography_font_family', array(
//			'label'    => 'Font Family',
//			'section'  => 'typography',
//			'type'     => 'text',
//			'priority' => 1
//		) );
	}


}
