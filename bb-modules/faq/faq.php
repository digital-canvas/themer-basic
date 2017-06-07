<?php

/**
 * @class ThemerBasicFLFAQModule
 */
class ThemerBasicFLFAQModule extends FLBuilderModule {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct(
			[
				'name'          => __( 'FAQ', 'themer-basic' ),
				'description'   => __( 'FAQ Questions and Answers.', 'themer-basic' ),
				'category'      => __( 'Themer Basic', 'themer-basic' ),
				'dir'           => TB_FL_MODULE_CUSTOM_DIR . 'faq/',
				'url'           => TB_FL_MODULE_CUSTOM_URL . 'faq/',
				'editor_export' => true, // Defaults to true and can be omitted.
				'enabled'       => true, // Defaults to true and can be omitted.
			]
		);
	}
}

/**
 * Register the form with its fields
 */
FLBuilder::register_settings_form(
	'faq_field',
	[
		'title' => __( 'FAQ Field', 'themer-basic' ),
		'tabs'  => [
			'general' => [
				'title'    => __( 'General', 'themer-basic' ),
				'sections' => [
					'question' => [
						'title'  => __( 'Question', 'themer-basic' ),
						'fields' => [
							'question' => [
								'type'  => 'text',
								'label' => '',
							],
						],
					],
					'answer'   => [
						'title'  => __( 'Answer', 'themer-basic' ),
						'fields' => [
							'answer' => [
								'type'          => 'editor',
								'label'         => '',
								'media_buttons' => false,
								'rows'          => 4,
							],
						],
					],
				],
			],
		],
	]
);

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module(
	'ThemerBasicFLFAQModule',
	[
		'general' => [
			'title'    => __( 'General', 'themer-basic' ),
			'sections' => [
				'items' => [
					'title'  => __( 'Item', 'themer-basic' ),
					'fields' => [
						'items' => [
							'type'         => 'form',
							'label'        => __( 'Item', 'themer-basic' ),
							'form'         => 'faq_field',
							'preview_text' => 'question',
							'multiple'     => true,
						],
					],
				],
			],
		],
		'style'   => [
			'title'    => __( 'Style', 'themer-basic' ),
			'sections' => [
				'header' => [
					'title'  => __( 'Question', 'themer-basic' ),
					'fields' => [
						'header_font'             => [
							'type'    => 'font',
							'label'   => __( 'Font', 'themer-basic' ),
							'default' => [
								'family' => 'Default',
								'weight' => 'bold',
							],
						],
						'header_font_size'        => array(
							'type'    => 'select',
							'label'   => __( 'Font Size', 'themer-basic' ),
							'default' => 'default',
							'options' => array(
								'default' => __( 'Default', 'themer-basic' ),
								'custom'  => __( 'Custom', 'themer-basic' ),
							),
							'toggle'  => array(
								'custom' => array(
									'fields' => array( 'header_custom_font_size' ),
								),
							),
						),
						'header_custom_font_size' => array(
							'type'        => 'text',
							'label'       => __( 'Custom Font Size', 'themer-basic' ),
							'default'     => '20',
							'maxlength'   => '2',
							'size'        => '3',
							'description' => 'px',
						),
					],
				],
				'border' => [
					'title'  => __( 'Separator', 'themer-basic' ),
					'fields' => [
						'border_type'  => [
							'type'    => 'select',
							'label'   => __( 'Type', 'themer-basic' ),
							'default' => 'solid',
							'options' => [
								'none'   => __( 'None', 'themer-basic' ),
								'solid'  => __( 'Solid', 'themer-basic' ),
								'dashed' => __( 'Dashed', 'themer-basic' ),
								'double' => __( 'Double', 'themer-basic' ),
								'groove' => __( 'Groove', 'themer-basic' ),
								'ridge'  => __( 'Ridge', 'themer-basic' ),
								'inset'  => __( 'Inset', 'themer-basic' ),
								'outset' => __( 'Outset', 'themer-basic' ),
							],
							'preview' => [
								'type' => 'solid',
							],
						],
						'border_width' => [
							'type'        => 'text',
							'label'       => __( 'Width', 'themer-basic' ),
							'default'     => '1',
							'maxlength'   => '1',
							'size'        => '2',
							'description' => 'px',
						],
						'border_color' => [
							'type'       => 'color',
							'label'      => __( 'Color', 'themer-basic' ),
							'default'    => 'cccccc',
							'show_reset' => true,
							'show_alpha' => false,
						],
					],
				],
			],
		],
	]
);
