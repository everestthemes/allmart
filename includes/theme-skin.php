<?php
/**
 * online-store: Theme Skins *
 *
 * @package online-store
 * @since online-store 1.0.0
 */

if ( ! function_exists( 'onlinestore_skin_scroll_to_top' ) ) :

	/**
	 * Enqueue Theme Styles and js.
	 */
	function onlinestore_skin_scroll_to_top() {
		?>

		<a href="#" class="op-scroll-to-top scroll-progress">
			<span class="scroll-icon">
				<i class="bi bi-chevron-up"></i>
			</span>
		</a>

		<?php
	}

endif;
add_action( 'wp_body_open', 'onlinestore_skin_scroll_to_top' );
