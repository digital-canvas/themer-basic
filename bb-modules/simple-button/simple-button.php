<?php
/**
 *
 * @class ThemerBasicFLButtonModule
 */
class ThemerBasicFLButtonModule extends FLBuilderModule {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct(
			[
				'name'          => __( 'Button', 'themer-basic' ),
				'description'   => __( 'Button', 'themer-basic' ),
				'category'      => __( 'Themer Basic', 'themer-basic' ),
				'dir'           => TB_FL_MODULE_CUSTOM_DIR . 'simple-button/',
				'url'           => TB_FL_MODULE_CUSTOM_URL . 'simple-button/',
				'editor_export' => true, // Defaults to true and can be omitted.
				'enabled'       => true, // Defaults to true and can be omitted.
			]
		);
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module(
	'ThemerBasicFLButtonModule',
	[
		'general' => [
			'title'    => __( 'General', 'themer-basic' ),
			'sections' => [
				'general' => [
					'title'  => '',
					'fields' => [
						'text' => array(
							'type'        => 'text',
							'label'       => __( 'Text', 'themer-basic' ),
							'default'     => __( 'Click Here', 'themer-basic' ),
							'preview'     => array(
								'type'     => 'text',
								'selector' => '.button',
							),
							'connections' => array( 'string' ),
						),
					],
				],
				'link'    => [
					'title'  => __( 'Link', 'themer-basic' ),
					'fields' => [
						'link' => array(
							'type'        => 'link',
							'label'       => __( 'Link', 'themer-basic' ),
							'placeholder' => __( 'http://www.example.com', 'themer-basic' ),
							'preview'     => array(
								'type' => 'none',
							),
							'connections' => array( 'url' ),
						),
					],
				],
			],
		],
		'style'   => [
			'title'    => __( 'Style', 'themer-basic' ),
			'sections' => [
				'type'  => [
					'title'  => __( 'Type', 'themer-basic' ),
					'fields' => [
						'button_type' => [
							'type'    => 'select',
							'label'   => __( 'Button Type', 'themer-basic' ),
							'default' => 'solid',
							'options' => [
								'solid'   => __( 'Solid', 'themer-basic' ),
								'outline' => __( 'Outline', 'themer-basic' ),
							],
							'toggle'  => array(
								'solid'   => array(
									'fields' => array( 'solid_color' ),
								),
								'outline' => array(
									'fields' => array( 'outline_color' ),
								),
							),
						],
					],
				],
				'color' => [
					'title'  => __( 'Color', 'themer-basic' ),
					'fields' => [
						'solid_color'   => [
							'type'    => 'select',
							'label'   => __( 'Color', 'themer-basic' ),
							'default' => 'default',
							'options' => [
								'default' => __( 'Default', 'themer-basic' ),
								'blue'    => __( 'Blue', 'themer-basic' ),
								'green'   => __( 'Green', 'themer-basic' ),
								'red'     => __( 'Red', 'themer-basic' ),
								'yellow'  => __( 'Yellow', 'themer-basic' ),
								'orange'  => __( 'Orange', 'themer-basic' ),
								'teal'    => __( 'Teal', 'themer-basic' ),
								'pink'    => __( 'Pink', 'themer-basic' ),
								'purple'  => __( 'Purple', 'themer-basic' ),
								'gray'    => __( 'Gray', 'themer-basic' ),
								'white'   => __( 'Gray', 'themer-basic' ),
								'black'   => __( 'Gray', 'themer-basic' ),
							],
						],
						'outline_color' => [
							'type'    => 'select',
							'label'   => __( 'Color', 'themer-basic' ),
							'default' => 'default',
							'options' => [
								'default' => __( 'Default', 'themer-basic' ),
								'blue'    => __( 'Blue', 'themer-basic' ),
								'green'   => __( 'Green', 'themer-basic' ),
								'red'     => __( 'Red', 'themer-basic' ),
								'yellow'  => __( 'Yellow', 'themer-basic' ),
								'orange'  => __( 'Orange', 'themer-basic' ),
								'teal'    => __( 'Teal', 'themer-basic' ),
								'pink'    => __( 'Pink', 'themer-basic' ),
								'purple'  => __( 'Purple', 'themer-basic' ),
							],
						],
					],
				],
				'size'  => [
					'title'  => __( 'Size', 'themer-basic' ),
					'fields' => [
						'button_size'  => [
							'type'    => 'select',
							'label'   => __( 'Size', 'themer-basic' ),
							'default' => 'medium',
							'options' => [
								'small'  => __( 'Small', 'themer-basic' ),
								'medium' => __( 'Medium', 'themer-basic' ),
								'large'  => __( 'Large', 'themer-basic' ),
							],
						],
						'button_width' => [
							'type'    => 'select',
							'label'   => __( 'Width', 'themer-basic' ),
							'default' => 'default',
							'options' => [
								'default'   => __( 'Default', 'themer-basic' ),
								'wide'      => __( 'Wide', 'themer-basic' ),
								'extrawide' => __( 'Extra Wide', 'themer-basic' ),
								'block'     => __( 'Full Width', 'themer-basic' ),
							],
						],
					],
				],
				'shape' => [
					'title'  => __( 'Shape', 'themer-basic' ),
					'fields' => [
						'button_shape' => [
							'type'    => 'select',
							'label'   => __( 'Rounded Corners', 'themer-basic' ),
							'default' => 'default',
							'options' => [
								'default'   => __( 'Default', 'themer-basic' ),
								'round'     => __( 'Round', 'themer-basic' ),
								'rectangle' => __( 'Rectangle', 'themer-basic' ),
							],
						],
					],
				],
			],
		],
	]
);
