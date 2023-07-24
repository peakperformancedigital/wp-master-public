<?php
/**
 * Removes default block patterns from the block editor
 * 
 * Removes all the default block patterns. You will still be able to register your own patterns.
 * Sourced from https://dlxplugins.com/tutorials/remove-core-and-third-party-block-patterns/
 * 
 * @package         pkpd-masterplugin\remove-default-block-patterns
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL v2 or later
 * @version         1.1.0
 * @since           1.1.0 Added to pkpd-masterplugin on 2023-06-21
 * 
 *
 * Plugin Name:       DLX Remove Block Patterns
 * Plugin URI:        https://dlxplugins.com/plugins/alertsdlx/
 * Description:       Remove Block Patterns and third-party patterns.
 * Version:           1.1.0
 * Requires at least: 6.0
 * Requires PHP:      7.2
 * Author:            DLX Plugins
 * Author URI:        https://dlxplugins.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 *
 */

/**
 * This prevents loading of remote patterns.
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Remove Core patterns and third-party patterns.
 */
function dlx_remove_core_block_patterns() {
	$registered_patterns = \WP_Block_Patterns_Registry::get_instance()->get_all_registered();
	if ( $registered_patterns ) {
		foreach ( $registered_patterns as $pattern_properties ) {
			unregister_block_pattern( $pattern_properties['name'] );
		}
	}
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'init', 'dlx_remove_core_block_patterns', 100 ); // Note the priority.

/**
 * Register any of our custom block patterns.
 */
function dlx_register_custom_block_patterns() {
	// Register your custom block patterns here.
}
add_action( 'init', 'dlx_register_custom_block_patterns', 101 );