<?php
/**
 * Title: 404 Page
 * Slug: allmart/error
 * Categories: allmart
 *
 * @package allmart
 */

?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Main Content"},"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"color":"var:preset|color|border"},"bottom":{"color":"var:preset|color|border"},"left":{"color":"var:preset|color|border"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-color:var(--wp--preset--color--border);border-bottom-color:var(--wp--preset--color--border);border-left-color:var(--wp--preset--color--border)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"90"} -->
<h1 class="wp-block-heading has-text-align-center has-90-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( '404', 'allmart' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Oops! That page can\'t be found.', 'allmart' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-default","backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","fontSize":"18"} -->
<p class="has-text-align-center has-18-font-size"><?php esc_html_e( 'We\'re really sorry but we can\'t seem to find the page you were looking for.', 'allmart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:button {"style":{"border":{"radius":"12px"}}} -->
<div class="wp-block-button"><a href="<?php echo esc_url( home_url() ); ?>" class="wp-block-button__link wp-element-button" style="border-radius:12px"><?php esc_html_e( 'Go to Homepage', 'allmart' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
