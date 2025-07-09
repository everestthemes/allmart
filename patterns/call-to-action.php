<?php
/**
 * Title: Call To Action
 * Slug: onlinestore/call-to-action
 * Categories: onlinestore
 *
 * @package onlinestore
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"grown-early","contentPosition":"center center","sizeSlug":"full","className":"is-style-image-hover-zoom-effect","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"0","left":"var:preset|spacing|medium"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-style-image-hover-zoom-effect" style="border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-bottom:0;padding-left:var(--wp--preset--spacing--medium)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-grown-early-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"op-animated animate__fadeInUp","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group op-animated animate__fadeInUp"><!-- wp:image {"id":252,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/avatar-group.webp" alt="" class="wp-image-252"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":324,"width":"auto","height":"24px","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/5star-review.svg" alt="" class="wp-image-324" style="width:auto;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"16"} -->
<p class="has-card-color has-text-color has-link-color has-16-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '(4.9) Reviews', 'onlinestore' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"op-animated animate__fadeInUp","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"54"} -->
<h2 class="wp-block-heading op-animated animate__fadeInUp has-54-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Win Your Order', 'onlinestore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"op-animated animate__fadeInUp","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"fontSize":"24"} -->
<p class="op-animated animate__fadeInUp has-24-font-size" style="padding-bottom:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Share your review and automatically enter for a chance to win a full refund on your purchase!', 'onlinestore' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"op-animated animate__fadeInUp","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"100px"}},"fontSize":"18"} -->
<div class="wp-block-button op-animated animate__fadeInUp"><a class="wp-block-button__link has-18-font-size has-custom-font-size wp-element-button" style="border-radius:100px;font-style:normal;font-weight:500"><?php esc_html_e( 'Review The Product', 'onlinestore' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":475,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cta-pet-review.webp" alt="" class="wp-image-475"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
