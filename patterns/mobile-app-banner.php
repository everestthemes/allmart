<?php
/**
 * Title: Download Mobile App
 * Slug: online-store/mobile-app-banner
 * Categories: online-store
 *
 * @package online-store
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Download App"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"0"},"blockGap":"var:preset|spacing|xx-small"},"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"backgroundColor":"primary","textColor":"card","layout":{"type":"default"}} -->
<section class="wp-block-group has-card-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|lightcolor"}}}},"textColor":"lightcolor"} -->
<p class="has-text-align-center has-lightcolor-color has-text-color has-link-color"><?php esc_html_e( 'The Ultimate Mobile App for Pet Food and Accessories', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"54"} -->
<h2 class="wp-block-heading has-text-align-center has-54-font-size"><?php esc_html_e( 'Download the App Now', 'online-store' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:image {"id":36,"width":"156px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/app-store-img.webp" alt="" class="wp-image-36" style="width:156px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":35,"width":"156px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/google-play-store.webp" alt="" class="wp-image-35" style="width:156px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"32px"}}}} -->
<div class="wp-block-columns" style="margin-top:32px"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":456,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/app-image.webp" alt="" class="wp-image-456"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
