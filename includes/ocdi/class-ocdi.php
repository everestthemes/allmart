<?php
/**
 * Defines the demo content files for One Click Demo Import.
 *
 * @package allmart
 */

if ( ! function_exists( 'allmart_ocdi_import_files' ) ) {
	function allmart_ocdi_import_files() {
		$upload_dir = wp_upload_dir();
		$demo_dir   = trailingslashit( $upload_dir['basedir'] ) . 'demo-import/';
		$xml_path   = $demo_dir . 'content.xml';

		if ( ! file_exists( $xml_path ) ) {
			if ( ! wp_mkdir_p( $demo_dir ) ) {
				return array();
			}

			$remote_url = 'https://raw.githubusercontent.com/everestthemes/demo-test/refs/heads/main/allmart-contents.xml';

			$response = wp_remote_get(
				$remote_url,
				array(
					'timeout' => 30,
					'headers' => array(
						'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
					),
				)
			);

			if ( is_wp_error( $response ) ) {
				return array();
			}

			$response_code = wp_remote_retrieve_response_code( $response );

			if ( 200 !== $response_code ) {
				return array();
			}

			$body = wp_remote_retrieve_body( $response );
			if ( empty( $body ) || strpos( $body, '<html' ) !== false ) {
				return array();
			}

			if ( file_put_contents( $xml_path, $body ) === false ) {
				return array();
			}

			chmod( $xml_path, 0644 );
		}

		if ( ! file_exists( $xml_path ) ) {
			return array();
		}

		return array(
			array(
				'import_file_name'         => 'All Mart Demo',
				'categories'               => array( 'allmart' ),
				'local_import_file'        => $xml_path,
				'import_preview_image_url' => trailingslashit( get_template_directory_uri() ) . 'includes/ocdi/demo/screenshot.png',
				'preview_url'              => 'https://ecommerce.everestthemes.com/allmart/',
			),
		);
	}
}

add_filter( 'ocdi/import_files', 'allmart_ocdi_import_files' );

function allmart_ocdi_register_plugins( $plugins ) {
	$theme_plugins = array(
		array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => true,
		),
		array(
			'name'     => 'YITH WooCommerce Wishlist',
			'slug'     => 'yith-woocommerce-wishlist',
			'required' => true,
		),
	);

	return array_merge( $plugins, $theme_plugins );
}

add_filter( 'ocdi/register_plugins', 'allmart_ocdi_register_plugins' );

if ( ! function_exists( 'allmart_delete_default_woocommerce_pages' ) ) {
	function allmart_delete_default_woocommerce_pages( $selected ) {
		if ( 'All Mart Demo' !== $selected['import_file_name'] ) {
			return;
		}

		$pages_to_delete = array( 'shop', 'cart', 'checkout', 'my-account' );

		foreach ( $pages_to_delete as $slug ) {
			$page = get_page_by_path( $slug );
			if ( $page && 'page' === $page->post_type ) {
				wp_delete_post( $page->ID, true );
			}
		}
	}
}
add_action( 'ocdi/before_content_import', 'allmart_delete_default_woocommerce_pages' );

