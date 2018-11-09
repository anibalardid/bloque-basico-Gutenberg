<?php
/**
 * BLOCK: Bloque cero
 *
 * Gutenberg Custom Block.
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}//end if
/**
 * Enqueue the block's assets for the editor.
 *
 * `wp-blocks`: Includes block type registration and related functions.
 * `wp-element`: Includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 1.0.0
 */
function ohy_bloque_cero_editor_assets() {
	wp_enqueue_script(
		'ohy-bloque-cero',
		plugins_url( 'bloque.js', __FILE__ ), // Block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ), // Dependencies, defined above.
		filemtime( plugin_dir_path( __FILE__ ) . 'bloque.js' ) // filemtime — Gets file modification time.
	);
	wp_enqueue_style(
		'ohy-bloque-cero-editor', // Handle.
		plugins_url( 'back.css', __FILE__ ), // Block editor CSS.
		array( 'wp-edit-blocks' ), // Dependency to include the CSS after it.
		filemtime( plugin_dir_path( __FILE__ ) . 'back.css' ) // filemtime — Gets file modification time.
	);
}
add_action( 'enqueue_block_editor_assets', 'ohy_bloque_cero_editor_assets' );
/**
 * Enqueue the block's assets for the frontend.
 *
 * @since 1.0.0
 */
function ohy_bloque_cero_front_assets() {
	wp_enqueue_style(
		'ohy-bloque-cero-frontend', // Handle.
		plugins_url( 'front.css', __FILE__ ), // Block frontend CSS.
		array( 'wp-blocks' ), // Dependency to include the CSS after it.
		filemtime( plugin_dir_path( __FILE__ ) . 'front.css' ) // filemtime — Gets file modification time.
	);
}
add_action( 'enqueue_block_assets', 'ohy_bloque_cero_front_assets' );
