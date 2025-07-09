<?php
/**
 * online-store: Block Patterns *
 *
 * @package online-store
 * @since online-store 1.0.0
 */

add_action( 'init', 'onlinestore_remove_core_block_patterns', 9 );
/**
 * Removes core block patterns.
 *
 * @since online-store 1.0.0
 *
 * @return void
 */
function onlinestore_remove_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

/**
 * Registers block patterns and categories. *
 *
 * @since online-store 1.0.0
 */
function onlinestore_register_block_patterns() {
	$block_pattern_categories = array(
		'online-store' => array( 'label' => __( 'online-store', 'online-store' ) ),
	);

	$block_pattern_categories = apply_filters( 'onlinestore_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'onlinestore_register_block_patterns', 8 );
