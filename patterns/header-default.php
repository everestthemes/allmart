<?php
/**
 * Title: Header Default
 * Slug: all-mart/header-default
 * Categories: all-mart
 *
 * @package all-mart
 */

?>
<!-- wp:group {"className":"overflow-hidden","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group overflow-hidden"><!-- wp:group {"metadata":{"name":"Sale Ticker"},"className":"op-overflow-hidden top-sale-marquee-container","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|card"}}}},"backgroundColor":"primary","textColor":"card","fontSize":"14","layout":{"type":"default"}} -->
<div class="wp-block-group op-overflow-hidden top-sale-marquee-container has-card-color has-primary-background-color has-text-color has-background has-link-color has-14-font-size" style="margin-top:0;margin-bottom:0;padding-top:8px;padding-right:0;padding-bottom:8px;padding-left:0"><!-- wp:group {"className":"top-sale-marquee","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group top-sale-marquee"><!-- wp:paragraph -->
<p><?php esc_html_e( '⚡Free Shipping On Orders Over $99', 'all-mart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '⚡Save flat 50% on Premium Pet Food', 'all-mart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '⚡30% Off Healthy Pet Diets', 'all-mart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '⚡Enjoy a special 20% off on your first purchase', 'all-mart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '⚡Free Shipping On Orders Over $99', 'all-mart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '⚡Save flat 50% on Premium Pet Food', 'all-mart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '⚡30% Off Healthy Pet Diets', 'all-mart' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '⚡Enjoy a special 20% off on your first purchase', 'all-mart' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Header nav"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"36"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-36-font-size"><a href="<?php echo esc_url( home_url() ); ?>" data-type="page" data-id="16"><?php esc_html_e( 'All Mart', 'all-mart' ); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayBackgroundColor":"background","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"hide-on-sm hide-on-md","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"blockGap":"24px"}},"fontSize":"16","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons {"metadata":{"name":"Search Button"},"className":"open-search-modal","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons open-search-modal" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"var:preset|spacing|xx-small","right":"var:preset|spacing|xx-small","top":"0","bottom":"0"}},"typography":{"lineHeight":"1"}}} -->
<div class="wp-block-button" style="line-height:1"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--xx-small)"><img class="wp-image-675" style="width: 22px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ic-search-dark.svg" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"left":"0px"}}}} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag","addToCartBehaviour":"open_drawer","cartAndCheckoutRenderStyle":"removed","iconColor":{"name":"Foreground","slug":"foreground","color":"#09090b","class":"has-foreground-icon-color"},"productCountColor":{"name":"Secondary","slug":"secondary","color":"#FFAE00","class":"has-secondary-product-count-color"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"always","icon":"menu","overlayBackgroundColor":"background","className":"hide-on-xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Search Modal"},"className":"search-modal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group search-modal"><!-- wp:group {"metadata":{"name":"Modal Content"},"className":"search-modal__content","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group search-modal__content" style="padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Search Form Wrap"},"className":"search-modal__content-search-form-wrap","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group search-modal__content-search-form-wrap"><!-- wp:group {"className":"search-modal__content-search-form","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group search-modal__content-search-form"><!-- wp:group {"className":"search-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group search-form-wrap"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"18"} -->
<h4 class="wp-block-heading has-18-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Start typing and press Enter to search', 'all-mart' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search \u003cimg class=\u0022wp-image-514\u0022 style=\u0022width: 20px;\u0022 src=\u0022<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ic-search.svg\u0022 alt=\u0022\u0022\u003e ","query":{"post_type":"product"},"style":{"border":{"radius":"12px"}},"backgroundColor":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"close-search-modal","layout":{"type":"flex","justifyContent":"right","verticalAlignment":"bottom"}} -->
<div class="wp-block-buttons close-search-modal"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color has-link-color wp-element-button">X</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