if ( ! function_exists( 'allmart_replace_old_urls_in_content' ) ) {
	function allmart_replace_old_urls_in_content( $selected ) {
		if ( 'All Mart Demo' !== $selected['import_file_name'] ) {
			return;
		}

		$old_url = 'https://ecommerce.everestthemes.com/allmart';
		$new_url = home_url();

		// Process Pages.
		$all_pages = get_posts(
			array(
				'post_type'      => 'page',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			)
		);

		if ( is_array( $all_pages ) && ! empty( $all_pages ) ) {
			foreach ( $all_pages as $page ) {
				if ( 'page' === $page->post_type && 'home' === $page->post_name ) {
					update_option( 'show_on_front', 'page' );
					update_option( 'page_on_front', $page->ID );

					$shop_page      = get_page_by_title( 'Shop' );
					$cart_page      = get_page_by_title( 'Cart' );
					$checkout_page  = get_page_by_title( 'Checkout' );
					$myaccount_page = get_page_by_title( 'My account' );

					if ( $shop_page && $cart_page && $checkout_page && $myaccount_page ) {
						update_option( 'woocommerce_shop_page_id', $shop_page->ID );
						update_option( 'woocommerce_cart_page_id', $cart_page->ID );
						update_option( 'woocommerce_checkout_page_id', $checkout_page->ID );
						update_option( 'woocommerce_myaccount_page_id', $myaccount_page->ID );
					}
				}

				$content = $page->post_content;
				if ( strpos( $content, $old_url ) !== false ) {
					wp_update_post(
						array(
							'ID'           => $page->ID,
							'post_content' => str_replace( $old_url, $new_url, $content ),
						)
					);
				}
			}
		}

		// Get Navigation Posts.
		$navigation_posts = get_posts(
			array(
				'post_type'      => 'wp_navigation',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			)
		);

		$primary_nav  = null;
		$vertical_nav = null;

		foreach ( $navigation_posts as $nav_post ) {
			$title_lower = strtolower( $nav_post->post_title );

			if ( strpos( $title_lower, 'vertical' ) !== false ) {
				$vertical_nav = $nav_post;

			} elseif ( strpos( $title_lower, 'primary' ) !== false || strpos( $title_lower, 'main' ) !== false || strpos( $title_lower, 'menu' ) !== false ) {
				$primary_nav = $nav_post;

			} elseif ( ! $primary_nav ) {
				$primary_nav = $nav_post;

			}

			$nav_content = $nav_post->post_content;
			$nav_content = preg_replace( '/u0026amp;/i', '&', $nav_content );

			if ( strpos( $nav_content, $old_url ) !== false ) {
				$nav_content = str_replace( $old_url, $new_url, $nav_content );
				wp_update_post(
					array(
						'ID'           => $nav_post->ID,
						'post_content' => $nav_content,
					)
				);
			}
		}

		// Process Template Parts - NEW APPROACH FOR THEME FILES.
		if ( $primary_nav || $vertical_nav ) {
			// Use WordPress Block Template API to get all templates including theme files.
			$default_template_parts = get_posts(
				array( 'post_type' => 'wp_template_part' )
			);

			$template_parts = get_posts(
				array(
					'post_type' => 'wp_template_part',
					'tax_query' => array(
						array(
							'taxonomy' => 'wp_theme',
							'field'    => 'name',
							'terms'    => get_stylesheet(),
						),
					),
				)
			);

			foreach ( $template_parts as $template_part ) {
				// Only process header template parts.
				if ( false === strpos( $template_part->post_name, 'header' ) ) {
					continue;
				}

				$content = $template_part->post_content;
				$blocks  = parse_blocks( $content );

				// Update navigation blocks.
				$updated_blocks = allmart_update_navigation_blocks_v2( $blocks, $primary_nav, $vertical_nav );
				$new_content    = serialize_blocks( $updated_blocks );

				// Check if content actually changed.
				if ( $content === $new_content ) {
					continue;
				}

				// CRITICAL: Create or update database version
				// This works for both theme files (wp_id = 0) and database entries.
				$post_data = array(
					'post_content' => $new_content,
				);

				if ( $template_part->ID > 0 ) {
					// Update existing database entry.
					$post_data['ID'] = $template_part->ID;
					$post_id         = wp_update_post( $post_data );
				} else {
					// Create NEW database entry (this overrides the theme file).
					$post_id = wp_insert_post( $post_data );

					if ( $post_id && ! is_wp_error( $post_id ) ) {
						// Set the template area taxonomy.
						wp_set_object_terms( $post_id, $template_part->area, 'wp_template_part_area' );

						// Set theme taxonomy.
						wp_set_object_terms( $post_id, $template_part->theme, 'wp_theme' );
					} else {
						continue;
					}
				}

				// Clear caches for this specific template.
				clean_post_cache( $post_id );
				wp_cache_delete( 'wp_template_part|' . $template_part->slug, 'themes' );

				// Verify the change.
				$verify_template = get_block_template( $template_part->id, 'wp_template_part' );

				if ( $verify_template && $verify_template->wp_id > 0 ) {
					error_log( '[OCDI] ✓ Verification: Template now has wp_id=' . $verify_template->wp_id );
				}
			}
		}

		// Aggressive cache clearing.
		allmart_nuclear_cache_clear();
	}
}

add_action( 'ocdi/after_import', 'allmart_replace_old_urls_in_content' );

