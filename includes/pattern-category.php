<?php
/**
 * allmart: Block Patterns *
 *
 * @package allmart
 * @since allmart 1.0.0
 */

add_action( 'init', 'allmart_remove_core_block_patterns', 9 );
/**
 * Removes core block patterns.
 *
 * @since allmart 1.0.0
 *
 * @return void
 */
function allmart_remove_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

/**
 * Registers block patterns and categories. *
 *
 * @since allmart 1.0.0
 */
function allmart_register_block_patterns() {
	$block_pattern_categories = array(
		'allmart' => array( 'label' => __( 'allmart', 'allmart' ) ),
	);

	$block_pattern_categories = apply_filters( 'allmart_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'allmart_register_block_patterns', 8 );
