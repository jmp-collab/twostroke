<?php
/**
 * Title: Hero: Garage
 * Slug: twostroke/hero-garage
 * Categories: twostroke_garage
 * Description: Full-width dark hero with headline, accent rule and two buttons.
 *
 * @package TwoStroke
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"panel","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-panel-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Built in the garage. Proven on the road.', 'twostroke' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"twostroke-rule"} -->
<div class="wp-block-group twostroke-rule"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Builds, spec sheets and stories from the workshop. Add your own project and show what your machine is made of.', 'twostroke' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'See the builds', 'twostroke' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'About the workshop', 'twostroke' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
