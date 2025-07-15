<?php

/**
 * allmart: Block styles register *
 *
 * @package allmart
 * @since allmart 1.0.0
 */
function allmart_register_block_styles() {
	$block_styles = array(
		array(
			'block' => 'core/separator',
			'name'  => 'dotted',
			'label' => esc_html__( 'Dotted', 'allmart' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-zoom-effect',
			'label' => esc_html__( 'Zoom Effect', 'allmart' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-slide-effect',
			'label' => esc_html__( 'Slide Effect', 'allmart' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-rotate-effect',
			'label' => esc_html__( 'Rotate Effect', 'allmart' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-shine-effect',
			'label' => esc_html__( 'Shine Effect', 'allmart' ),
		),
		array(
			'block' => 'core/categories',
			'name'  => 'inline-terms',
			'label' => esc_html__( 'Inline', 'allmart' ),
		),
	);

	foreach ( $block_styles as $style ) {
		register_block_style(
			$style['block'],
			array(
				'name'  => $style['name'],
				'label' => $style['label'],
			)
		);
	}
}
add_action( 'init', 'allmart_register_block_styles' );
