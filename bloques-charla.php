<?php
/**
 * Bloques para la charla Gutenberg
 *
 * @package     Bloques Gutenberg
 * @author      Fernando García Rebolledo
 * @copyright   2018 Oh Yeah Dev
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Bloques para la charla Gutenberg
 * Plugin URI:  https://ohyeahdev.es
 * Description: Bloques para la charla online de Gutenberg.
 * Version:     0.1
 * Author:      Fernando García Rebolledo
 * Author URI:  https://ohyeahdev.es
 * Text Domain: bloques-charla
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Prefix:      ohy
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

require_once WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) . '/blocks/bloque-cero/index.php';
require_once WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) . '/blocks/editor-basico.php';
