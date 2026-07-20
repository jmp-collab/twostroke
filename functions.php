<?php
/**
 * TwoStroke functions and definitions.
 *
 * @package TwoStroke
 * @since   1.0.0
 */

if ( ! function_exists( 'twostroke_setup' ) ) {
	/**
	 * Theme setup.
	 */
	function twostroke_setup() {
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'twostroke_setup' );

if ( ! function_exists( 'twostroke_enqueue_styles' ) ) {
	/**
	 * Enqueue the theme stylesheet.
	 */
	function twostroke_enqueue_styles() {
		wp_enqueue_style(
			'twostroke-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'twostroke_enqueue_styles' );

if ( ! function_exists( 'twostroke_pattern_categories' ) ) {
	/**
	 * Register the pattern category used by the bundled patterns.
	 */
	function twostroke_pattern_categories() {
		register_block_pattern_category(
			'twostroke_garage',
			array(
				'label' => __( 'TwoStroke: Garage', 'twostroke' ),
			)
		);
	}
}
add_action( 'init', 'twostroke_pattern_categories' );
