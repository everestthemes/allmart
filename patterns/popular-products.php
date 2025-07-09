<?php
/**
 * Title: Popular Products
 * Slug: online-store/popular-products
 * Categories: online-store
 *
 * @package online-store
 */
?>
<!-- wp:group {"metadata":{"name":"Best Sellers"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":3,"className":"op-animated animate__fadeInUp","style":{"spacing":{"margin":{"bottom":"32px"}}}} -->
<h3 class="wp-block-heading op-animated animate__fadeInUp" style="margin-bottom:32px"><?php esc_html_e( 'OnlineStore Popular Products', 'online-store' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-collection {"queryId":17,"query":{"perPage":5,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"rating","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":5,"shrinkColumns":true},"collection":"woocommerce/product-collection/top-rated","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"op-animated animate__fadeInUp"} -->
<div class="wp-block-woocommerce-product-collection op-animated animate__fadeInUp"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"16px"},"border":{"radius":"12px"}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->
