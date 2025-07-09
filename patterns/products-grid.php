<?php
/**
 * Title: Products Grid
 * Slug: onlinestore/product-grid
 * Categories: onlinestore
 *
 * @package onlinestore
 */
?>
<!-- wp:group {"className":"op-overflow-hidden","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group op-overflow-hidden" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/banner-5.webp","id":1153,"dimRatio":0,"customOverlayColor":"#3c3130","isUserOverlayColor":true,"focalPoint":{"x":0.45,"y":0.01},"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"op-animated animate__fadeInLeft","style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light op-animated animate__fadeInLeft" style="border-radius:12px;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3c3130"></span><img class="wp-block-cover__image-background wp-image-1153" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/banner-5.webp" style="object-position:45% 1%" data-object-fit="cover" data-object-position="45% 1%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:woocommerce/product-collection {"queryId":18,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"rating","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"collection":"woocommerce/product-collection/top-rated","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"op-animated animate__fadeInRight"} -->
<div class="wp-block-woocommerce-product-collection op-animated animate__fadeInRight"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"saleBadgeAlign":"center","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"16px"},"border":{"radius":"12px"}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:woocommerce/product-collection {"queryId":19,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"rating","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"collection":"woocommerce/product-collection/top-rated","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"op-animated animate__fadeInLeft"} -->
<div class="wp-block-woocommerce-product-collection op-animated animate__fadeInLeft"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"saleBadgeAlign":"center","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"4px"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"16px"},"border":{"radius":"12px"}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/banner-6.webp","id":1155,"dimRatio":0,"customOverlayColor":"#3c3130","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.45},"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"op-animated animate__fadeInRight","style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light op-animated animate__fadeInRight" style="border-radius:12px;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3c3130"></span><img class="wp-block-cover__image-background wp-image-1155" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/banner-6.webp" style="object-position:50% 45%" data-object-fit="cover" data-object-position="50% 45%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
