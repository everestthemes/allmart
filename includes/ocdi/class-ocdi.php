<?php
/**
 * Defines the demo content files for One Click Demo Import.
 *
 * This function provides an array of import configuration used by the
 * One Click Demo Import (OCDI) plugin to import demo content such as:
 * - XML content (pages, posts, media)
 * - Widgets configuration
 * - Customizer settings
 * - Redux options
 * - Preview image and URL
 *
 * @package online-store
 * @return array List of demo import configuration settings.
 */

if ( ! function_exists( 'onlinestore_ocdi_import_files' ) ) {
	/**
	 * OCDI Import Files
	 *
	 * @return array[]
	 */
	function onlinestore_ocdi_import_files() {

			$upload_dir = wp_upload_dir();
			$demo_dir   = trailingslashit( $upload_dir['basedir'] ) . 'demo-import/';
			$xml_path   = $demo_dir . 'content.xml';

			// If local file doesn't exist, download from GitHub.
		if ( ! file_exists( $xml_path ) ) {
			// Create directory if it doesn't exist.
			if ( ! wp_mkdir_p( $demo_dir ) ) {
				error_log( '[OCDI] Failed to create directory: ' . $demo_dir );
				return array();
			}

			// GitHub raw URL.
			$remote_url = 'https://raw.githubusercontent.com/everestthemes/demo-test/main/contents.xml';
			$response   = wp_remote_get(
				$remote_url,
				array(
					'timeout' => 30,
					'headers' => array(
						'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
					),
				)
			);

			if ( is_wp_error( $response ) ) {
				error_log( '[OCDI] Failed to download XML from GitHub: ' . $remote_url . ' Error: ' . $response->get_error_message() );
				return array();
			}

			$response_code = wp_remote_retrieve_response_code( $response );
			if ( $response_code !== 200 ) {
				error_log( '[OCDI] Invalid response code ' . $response_code . ' from GitHub: ' . $remote_url );
				return array();
			}

			$body = wp_remote_retrieve_body( $response );
			if ( empty( $body ) ) {
				error_log( '[OCDI] Empty response body from GitHub: ' . $remote_url );
				return array();
			}

			// Check for HTML content (to avoid GitHub webpage).
			if ( strpos( $body, '<html' ) !== false ) {
				error_log( '[OCDI] GitHub URL returned HTML instead of XML: ' . $remote_url );
				return array();
			}

			// Save the file locally.
			if ( file_put_contents( $xml_path, $body ) === false ) {
				error_log( '[OCDI] Failed to save XML file to: ' . $xml_path );
				return array();
			}

			// Set file permissions.
			chmod( $xml_path, 0644 );
		}

			// Verify the file exists.
		if ( ! file_exists( $xml_path ) ) {
			error_log( '[OCDI] Local XML file not found after processing: ' . $xml_path );
			return array();
		}

			return array(
				array(
					'import_file_name'         => 'Online Store Demo',
					'categories'               => array( 'online-store' ),
					'local_import_file'        => $xml_path,
					'import_preview_image_url' => trailingslashit( get_template_directory_uri() ) . 'includes/ocdi/demo/screenshot.png',
					'preview_url'              => 'https://ecommerce.everestthemes.com/online-store/',
				),
			);
	}
}

add_filter( 'ocdi/import_files', 'onlinestore_ocdi_import_files' );


/**
 * Register Plugins for Demo Import.
 *
 * @param array $plugins The list of plugins.
 * @return array
 */
function onlinestore_ocdi_register_plugins( $plugins ) {

	// Required: List of plugins used by all theme demos.
	$theme_plugins = array(
		array( // A WordPress.org plugin repository example.
			'name'     => 'WooCommerce', // Name of the plugin.
			'slug'     => 'woocommerce', // Plugin slug - the same as on WordPress.org plugin repository.
			'required' => true, // If the plugin is required or not.
		),
	);

	return array_merge( $plugins, $theme_plugins );
}


add_filter( 'ocdi/register_plugins', 'onlinestore_ocdi_register_plugins' );



