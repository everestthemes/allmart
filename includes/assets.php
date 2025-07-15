<?php
/**
 * Assets Enqueue
 *
 * This file handles the enqueuing of styles and scripts for the OnlineStore WordPress block theme.
 * It includes CSS and JavaScript files for theme styles, WooCommerce, Bootstrap icons, Slick slider,
 * and other vendor libraries, ensuring proper asset loading for the theme.
 *
 * @package OnlineStore
 * @since 1.0.0
 */

if ( ! function_exists( 'allmart_styles' ) ) :

	/**
	 * Enqueue Theme Styles and JS.
	 */
	function allmart_styles() {

		$version = wp_get_theme()->get( 'Version' );

		// Bootstrap Font.
		wp_enqueue_style( 'bootstrap-icon', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap-icons.css', array(), $version, 'all' );

		// Theme Styles.
		wp_enqueue_style( 'allmart-styles', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

		// Core Block Styles.
		wp_enqueue_style( 'allmart-styles-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array(), $version, 'all' );

		// Woocommerce Styles.
		wp_enqueue_style( 'allmart-styles-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), $version, 'all' );

		// Animate CSS.
		wp_enqueue_style( 'op-animate-style', get_template_directory_uri() . '/assets/vendors/animatecss/animate.min.css', array(), $version, 'all' );

		// Animate JS.
		wp_enqueue_script( 'op-scrollanimate-js', get_template_directory_uri() . '/assets/js/scrollanimate.js', array( 'jquery' ), $version, true );

		// Theme Skin.
		wp_enqueue_script( 'op-themeskin-js', get_template_directory_uri() . '/assets/js/theme-skin.js', array( 'jquery' ), $version, true );

		// Woocommerce JS.
		wp_enqueue_script( 'op-woocommerce-js', get_template_directory_uri() . '/assets/js/op-woo.js', array( 'jquery' ), $version, true );

		// Slick Styles.
		wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick/slick.css', array(), $version, 'all' );

		// Slick JS.
		wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/vendors/slick/js/slick.min.js', array( 'jquery' ), $version, true );

		// Custom Slider.
		wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/assets/js/custom-slider.js', array( 'jquery' ), $version, true );
	}

endif;
add_action( 'wp_enqueue_scripts', 'allmart_styles' );


if ( ! function_exists( 'allmart_admin_script' ) ) :

	function allmart_admin_script() {
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_script( 'admin-slick-slider', get_template_directory_uri() . '/assets/js/custom-slider.js', array( 'jquery' ), $version, true );
	}

endif;
add_action( 'admin_enqueue_scripts', 'allmart_admin_script' );
