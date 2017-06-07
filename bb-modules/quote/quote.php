<?php

/**
 * @class ThemerBasicFLQuoteModule
 */
class ThemerBasicFLQuoteModule extends FLBuilderModule {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct(
			[
				'name'          => __( 'Quote', 'themer-basic' ),
				'description'   => __( 'Quote', 'themer-basic' ),
				'category'      => __( 'Themer Basic', 'themer-basic' ),
				'dir'           => TB_FL_MODULE_CUSTOM_DIR . 'quote/',
				'url'           => TB_FL_MODULE_CUSTOM_URL . 'quote/',
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
	'ThemerBasicFLQuoteModule',
	[
		'content' => [
			'title'    => __( 'Content', 'themer-basic' ),
			'sections' => [
				'quote'  => [
					'title'  => __( 'Quote', 'themer-basic' ),
					'fields' => [
						'quote' => [
							'type'          => 'editor',
							'label'         => '',
							'media_buttons' => false,
							'rows'          => 5,
						],
					],
				],
				'source' => [
					'title'  => __( 'Source', 'themer-basic' ),
					'fields' => [
						'source' => [
							'type'  => 'text',
							'label' => '',
						],
					],
				],
			],
		],
		'style'   => [
			'title'    => __( 'Style', 'themer-basic' ),
			'sections' => [
				'border' => [
					'title'  => __( 'Border', 'themer-basic' ),
					'fields' => [
						'border_type'  => [
							'type'    => 'select',
							'label'   => __( 'Border Type', 'themer-basic' ),
							'default' => 'left',
							'options' => [
								'left'  => __( 'Left', 'themer-basic' ),
								'right' => __( 'Right', 'themer-basic' ),
								'all'   => __( 'All', 'themer-basic' ),
								'none'  => __( 'None', 'themer-basic' ),
							],
						],
						'border_color' => [
							'type'       => 'color',
							'label'      => __( 'Border Color', 'themer-basic' ),
							'default'    => 'eeeeee',
							'show_reset' => true,
						],
					],
				],
				'quote'  => [
					'title'  => __( 'Quote Style', 'themer-basic' ),
					'fields' => [
						'quote_color' => [
							'type'       => 'color',
							'label'      => __( 'Color', 'themer-basic' ),
							'show_reset' => true,
						],
					],
				],
				'source' => [
					'title'  => __( 'Source Style', 'themer-basic' ),
					'fields' => [
						'source_alignment' => [
							'type'    => 'select',
							'label'   => __( 'Alignment', 'themer-basic' ),
							'default' => 'right',
							'options' => [
								'left'   => __( 'Left', 'themer-basic' ),
								'center' => __( 'Center', 'themer-basic' ),
								'right'  => __( 'Right', 'themer-basic' ),
							],
						],
						'source_color'     => [
							'type'       => 'color',
							'label'      => __( 'Color', 'themer-basic' ),
							'default'    => '777777',
							'show_reset' => true,
						],
					],
				],
			],
		],
	]
);
