<?php
/**
 * Adds theme support for wp-block-styles in WP Block Themes
 * 
 * Adding theme support for wp-block-styles is optional. 
 * This file includes the combined CSS from the theme.scss 
 * file for individual blocks. For example, the padding 
 * when you add a background color to a group block 
 * and the default border of the quote block.
 * 
 * @package         pkpd-masterplugin\wp-block-styles
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * @link            https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
 * @link            https://fullsiteediting.com/lessons/creating-block-based-themes/
 */

if ( ! function_exists( 'fse_setup' ) ) {
	function fse_setup() {
            add_theme_support( 'wp-block-styles' );
        }
}
add_action( 'after_setup_theme', 'fse_setup' );