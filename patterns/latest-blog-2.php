<?php
/**
 * Title: Latest News & Articles 2
 * Slug: online-store/latest-blog-2
 * Categories: online-store
 *
 * @package online-store
 */
?>
<!-- wp:group {"metadata":{"name":"Blog Post"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"0"}},"color":{"gradient":"linear-gradient(180deg,rgb(238,238,238) 0%,rgb(255,255,255) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(180deg,rgb(238,238,238) 0%,rgb(255,255,255) 100%);padding-top:var(--wp--preset--spacing--x-large);padding-bottom:0"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left","className":"op-animated animate__fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"18"} -->
<p class="has-text-align-left op-animated animate__fadeInUp has-primary-color has-text-color has-link-color has-18-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Blog Post', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"op-animated animate__fadeInUp","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group op-animated animate__fadeInUp"><!-- wp:image {"id":418,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pet-pawz-icon.png" alt="" class="wp-image-418"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e( 'Our Latest News & Articles', 'online-store' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="font-style:normal;font-weight:600;flex-basis:33.33%"><!-- wp:buttons {"style":{"border":{"radius":"100px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons" style="border-radius:100px"><!-- wp:button {"textAlign":"center","style":{"border":{"radius":"100px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button" style="border-radius:100px"><?php esc_html_e( 'View All Articles', 'online-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","className":"image-hover-zoom-effect","style":{"dimensions":{"aspectRatio":"16/9"},"border":{"radius":"8px"},"spacing":{"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left image-hover-zoom-effect" style="border-radius:8px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"primary"} /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"fontSize":"24"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e( 'No Blog Post Found..', 'online-store' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