function allmart_update_navigation_blocks_v2( $blocks, $primary_nav, $vertical_nav, $depth = 0, &$nav_counter = 0 ) {
	foreach ( $blocks as &$block ) {
		if ( 'core/navigation' === $block['blockName'] ) {
			++$nav_counter;

			$current_ref = isset( $block['attrs']['ref'] ) ? $block['attrs']['ref'] : null;
			$class_name  = isset( $block['attrs']['className'] ) ? $block['attrs']['className'] : '';

			if ( ! isset( $block['attrs'] ) ) {
				$block['attrs'] = array();
			}

			// Method 1: By className.
			if ( ! empty( $class_name ) ) {
				if ( strpos( $class_name, 'vertical' ) !== false && $vertical_nav ) {
					$block['attrs']['ref'] = (int) $vertical_nav->ID;
					continue;
				} elseif ( ( strpos( $class_name, 'primary' ) !== false ) && $primary_nav ) {
					$block['attrs']['ref'] = (int) $primary_nav->ID;
					continue;
				}
			}

			// Method 2: By position (only at top level).
			if ( 0 === $depth ) {
				if ( 1 === $nav_counter && $primary_nav ) {
					$block['attrs']['ref'] = (int) $primary_nav->ID;
				} elseif ( 2 === $nav_counter && $vertical_nav ) {
					$block['attrs']['ref'] = (int) $vertical_nav->ID;
				}
			}
		}

		if ( ! empty( $block['innerBlocks'] ) ) {
			$block['innerBlocks'] = allmart_update_navigation_blocks_v2(
				$block['innerBlocks'],
				$primary_nav,
				$vertical_nav,
				$depth + 1,
				$nav_counter
			);
		}
	}

	return $blocks;
}

function allmart_nuclear_cache_clear() {
	global $wpdb;

	wp_cache_flush();
	$wpdb->query( "DELETE FROM {$wpdb->options} WHERE option_name LIKE '%_transient_%'" );
	delete_transient( 'theme_roots' );
	flush_rewrite_rules( true );

	if ( function_exists( 'opcache_reset' ) ) {
		opcache_reset();
	}
}

function allmart_sync_template_part_with_pattern_content( $part_slug, $part_title, $part_area = 'uncategorized' ) {
	// 1. Define the path to the template part file
	$file_path = get_theme_file_path( "parts/{$part_slug}.html" );

	if ( ! file_exists( $file_path ) ) {
		return;
	}

	// 2. Read the file content (which contains the pattern reference)
	$file_content = file_get_contents( $file_path );

	// 3. Extract the pattern slug using regex
	if ( preg_match( '/<!--\s+wp:pattern\s+{"slug":"([^"]+)"}\s+\/-->/', $file_content, $matches ) ) {
		$pattern_slug = $matches[1];

		// 4. Get the actual rendered content of the pattern
		$registry = WP_Block_Patterns_Registry::get_instance();
		$pattern  = $registry->get_registered( $pattern_slug );

		if ( $pattern && isset( $pattern['content'] ) ) {
			// 5. Check if the template part already exists in the database
			$existing_part = get_posts(
				array(
					'posts_per_page' => 1,
					'post_type'      => 'wp_template_part',
					'name'           => $part_slug,
					'post_status'    => array( 'publish', 'auto-draft' ),
					'fields'         => 'ids',
					'no_found_rows'  => true,
					'tax_query'      => array(
						array(
							'taxonomy' => 'wp_theme',
							'field'    => 'name',
							'terms'    => get_stylesheet(),
						),
					),
				)
			);

			$post_data = array(
				'post_type'    => 'wp_template_part',
				'post_status'  => 'publish', // Make it immediately available.
				'post_title'   => $part_title,
				'post_name'    => $part_slug,
				'post_content' => $pattern['content'],
				'tax_input'    => array(
					'wp_template_part_area' => $part_area,
					'wp_theme'              => get_stylesheet(),
				),
			);

			// 6. Insert or update the database entry
			if ( empty( $existing_part ) ) {
				wp_insert_post( $post_data );
			} else {
				// Optionally uncomment this section if you want to force an update over user edits.
				$post_data['ID'] = $existing_part[0];
				wp_update_post( $post_data );
			}
		}
	}
}

// --- Sync header with database When Theme activated ---
add_action( 'after_switch_theme', 'sync_allmart_parts_on_activation' );

function sync_allmart_parts_on_activation() {
	allmart_sync_template_part_with_pattern_content( 'header', 'Site Header with Pattern', 'header' );
}
