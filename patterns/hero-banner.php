<?php
/**
 * Title: Hero Banner
 * Slug: onlinestore/hero-banner
 * Categories: onlinestore
 *
 * @package onlinestore
 */

?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"0"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"24px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"op-animated animate__fadeInUp","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group op-animated animate__fadeInUp"><!-- wp:image {"id":252,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/avatar-group.webp" alt="" class="wp-image-252"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":324,"width":"auto","height":"24px","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/5star-review.svg" alt="" class="wp-image-324" style="width:auto;height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"16"} -->
<p class="has-primary-color has-text-color has-link-color has-16-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '(4.9) Trusted Company', 'onlinestore' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"op-animated animate__fadeInUp delay-1s","style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"72"} -->
<h2 class="wp-block-heading op-animated animate__fadeInUp delay-1s has-72-font-size" style="margin-top:var(--wp--preset--spacing--x-small);line-height:1.1"><?php esc_html_e( 'Real Pet', 'onlinestore' ); ?> <img class="wp-image-693" style="width: 120px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-header-img.webp" alt=""> <br><?php esc_html_e( 'Food For Healthy Your', 'onlinestore' ); ?> <img class="wp-image-696" style="width: 64px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-header-img-food.webp" alt=""> <?php esc_html_e( 'Pets', 'onlinestore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"op-animated animate__fadeInUp delay-2s","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|muted-foreground"}}}},"textColor":"muted-foreground","fontSize":"18"} -->
<p class="op-animated animate__fadeInUp delay-2s has-muted-foreground-color has-text-color has-link-color has-18-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Let\'s get real, you don\'t have to be a Veterinary Nutritionist to know good food. But it\'s nice to have one on staff.', 'onlinestore' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"op-animated animate__fadeInUp delay-2s"} -->
<div class="wp-block-buttons op-animated animate__fadeInUp delay-2s"><!-- wp:button {"textColor":"card","style":{"elements":{"link":{"color":{"text":"var:preset|color|card"}}},"border":{"radius":"6px"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"18"} -->
<div class="wp-block-button has-custom-font-size has-18-font-size" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-card-color has-text-color has-link-color wp-element-button" href="<?php echo esc_url( home_url() ); ?>/shop/" style="border-radius:6px"><?php esc_html_e( 'Shop Food Now', 'onlinestore' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":800,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right","className":"op-animated animate__fadeIn"} -->
<figure class="wp-block-image alignright size-full op-animated animate__fadeIn"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home-main-banner.webp" alt="" class="wp-image-800" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
