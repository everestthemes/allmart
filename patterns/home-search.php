<?php
/**
 * Title: Home Search
 * Slug: allmart/home-search
 * Categories: allmart
 * Keywords: Home Search
 *
 * @package  allmart
 */

?>
<!-- wp:group {"metadata":{"name":"Search Section"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"color":{"background":"#fffaf5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#fffaf5;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Looking for something else?', 'allmart' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","query":{"post_type":"product"},"className":"is-op-button-style-2","style":{"border":{"radius":"8px"}},"namespace":"woocommerce/product-search"} /-->

<!-- wp:categories {"taxonomy":"product_cat","showEmpty":true,"className":"is-style-inline-terms"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
