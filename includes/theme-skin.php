<?php
/**
 * allmart: Theme Skins *
 *
 * @package allmart
 * @since allmart 1.0.0
 */

if ( ! function_exists( 'allmart_skin_scroll_to_top' ) ) :

	/**
	 * Enqueue Theme Styles and js.
	 */
	function allmart_skin_scroll_to_top() {
		?>

		<a href="#" class="op-scroll-to-top scroll-progress">
			<span class="scroll-icon">
				<i class="bi bi-chevron-up"></i>
			</span>
		</a>

		<?php
	}

endif;
add_action( 'wp_body_open', 'allmart_skin_scroll_to_top' );
