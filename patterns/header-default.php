<?php
/**
 * Title: Header Default
 * Slug: allmart/header-default
 * Categories: allmart
 *
 * @package allmart
 */

?>
<!-- wp:group {"metadata":{"name":"Header Wrap"},"className":"header-v1","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group header-v1"><!-- wp:group {"className":"hide-on-sm","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group hide-on-sm has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"card","fontSize":"small"} -->
<p class="has-card-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Get Up to 50% OFF Store wide - Limited time only', 'allmart' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"card","fontSize":"small"} -->
<p class="has-card-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Shipping & Return', 'allmart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"card","fontSize":"small"} -->
<p class="has-card-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Track Order', 'allmart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"card","fontSize":"small"} -->
<p class="has-card-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Support', 'allmart' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"48px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":124,"shouldSyncIcon":true,"className":"is-style-rounded"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"op-grow hide-on-sm","layout":{"type":"constrained"}} -->
<div class="wp-block-group op-grow hide-on-sm"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"},"style":{"border":{"radius":"4px"}},"backgroundColor":"primary","namespace":"woocommerce/product-search"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:image {"id":86,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/headphone-icon.svg" alt="" class="wp-image-86" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( 'Call Us', 'allmart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"fontSize":"16"} -->
<h5 class="wp-block-heading has-16-font-size"><?php esc_html_e( '(123) 456 7890', 'allmart' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","addToCartBehaviour":"open_drawer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px"},"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"left":[]},"spacing":{"padding":{"top":"4px","bottom":"4px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;padding-top:4px;padding-bottom:4px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"foreground","className":"vertical-menu hide-on-sm","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"14"} /-->

<!-- wp:paragraph {"className":"hide-on-sm"} -->
<p class="hide-on-sm">|</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"textColor":"muted-foreground","icon":"menu","overlayTextColor":"muted-foreground","className":"primary-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"fontSize":"14"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"4px"},"elements":{"link":{"color":{"text":"#9b3838"}}},"color":{"text":"#9b3838"},"spacing":{"padding":{"left":"0","right":"0"}}},"fontSize":"14"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-transparent-background-color has-text-color has-background has-link-color has-14-font-size has-custom-font-size wp-element-button" href="/shop" style="border-radius:4px;color:#9b3838;padding-right:0;padding-left:0;font-style:normal;font-weight:600"><img class="wp-image-81" style="width: 24px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/give-away-gift.gif" alt="Best Deal | Gift Icon
"><span style="background-color: transparent; font-family: inherit;"><?php esc_html_e( 'Best Deals', 'allmart' ); ?></span></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"0","right":"0"}}},"fontSize":"14"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-14-font-size has-custom-font-size wp-element-button" style="border-radius:4px;padding-right:0;padding-left:0;font-style:normal;font-weight:600">/</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"0","right":"0"}}},"fontSize":"14"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-14-font-size has-custom-font-size wp-element-button" href="/wishlist" style="border-radius:4px;padding-right:0;padding-left:0;font-style:normal;font-weight:600"><span style="background-color: transparent; font-family: inherit;"><?php esc_html_e( 'Wishlist', 'allmart' ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
