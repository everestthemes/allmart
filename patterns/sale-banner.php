<?php
/**
 * Title: Sale Banner
 * Slug: online-store/sale-banner
 * Categories: online-store
 *
 * @package online-store
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Section"},"className":"op-z-10","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"0"}},"color":{"background":"#fff2da"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group op-z-10 has-background" style="background-color:#fff2da;padding-top:var(--wp--preset--spacing--large);padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"12px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:12px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"8px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:8px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"54"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-54-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Sale Off', 'online-store' ); ?> <img class="wp-image-1053" style="width: 60px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/offer-ribbon.svg" alt=""></h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-secondary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e( 'Up to 30%', 'online-store' ); ?> </h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"18"} -->
<p class="has-primary-color has-text-color has-link-color has-18-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Find the perfect food for your one-of-a-kind pet', 'online-store' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:button {"textColor":"primary","className":"is-style-outline","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e( 'Grab the Deal Now', 'online-store' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"33px"} -->
<div style="height:33px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:image {"id":1014,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right","className":"op-n-mb-40 op-z-30 op-animated animate__fadeInUp"} -->
<figure class="wp-block-image alignright size-full op-n-mb-40 op-z-30 op-animated animate__fadeInUp"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/banner-3.webp" alt="" class="wp-image-1014" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
