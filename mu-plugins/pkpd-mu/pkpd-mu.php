<?php
/**
 * Peak Performance Digital Must Use Plugins
 *
 * @package         pkpd\pkpd-mu
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 *
 * Description:     Must-use plugins that load before normal plugins. Comment any that aren't needed. 
 * Version:         0.1.3
 * Updated:         July 19, 2023                 
 * Author URI:      https://peakperformancedigital.com
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Security Functions
 * require __DIR__ . '/01_security/security.php';
 */ 
require __DIR__ . '/01_security/block-username-enumerarion.php'; /*Blocks Username Enumeration*/
require __DIR__ . '/01_security/block-wpscan-agent.php'; /*Blocks WP Scan Agent*/
//require __DIR__ . '/01_security/disable-editors.php'; /* These directives should be added to wp-config.php */
require __DIR__ . '/01_security/disable-google-floc.php'; /*Disables Google FLoC*/
require __DIR__ . '/01_security/disable-xmlrpc.php'; /*Disables xmlrpc*/
require __DIR__ . '/01_security/hide-wp-update-for-non-admin-users.php'; /*Hides the WordPress update notifications for non-admin users*/
require __DIR__ . '/01_security/hide-wp-version.php'; /*Hide WP Version in various places*/
require __DIR__ . '/01_security/remove-comment-urls.php'; /*Remove URLs from WordPress comments*/


 /**
 * Performance Functions
 * require __DIR__ . '/02_performance/performance.php';
 */ 
require __DIR__ . '/02_performance/disable-emoji.php'; /*Disable WordPress emoji support since browsers render them natively. */
require __DIR__ . '/02_performance/disable-rss-feed-links.php'; /*Disable RSS Feed Links*/
require __DIR__ . '/02_performance/disable-rss-feeds.php'; /*Disable RSS Feeds*/
require __DIR__ . '/02_performance/remove-dashicons.php'; /*Remove Dashicons from front end if not logged in*/
require __DIR__ . '/02_performance/remove-duotone.php'; /*Remove WP Duotone SVGs*/
require __DIR__ . '/02_performance/remove-jquery-migrate.php'; /*Remove JQuery Migrate*/
require __DIR__ . '/02_performance/remove-rest-api-links.php'; /*Remove WP REST API links in page headers*/
require __DIR__ . '/02_performance/remove-rsd-link.php'; /*Disable RSD Link in headers*/
require __DIR__ . '/02_performance/remove-self-pingbacks.php'; /*Disable self pingback*/
require __DIR__ . '/02_performance/remove-shortlink-headers.php'; /*Remove Shortlink Headers*/
require __DIR__ . '/02_performance/remove-wp-manifest.php'; /*Remove WLManifest Link (Windows Live Writer)*/