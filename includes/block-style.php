<?php

/**
 * online-store: Block styles register *
 *
 * @package online-store
 * @since online-store 1.0.0
 */
function onlinestore_register_block_styles() {
	$block_styles = array(
		array(
			'block' => 'core/separator',
			'name'  => 'dotted',
			'label' => esc_html__( 'Dotted', 'online-store' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-zoom-effect',
			'label' => esc_html__( 'Zoom Effect', 'online-store' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-slide-effect',
			'label' => esc_html__( 'Slide Effect', 'online-store' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-rotate-effect',
			'label' => esc_html__( 'Rotate Effect', 'online-store' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-shine-effect',
			'label' => esc_html__( 'Shine Effect', 'online-store' ),
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
add_action( 'init', 'onlinestore_register_block_styles' );
