<?php
/**
 * Peak Performance Digital Master Functions
 *
 * Calls agency standard functions.
 * 
 * @package           pkpd-masterplugin
 * @author            Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright         2023 Peak Performance Digital 
 * @license           GPL-2.0-or-later
 * @version           1.0.0
 * @since             1.0.0 Added 2023-07-24
 *
 * @wordpress-plugin
 * Plugin Name:         Peak Performance Digital Master Functions
 * Plugin URI:          https://peakperformancedigital.com
 * Description:         Calls agency standard functions.
 * Version:             1.0.0
 * Requires at least:   6.0
 * Requires PHP:        7.4
 * Updated:             July 24, 2023
 * Author:              Adam S. Lowe                 
 * Author URI:          https://peakperformancedigital.com
 * License:             GPL-2.0+
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 */

 
 /**
 * Default WordPress Customizations
 * require __DIR__ . '/01_wpdefaults/wpdefaults.php';
 */ 
require __DIR__ . '/01_wpdefaults/aria-current.php'; /*Adds aria-current="page" to the menu item for the current page*/
require __DIR__ . '/01_wpdefaults/disable-autoupdates.php'; /*Disable WordPress Auto Updates for plugins and themes*/
require __DIR__ . '/01_wpdefaults/disable-block-directory.php'; /*Disables the Block Editor block directory*/
require __DIR__ . '/01_wpdefaults/disable-site-health.php'; /*Disables the site health screen*/
require __DIR__ . '/01_wpdefaults/disable-wordpress-comments.php'; /*Disable WordPress Comments*/
require __DIR__ . '/01_wpdefaults/no-title-label.php'; /* Show '(No title)' if a post has no title.*/
require __DIR__ . '/01_wpdefaults/remove-default-block-patterns.php'; /*Removes default block patterns from the block editor*/


 /**
 * General Utility Functions
 * require __DIR__ . '/50_utility/utility.php';
 */
require __DIR__ . '/50_utility/conditional-is-empty.php'; /*Checks if post content is empty. Returns true or false*/
require __DIR__ . '/50_utility/date-shortcodes.php'; /*Shortcodes to print various dates*/
require __DIR__ . '/50_utility/default-excerpt-ellipses.php'; /*Replace the default [...] excerpt more with an elipsis.*/
