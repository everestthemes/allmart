<?php
/**
 * Title: Sidebar
 * Slug: allmart/sidebar
 * Categories: allmart
 *
 * @package allmart
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Search', 'allmart' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","style":{"border":{"radius":"12px"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Recent Posts', 'allmart' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":3,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"format":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"20"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:paragraph -->
<p>/</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Recommended Topic', 'allmart' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"showEmpty":true,"fontSize":"16"} /--></div>
<!-- /wp:group -->
