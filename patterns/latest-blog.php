<?php
/**
 * Title: Latest News & Articles
 * Slug: onlinestore/latest-blog
 * Categories: onlinestore
 *
 * @package onlinestore
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Latest Blog "},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:32px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Our Latest News &amp; Articles', 'onlinestore' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"12px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:12px"><?php esc_html_e( 'View All Articles', 'onlinestore' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"grid","columnCount":"4","minimumColumnWidth":null}} -->
<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":264,"minHeightUnit":"px","customGradient":"linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0) 57%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:264px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0) 57%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"},"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:24px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"textAlign":"left","showAvatar":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|muted-foreground"}}}},"textColor":"muted-foreground"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}}},"textColor":"muted"} -->
<p class="has-muted-color has-text-color has-link-color">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|muted-foreground"}}}},"textColor":"muted-foreground"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"20"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
