<?php
/**
 * Title: Footer V2
 * Slug: online-store/footer-v2
 * Categories: online-store
 *
 * @package online-store
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns" style="padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card"} -->
<h2 class="wp-block-heading has-text-align-center has-card-color has-text-color has-link-color"><?php esc_html_e( 'Online Store', 'online-store' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"18"} -->
<p class="has-text-align-center has-card-color has-text-color has-link-color has-18-font-size"><?php esc_html_e( 'There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration form.', 'online-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card"} -->
<h5 class="wp-block-heading has-text-align-center has-card-color has-text-color has-link-color"><?php esc_html_e( 'Download App', 'online-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":248,"width":"140px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/google-play-store.webp" alt="" class="wp-image-248" style="width:140px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":247,"width":"140px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/app-store-img.webp" alt="" class="wp-image-247" style="width:140px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconBackgroundColor":"primary","iconBackgroundColorValue":"#004f4f","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-small"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card"} -->
<h5 class="wp-block-heading has-text-align-center has-card-color has-text-color has-link-color"><?php esc_html_e( 'Store information', 'online-store' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"18"} -->
<p class="has-text-align-center has-card-color has-text-color has-link-color has-18-font-size"><?php esc_html_e( 'Address Line 1, City, New Jersey, USA', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"18"} -->
<p class="has-text-align-center has-card-color has-text-color has-link-color has-18-font-size"><?php esc_html_e( '+(123) 456-7898', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"18"} -->
<p class="has-text-align-center has-card-color has-text-color has-link-color has-18-font-size"><?php esc_html_e( 'info@example.com', 'online-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"border":{"top":{"color":"#4c4c4c","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns" style="border-top-color:#4c4c4c;border-top-width:1px;padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card"} -->
<p class="has-text-align-center has-card-color has-text-color has-link-color"><?php esc_html_e( 'Copyright © 2025 Online Store. All rights reserved.', 'online-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
