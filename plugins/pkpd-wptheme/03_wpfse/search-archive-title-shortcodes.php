<?php
/**
 * Create Shortcode for Search and Archive Page Titles
 * 
 * This is only useful for block themes since search and archive
 * pages are controlled by php templates in classic themes.
 * 
 * @package         pkpd-wptheme\search-archive-title-shortcodes
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_display_search_query() {
    ob_start();
    printf( __( 'Search Results for: %s' ), get_search_query() );
    return ob_get_clean();
}
add_shortcode( 'search-title', 'pkpd_display_search_query' );