if ( ! function_exists( 'onlinestore_replace_old_urls_in_content' ) ) {
	/**
	 * Replace old URLs in content.
	 *
	 * @param mixed $selected Selected import file.
	 * @return void
	 */
	function onlinestore_replace_old_urls_in_content( $selected ) {
		if ( 'Online Store Demo' !== $selected['import_file_name'] ) {
			return;
		}

		$old_url = 'https://ecommerce.everestthemes.com/online-store';
		$new_url = home_url();

		$all_pages = get_posts(
			array(
				'post_type'      => 'page',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			)
		);

		$navigation = get_posts(
			array(
				'post_type'      => 'wp_navigation',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			)
		);

		$all_posts = array_merge( $all_pages, $navigation );

		// Replace content's URL's.
		if ( is_array( $all_posts ) && ! empty( $all_posts ) ) {
			foreach ( $all_posts as $post ) {
				if ( 'page' === $post->post_type && 'home' === $post->post_name && 'publish' === $post->post_status ) {
					$shop_page     = get_page_by_title( 'Shop' );
					$cart_page     = get_page_by_title( 'Cart' );
					$checkout_page = get_page_by_title( 'Checkout' );
					$myaccount_page = get_page_by_title( 'My account' );

					update_option( 'show_on_front', 'page' );
					update_option( 'page_on_front', $post->ID );

					if ( $shop_page && $cart_page && $checkout_page && $myaccount_page ) {
						update_option( 'woocommerce_shop_page_id', $shop_page->ID );
						update_option( 'woocommerce_cart_page_id', $cart_page->ID );
						update_option( 'woocommerce_checkout_page_id', $checkout_page->ID );
						update_option( 'woocommerce_myaccount_page_id', $myaccount_page->ID );
					}
				}

				$content = $post->post_content;
				if ( strpos( $content, $old_url ) !== false ) {
					$content = str_replace( $old_url, $new_url, $content );

					wp_update_post(
						array(
							'ID'           => $post->ID,
							'post_content' => $content,
						)
					);
				}
			}
		}

		// Replace navigation menu's URL's.
		$menu_items = get_posts(
			array(
				'post_type'      => 'navigation',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			)
		);

		if ( is_array( $menu_items ) && ! empty( $menu_items ) ) {

			foreach ( $menu_items as $item ) {

				$type = get_post_meta( $item->ID, '_menu_item_type', true );

				// only process custom link.
				if ( 'custom' === $type ) {
					$url = get_post_meta( $item->ID, '_menu_item_url', true );
					if ( $url && strpos( $url, $old_url ) !== false ) {
						$new = str_replace( $old_url, $new_url, $url );
						update_post_meta( $item->ID, '_menu_item_url', esc_url_raw( $new ) );
					}
				}
				$url = get_post_meta( $item->ID, '_menu_item_url', true );
				if ( $url && strpos( $url, $old_url ) !== false ) {
					$updated_url = str_replace( $old_url, $new_url, $url );
					update_post_meta( $item->ID, '_menu_item_url', esc_url_raw( $updated_url ) );
				}
			}
		}
	}
}
add_action( 'ocdi/after_import', 'onlinestore_replace_old_urls_in_content' );



if ( ! function_exists( 'onlinestore_delete_default_woocommerce_pages' ) ) {
	/**
	 * Delete default wooCommerce pages.
	 *
	 * @param array $selected Selected import file.
	 *
	 * @return void
	 */
	function onlinestore_delete_default_woocommerce_pages( $selected ) {
		if ( 'Online Store Demo' !== $selected['import_file_name'] ) {
			return;
		}

		$pages_to_delete = array( 'shop', 'cart', 'checkout', 'my-account' );

		foreach ( $pages_to_delete as $slug ) {
			$page = get_page_by_path( $slug );
			if ( $page && 'page' === $page->post_type ) {
				wp_delete_post( $page->ID, true ); // true = force delete, bypass trash
			}
		}
	}
}
add_action( 'ocdi/before_content_import', 'onlinestore_delete_default_woocommerce_pages' );
