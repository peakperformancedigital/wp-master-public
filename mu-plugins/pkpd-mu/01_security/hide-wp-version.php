<?php
/**
 * Hide WP Version in various places
 * 
 * @package         pkpd-mu\hide-wp-version
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */


// Hide WordPress version
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function pkpd_remove_version_scripts_styles ($src) {
  if (strpos($src, 'ver=')) {
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('style_loader_src', 'pkpd_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'pkpd_remove_version_scripts_styles', 9999);

// remove version from head
remove_action('wp_head', 'wp_generator');