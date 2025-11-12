<?php
/**
 * Title: Home Appliance Products
 * Slug: allmart/home-appliance-products
 * Categories: allmart
 * Keywords: Home Appliance Products
 *
 * @package  allmart
 */

?>
<!-- wp:group {"metadata":{"name":"Home Appliance Products"},"style":{"spacing":{"padding":{"bottom":"16px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:16px"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home-appliance-banner.png","id":448,"dimRatio":0,"customOverlayColor":"#c0aa90","isUserOverlayColor":false,"focalPoint":{"x":0.19,"y":0.55},"minHeight":272,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-image-hover-zoom-effect ","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-image-hover-zoom-effect" style="border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:272px"><img class="wp-block-cover__image-background wp-image-448 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home-appliance-banner.png" style="object-position:19% 55%" data-object-fit="cover" data-object-position="19% 55%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c0aa90"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading" style="line-height:1.1"><?php esc_html_e( 'Trending in home appliances', 'allmart' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'under $100', 'allmart' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-op-button-style-2","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-op-button-style-2"><a class="wp-block-button__link wp-element-button" style="border-radius:8px"><?php esc_html_e( 'View All', 'allmart' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"right"} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"18px","bottom":"18px","left":"12px","right":"12px"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:18px;padding-right:12px;padding-bottom:18px;padding-left:12px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small","style":{"spacing":{"margin":{"bottom":"4px"}}}} /-->

<!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"lineHeight":"1.3","fontSize":"16px","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.7px"}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong><?php esc_html_e( 'No results found', 'allmart' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'You can try', 'allmart' ); ?> <a class="wc-link-clear-any-filters" href="#"><?php esc_html_e( 'clearing any filters', 'allmart' ); ?></a> <?php esc_html_e( 'or head to our', 'allmart' ); ?> <a class="wc-link-stores-home" href="#"><?php esc_html_e( 'store\'s home', 'allmart' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
