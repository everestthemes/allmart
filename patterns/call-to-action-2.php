<?php
/**
 * Title: Call To Action
 * Slug: online-store/call-to-action-2
 * Categories: online-store
 *
 * @package online-store
 */
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:columns {"style":{"border":{"radius":"8px"}},"backgroundColor":"secondary"} -->
<div class="wp-block-columns has-secondary-background-color has-background" style="border-radius:8px"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:image {"id":269,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cat-dog.webp" alt="" class="wp-image-269"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"18"} -->
<p class="has-foreground-color has-text-color has-link-color has-18-font-size"><?php esc_html_e( 'Your first repeat delivery order! Use code ', 'online-store' ); ?> <strong><?php esc_html_e( 'BIGSALE2025', 'online-store' ); ?></strong> <?php esc_html_e( 'at checkout', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"30"} -->
<h2 class="wp-block-heading has-foreground-color has-text-color has-link-color has-30-font-size"><?php esc_html_e( '20% Off ! Your first repeat delivery order of $95', 'online-store' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"style":{"border":{"radius":"100px"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap","orientation":"vertical"}} -->
<div class="wp-block-buttons" style="border-radius:100px"><!-- wp:button {"backgroundColor":"primary","textColor":"card","className":"is-style-fill sm-align-left","style":{"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|card"}}}}} -->
<div class="wp-block-button is-style-fill sm-align-left"><a class="wp-block-button__link has-card-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'online-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
