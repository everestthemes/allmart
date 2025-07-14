<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package allmart
 * @since 1.0.0
 */

/**
 * allmart Theme Support
 */
function allmart_theme_support() {

	load_theme_textdomain( 'allmart', get_template_directory() . '/languages' );

	// Support Post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Support responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Support Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Support Editor Styles.
	add_editor_style( get_template_directory_uri() . '/assets/css/editor-styles.css' );
}
add_action( 'after_setup_theme', 'allmart_theme_support' );


/**
 * Enqueue theme styles and scripts.
 */
require_once get_theme_file_path( 'includes/assets.php' );

/**
 * Pattern category register.
 */
require_once get_theme_file_path( 'includes/pattern-category.php' );

/**
 * Register Block Style
 */
 require_once get_theme_file_path( 'includes/block-style.php' );

/**
 * One Click Demo Import
 */
require_once get_theme_file_path( 'includes/ocdi/class-ocdi-notice.php' );
require_once get_theme_file_path( 'includes/ocdi/class-ocdi.php' );

/**
 * Theme Skins
 */
require_once get_theme_file_path( 'includes/theme-skin.php' );
