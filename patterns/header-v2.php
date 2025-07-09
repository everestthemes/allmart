<?php
/**
 * Title: Header V2
 * Slug: online-store/header-v2
 * Categories: online-store
 *
 * @package online-store
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"header top bar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"sm-align-center","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card"} -->
<p class="has-text-align-center sm-align-center has-card-color has-text-color has-link-color"><?php esc_html_e( 'Sale Up To 20% Off All Items - Premium Pet Food', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sm-align-center","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group sm-align-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"14"} -->
<p class="has-card-color has-text-color has-link-color has-14-font-size"><?php esc_html_e( 'Login', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"14"} -->
<p class="has-card-color has-text-color has-link-color has-14-font-size"><?php esc_html_e( 'About us', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card","fontSize":"14"} -->
<p class="has-card-color has-text-color has-link-color has-14-font-size"><?php esc_html_e( 'Contact Us', 'online-store' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Main Navigation"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"color":{"background":"#013030"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#013030;padding-top:var(--wp--preset--spacing--xx-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"textColor":"card"} -->
<h2 class="wp-block-heading has-card-color has-text-color has-link-color"><?php esc_html_e( 'Online Store', 'online-store' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:navigation {"textColor":"card","overlayBackgroundColor":"card","overlayTextColor":"foreground","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"16"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","textColor":"card","fontSize":"16","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|card"}}}}} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag","hasHiddenPrice":false,"priceColor":{"name":"Card","slug":"card","color":"#fff","class":"has-card-price-color"},"iconColor":{"name":"Card","slug":"card","color":"#fff","class":"has-card-price-color"},"productCountColor":{"name":"Secondary","slug":"secondary","color":"#FFAE00","class":"has-secondary-icon-color"},"style":{"typography":{"fontWeight":"600","fontStyle":"normal"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
