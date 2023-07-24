<?php
/**
 * Add tag support to pages
 * 
 * @package         pkpd-wptheme\add-tags-to-pages
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */

 
function pkpd_add_tags_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'pkpd_add_tags_to_pages');