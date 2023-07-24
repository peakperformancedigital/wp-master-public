<?php
/**
 * Peak Performance Digital Theme Functions
 *
 * Calls agency theme-specific functions. Remove or disable
 * any unnecessary scripts. Scripts in 50_specialty and
 * 90_theme must be customized for your specific site or theme.
 * 
 * @package           pkpd-wptheme
 * @author            Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright         2023 Peak Performance Digital 
 * @license           GPL-2.0-or-later
 * @version           1.0.0
 * @since             1.0.0 Added 2023-07-24
 *
 * @wordpress-plugin
 * Plugin Name:         Peak Performance Digital Theme Functions
 * Plugin URI:          https://peakperformancedigital.com
 * Description:         Calls agency theme-specific functions.
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
 * General Utility Functions
 * require __DIR__ . '/01_utility/utility.php';
 */
require __DIR__ . '/01_utility/allow-svg.php'; /*shortcodes to allow SVG uploads*/
require __DIR__ . '/01_utility/dashboard-cleanup.php'; /*Removes unwanted widgets from the WP Dashboard*/
require __DIR__ . '/01_utility/excerpt-length.php'; /*Allows us to change the default excerpt length*/
require __DIR__ . '/01_utility/mail-smtp.php'; /*Send WP mail through SMTP server defined in wp-config.php*/
require __DIR__ . '/01_utility/modify-archive-labels.php'; /*Modify archive page labels for things like blog, search, etc.*/


/**
 * Extra Less Common or Optional WP Functions
 * require __DIR__ . '/02_wpextras/wpextras.php';
 */
require __DIR__ . '/02_wpextras/add-categories-to-pages.php'; /*Add category support to pages*/
require __DIR__ . '/02_wpextras/add-page-excerpts.php'; /*Add support for excerpts on page*/
require __DIR__ . '/02_wpextras/add-tags-to-pages.php'; /*Add tag support to pages*/
require __DIR__ . '/02_wpextras/allow-shortcodes-in-widgets.php'; /*By default, shortcodes don't work in widgets. This enables them. */
require __DIR__ . '/02_wpextras/block-editor-width.php'; /*Make the WP Block editor wider*/
//require __DIR__ . '/02_wpextras/disable-gutenberg-full-screen.php'; /*Disables the full-screen Block Editor*/
require __DIR__ . '/02_wpextras/hide-admin-bar.php'; /*Hide admin bar for non-administators on the front-end*/
require __DIR__ . '/02_wpextras/remove-category-base.php'; /*Removes '/category' from your category permalinks. WPML compatible.*/
//require __DIR__ . '/02_wpextras/remove-cpt-slug.php'; /*Remove Custom Post Type Slugs from Permalinks*/
//require __DIR__ . '/02_wpextras/reusable-blocks-in-sidebar.php'; /*Adds a Link to Reusable Blocks to Admin Menu */
require __DIR__ . '/02_wpextras/show-page-id.php'; /*Show page IDs in the admin columns*/


 /**
 * Block Theme Specific Functions
 * require __DIR__ . '/03_wpfse/fse.php';
 */
//require __DIR__ . '/03_wpfse/search-archive-title-shortcodes.php'; /* Create Shortcode for Search and Archive Page Titles*/
//require __DIR__ . '/03_wpfse/wp-block-styles'; /* Adds theme support for wp-block-styles in WP Block Themes */


 /**
 * Special Purpose Functions and snippets that need to be customized for each site. 
 * require __DIR__ . '/50_specialty/specialty.php';
 */
//require __DIR__ . '/50_specialty/acf-change-posts-order.php'; /*Change the ACF Post Object Dropdown Field to order by descending date */
//require __DIR__ . '/50_specialty/acf-user-avatar.php'; /*Use ACF image field as avatar*/
//require __DIR__ . '/50_specialty/restrict-gutenberg-blocks.php'; /*Restrict Gutenberg Blocks to only allowed block types*/
//require __DIR__ . '/50_specialty/set-link-to-post-or-url.php'; /*Changes permalink to something set in a custom field*/
//require __DIR__ . '/50_specialty/sort-cpt-by-title.php'; /*Sorts a post type by title.*/


 /**
 * Application-Specific Functions
 * require __DIR__ . '/60_application/application.php';
 */
//require __DIR__ . '/60_application/fluent-form-disable-menu-count.php'; /*Disables the admin menu item with the count of unread form submissions*/
//require __DIR__ . '/60_application/shortpixel-hide-bulk-menu.php'; /*Hides the menu item for bulk shortpixel resizing*/
//require __DIR__ . '/60_application/wpai-order-as-input-file.php'; /*Order imported items as they're ordered in the CSV/XML file by setting a custom post date*/
//require __DIR__ . '/60_application/wpai-upload-images-by-post-date.php'; /*Upload images to folder based on post date*/

 /**
 * Theme-Specific Functions
 * require __DIR__ . '/90_theme/theme.php';
 */
require __DIR__ . '/90_theme/cpt.php'; /* Add code to create custom post types and taxonomies here */
require __DIR__ . '/90_theme/editor-css-styles.php'; /*Enqueues block editor and customizer css styles*/
require __DIR__ . '/90_theme/google-analytics.php'; /*Enable Google Analytics via gtag.js in the page footer*/
require __DIR__ . '/90_theme/theme-css-styles.php'; /*Enqueues a default theme.css*/
require __DIR__ . '/90_theme/theme-misc.php'; /*Add miscellaneous theme-related functions here*/
require __DIR__ . '/90_theme/admin-css-styles.php'; /*Enqueue an admin stylesheet*/
require __DIR__ . '/90_theme/update-options.php'; /* Sets default website options */ 


