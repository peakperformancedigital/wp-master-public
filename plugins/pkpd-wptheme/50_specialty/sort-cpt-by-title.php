<?php
/**
 * Sorts a post type by title
 * 
 * Replace my_custom_post_type with the post
 * type you want to automatically sort
 * 
 * @package         pkpd-wptheme\sort-cpt-by-title
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */



function pkpd_posttype_sort_title( $query ){
    global $pagenow;
    if( is_admin()
        && 'edit.php' == $pagenow
        && isset($_GET['post_type']) && $_GET['post_type']=='my_custom_post_type'
        && !isset( $_GET['orderby'] ) ){
            $query->set( 'orderby', 'title' );
            $query->set( 'order', 'asc' );
    }
}
add_action( 'pre_get_posts', 'pkpd_posttype_sort_title' );