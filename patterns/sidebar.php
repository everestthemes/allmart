<?php
/**
 * Title: Sidebar
 * Slug: onlinestore/sidebar
 * Categories: onlinestore
 *
 * @package onlinestore
 */

?>
<!-- wp:group {"metadata":{"name":"Sidebar Wrapper"},"style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":874,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/singlepost-banner.webp" alt="" class="wp-image-874" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Search"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Search', 'onlinestore' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"style":{"border":{"radius":"12px"}},"backgroundColor":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Latest Post"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Recent Posts', 'onlinestore' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:latest-posts {"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":90,"featuredImageSizeHeight":90,"addLinkToFeaturedImage":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"18"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Categories"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Categories', 'onlinestore' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"showEmpty":true,"fontSize":"16"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tags"},"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Tags', 'onlinestore' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:tag-cloud {"showTagCounts":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
