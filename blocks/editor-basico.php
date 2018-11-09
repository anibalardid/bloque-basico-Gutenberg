<?php
/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package bloques-charla
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type/#enqueuing-block-scripts
 */
function editor_basico_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = dirname( __FILE__ );

	$index_js = 'editor-basico/index.js';
	wp_register_script(
		'editor-basico-block-editor',
		plugins_url( $index_js, __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
			'wp-editor',
		),
		filemtime( "$dir/$index_js" )
	);

	$editor_css = 'editor-basico/editor.css';
	wp_register_style(
		'editor-basico-block-editor',
		plugins_url( $editor_css, __FILE__ ),
		array(),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'editor-basico/style.css';
	wp_register_style(
		'editor-basico-block',
		plugins_url( $style_css, __FILE__ ),
		array(),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'bloques-charla/editor-basico', array(
		'editor_script' => 'editor-basico-block-editor',
		'editor_style'  => 'editor-basico-block-editor',
		'style'         => 'editor-basico-block',
	) );
}
add_action( 'init', 'editor_basico_block_init' );
