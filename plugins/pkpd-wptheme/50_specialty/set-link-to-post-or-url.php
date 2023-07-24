<?php
/**
 * Changes permalink to something set in a custom field
 * 
 * Rewrite the permalink for post types with the value of a custom field using the Custom Link option
 * This version uses the generic get_post_type function rather than ACF of Meta Box functions
 * 
 * @package         pkpd-wptheme\set-link-to-post-or-url
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * @param string    $url  The original permalink.
 * @param object    $post The post object.
 * 
 */


function pkpd_prefix_custom_link_option( $url, $post ) {
    // Create an array of post types to skip.
    $new_url = 'redirect_url';

    // Create an array of post types to skip.
    $skip_post_types   = array(
        'attachment',
    );

    // page_link gives the ID rather than the $post object.
    if ( 'integer' === gettype( $post ) ) {
        $post_id = $post;
    } else {
        $post_id = $post->ID;
    }

    // Check if the current post type should be skipped.
    if ( in_array( get_post_type( $post_id ), $skip_post_types, true ) ) {
        return $url;
    }

    // Get the custom_link if one exists.
    $custom_link = get_post_meta( $post_id, esc_html($new_url), true );

    if ( $custom_link ) {
        $url = $custom_link;
    }

    return $url;
}

/**
 * Add filters for post_link, page_link, and post_type_link to update Custom Link
 */
foreach ( [ 'post', 'page', 'post_type' ] as $post_type ) {
    add_filter( $post_type . '_link', 'pkpd_prefix_custom_link_option', 10, 2 );
}